<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\Communication\Clients\Rest;

use EBay\Communication\Configuration\KiotaAuthProvider;
use EBay\Communication\Configuration\CommunicationConfiguration;
use EBay\Communication\Configuration\RequestOptions;
use EBay\Communication\Generated\Feedback\FeedbackApiClient;
use EBay\Communication\Generated\Feedback\Models\AwaitingFeedbackResponse;
use EBay\Communication\Generated\Feedback\Models\GetFeedbackRatingSummaryResponse;
use EBay\Communication\Generated\Feedback\Models\GetFeedbackResponse;
use EBay\Communication\Generated\Feedback\Models\LeaveFeedbackRequest;
use EBay\Communication\Generated\Feedback\Models\LeaveFeedbackResponse;
use EBay\Communication\Generated\Feedback\Models\RespondToFeedbackRequest;
use EBay\Communication\Generated\Feedback\Awaiting_feedback\Awaiting_feedbackRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Feedback\Feedback_rating_summary\Feedback_rating_summaryRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Feedback\Feedback\FeedbackRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Feedback\Feedback\FeedbackRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Feedback\Respond_to_feedback\Respond_to_feedbackRequestBuilderPostRequestConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class FeedbackClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly CommunicationConfiguration $config,
    ) {}

    /** @return array<string, string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions !== null ? $requestOptions->headers : []
        );
    }

    public function getItemsAwaitingFeedback(
        ?string $filter = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $sort = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?AwaitingFeedbackResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->awaiting_feedback()->get(
                new Awaiting_feedbackRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Awaiting_feedbackRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                        limit: $limit,
                        offset: $offset,
                        sort: $sort,
                    ),
                )
            )->wait()
        );
    }

    public function getFeedback(
        ?string $feedbackId = null,
        ?string $feedbackType = null,
        ?string $filter = null,
        ?string $limit = null,
        ?string $listingId = null,
        ?string $offset = null,
        ?string $orderLineItemId = null,
        ?string $sort = null,
        ?string $transactionId = null,
        ?string $userId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetFeedbackResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->feedback()->get(
                new FeedbackRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: FeedbackRequestBuilderGetRequestConfiguration::createQueryParameters(
                        feedback_id: $feedbackId,
                        feedback_type: $feedbackType,
                        filter: $filter,
                        limit: $limit,
                        listing_id: $listingId,
                        offset: $offset,
                        order_line_item_id: $orderLineItemId,
                        sort: $sort,
                        transaction_id: $transactionId,
                        user_id: $userId,
                    ),
                )
            )->wait()
        );
    }

    public function leaveFeedback(LeaveFeedbackRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?LeaveFeedbackResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->feedback()->post(
                $body,
                new FeedbackRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getFeedbackRatingSummary(
        ?string $filter = null,
        ?string $userId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetFeedbackRatingSummaryResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->feedback_rating_summary()->get(
                new Feedback_rating_summaryRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Feedback_rating_summaryRequestBuilderGetRequestConfiguration::createQueryParameters(
                        filter: $filter,
                        user_id: $userId,
                    ),
                )
            )->wait()
        );
    }

    public function respondToFeedback(RespondToFeedbackRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->respond_to_feedback()->post(
                $body,
                new Respond_to_feedbackRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set CommunicationConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): FeedbackApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->feedbackBaseUrl);
        return new FeedbackApiClient($adapter);
    }
}
