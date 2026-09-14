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
use EBay\Communication\Generated\Notification\NotificationApiClient;
use EBay\Communication\Generated\Notification\Models\Config;
use EBay\Communication\Generated\Notification\Models\CreateSubscriptionFilterRequest;
use EBay\Communication\Generated\Notification\Models\CreateSubscriptionRequest;
use EBay\Communication\Generated\Notification\Models\Destination;
use EBay\Communication\Generated\Notification\Models\DestinationRequest;
use EBay\Communication\Generated\Notification\Models\DestinationSearchResponse;
use EBay\Communication\Generated\Notification\Models\PublicKey;
use EBay\Communication\Generated\Notification\Models\Subscription;
use EBay\Communication\Generated\Notification\Models\SubscriptionFilter;
use EBay\Communication\Generated\Notification\Models\SubscriptionSearchResponse;
use EBay\Communication\Generated\Notification\Models\Topic;
use EBay\Communication\Generated\Notification\Models\TopicSearchResponse;
use EBay\Communication\Generated\Notification\Models\UpdateSubscriptionRequest;
use EBay\Communication\Generated\Notification\Config\ConfigRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Notification\Config\ConfigRequestBuilderPutRequestConfiguration;
use EBay\Communication\Generated\Notification\Destination\DestinationRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Notification\Destination\DestinationRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Notification\Destination\Item\WithDestination_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\Communication\Generated\Notification\Destination\Item\WithDestination_ItemRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Notification\Destination\Item\WithDestination_ItemRequestBuilderPutRequestConfiguration;
use EBay\Communication\Generated\Notification\Public_key\Item\WithPublic_key_ItemRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\Disable\DisableRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\Enable\EnableRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\Filter\FilterRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\Filter\Item\WithFilter_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\Filter\Item\WithFilter_ItemRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\Test\TestRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\WithSubscription_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\WithSubscription_ItemRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\WithSubscription_ItemRequestBuilderPutRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\SubscriptionRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\SubscriptionRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Notification\Topic\Item\WithTopic_ItemRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Notification\Topic\TopicRequestBuilderGetRequestConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class NotificationClient
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

    public function getConfig(?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Config
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->config()->get(
                new ConfigRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateConfig(Config $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->config()->put(
                $body,
                new ConfigRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getDestinations(
        ?string $continuationToken = null,
        ?string $limit = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?DestinationSearchResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->destination()->get(
                new DestinationRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: DestinationRequestBuilderGetRequestConfiguration::createQueryParameters(
                        continuation_token: $continuationToken,
                        limit: $limit,
                    ),
                )
            )->wait()
        );
    }

    public function createDestination(DestinationRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->destination()->post(
                $body,
                new DestinationRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getDestination(string $destinationId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Destination
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->destination()->byDestination_id($destinationId)->get(
                new WithDestination_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateDestination(
        string $destinationId,
        DestinationRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->destination()->byDestination_id($destinationId)->put(
                $body,
                new WithDestination_ItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteDestination(string $destinationId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->destination()->byDestination_id($destinationId)->delete(
                new WithDestination_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getPublicKey(string $publicKeyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?PublicKey
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->public_key()->byPublic_key_id($publicKeyId)->get(
                new WithPublic_key_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getSubscriptions(
        ?string $continuationToken = null,
        ?string $limit = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?SubscriptionSearchResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->subscription()->get(
                new SubscriptionRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: SubscriptionRequestBuilderGetRequestConfiguration::createQueryParameters(
                        continuation_token: $continuationToken,
                        limit: $limit,
                    ),
                )
            )->wait()
        );
    }

    public function createSubscription(CreateSubscriptionRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->subscription()->post(
                $body,
                new SubscriptionRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createSubscriptionFilter(
        string $subscriptionId,
        CreateSubscriptionFilterRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->subscription()->bySubscription_id($subscriptionId)->filter()->post(
                $body,
                new FilterRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getSubscription(string $subscriptionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Subscription
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->subscription()->bySubscription_id($subscriptionId)->get(
                new WithSubscription_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateSubscription(
        string $subscriptionId,
        UpdateSubscriptionRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->subscription()->bySubscription_id($subscriptionId)->put(
                $body,
                new WithSubscription_ItemRequestBuilderPutRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteSubscription(string $subscriptionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->subscription()->bySubscription_id($subscriptionId)->delete(
                new WithSubscription_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getSubscriptionFilter(
        string $filterId,
        string $subscriptionId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?SubscriptionFilter
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->subscription()->bySubscription_id($subscriptionId)->filter()->byFilter_id($filterId)->get(
                new WithFilter_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function deleteSubscriptionFilter(
        string $filterId,
        string $subscriptionId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->subscription()->bySubscription_id($subscriptionId)->filter()->byFilter_id($filterId)->delete(
                new WithFilter_ItemRequestBuilderDeleteRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function disableSubscription(string $subscriptionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->subscription()->bySubscription_id($subscriptionId)->disable()->post(
                new DisableRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function enableSubscription(string $subscriptionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->subscription()->bySubscription_id($subscriptionId)->enable()->post(
                new EnableRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function testSubscription(string $subscriptionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->subscription()->bySubscription_id($subscriptionId)->test()->post(
                new TestRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getTopic(string $topicId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Topic
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->topic()->byTopic_id($topicId)->get(
                new WithTopic_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getTopics(
        ?string $continuationToken = null,
        ?string $limit = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?TopicSearchResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->topic()->get(
                new TopicRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: TopicRequestBuilderGetRequestConfiguration::createQueryParameters(
                        continuation_token: $continuationToken,
                        limit: $limit,
                    ),
                )
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set CommunicationConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): NotificationApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->notificationBaseUrl);
        return new NotificationApiClient($adapter);
    }
}
