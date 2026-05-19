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

namespace EBay\Communication\Clients\Rest;

use EBay\Communication\Configuration\CommunicationConfiguration;
use EBay\Communication\Configuration\RequestOptions;
use EBay\Communication\Configuration\TokenContext;
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
use EBay\Communication\Generated\Notification\Subscription\SubscriptionRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\SubscriptionRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\WithSubscription_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\WithSubscription_ItemRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\WithSubscription_ItemRequestBuilderPutRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\Disable\DisableRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\Enable\EnableRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\Filter\FilterRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\Filter\Item\WithFilter_ItemRequestBuilderDeleteRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\Filter\Item\WithFilter_ItemRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Notification\Subscription\Item\Test\TestRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Notification\Topic\TopicRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Notification\Topic\Item\WithTopic_ItemRequestBuilderGetRequestConfiguration;

final class NotificationClient
{
    public function __construct(
        private readonly NotificationApiClient $kiota,
        private readonly CommunicationConfiguration $config,
    ) {}

    /** @return array<string,string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        $headers = $this->config->defaultRequestOptions->headers;
        foreach ($requestOptions?->headers ?? [] as $key => $value) {
            if (!array_key_exists($key, $headers)) {
                $headers[$key] = $value;
            }
        }
        return $headers;
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getConfig(?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Config
    {
        TokenContext::set($accessToken);
        return $this->kiota->config()->get(new ConfigRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function updateConfig(Config $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->config()->put($body, new ConfigRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function getDestinations(
        ?string $continuationToken = null,
        ?string $limit = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?DestinationSearchResponse {
        TokenContext::set($accessToken);
        return $this->kiota->destination()->get(
            new DestinationRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: DestinationRequestBuilderGetRequestConfiguration::createQueryParameters(
                    continuation_token: $continuationToken,
                    limit: $limit,
                ),
            )
        )->wait();
    }

    public function createDestination(DestinationRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->destination()->post($body, new DestinationRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function getDestination(string $destinationId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Destination
    {
        TokenContext::set($accessToken);
        return $this->kiota->destination()->byDestination_id($destinationId)->get(new WithDestination_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function updateDestination(string $destinationId, DestinationRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->destination()->byDestination_id($destinationId)->put($body, new WithDestination_ItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function deleteDestination(string $destinationId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->destination()->byDestination_id($destinationId)->delete(new WithDestination_ItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function getPublicKey(string $publicKeyId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?PublicKey
    {
        TokenContext::set($accessToken);
        return $this->kiota->public_key()->byPublic_key_id($publicKeyId)->get(new WithPublic_key_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function getSubscriptions(
        ?string $continuationToken = null,
        ?string $limit = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?SubscriptionSearchResponse {
        TokenContext::set($accessToken);
        return $this->kiota->subscription()->get(
            new SubscriptionRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: SubscriptionRequestBuilderGetRequestConfiguration::createQueryParameters(
                    continuation_token: $continuationToken,
                    limit: $limit,
                ),
            )
        )->wait();
    }

    public function createSubscription(CreateSubscriptionRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->subscription()->post($body, new SubscriptionRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function getSubscription(string $subscriptionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Subscription
    {
        TokenContext::set($accessToken);
        return $this->kiota->subscription()->bySubscription_id($subscriptionId)->get(new WithSubscription_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function updateSubscription(string $subscriptionId, UpdateSubscriptionRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->subscription()->bySubscription_id($subscriptionId)->put($body, new WithSubscription_ItemRequestBuilderPutRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function deleteSubscription(string $subscriptionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->subscription()->bySubscription_id($subscriptionId)->delete(new WithSubscription_ItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function createSubscriptionFilter(string $subscriptionId, CreateSubscriptionFilterRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->subscription()->bySubscription_id($subscriptionId)->filter()->post($body, new FilterRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function getSubscriptionFilter(string $subscriptionId, string $filterId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SubscriptionFilter
    {
        TokenContext::set($accessToken);
        return $this->kiota->subscription()->bySubscription_id($subscriptionId)->filter()->byFilter_id($filterId)->get(new WithFilter_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function deleteSubscriptionFilter(string $subscriptionId, string $filterId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->subscription()->bySubscription_id($subscriptionId)->filter()->byFilter_id($filterId)->delete(new WithFilter_ItemRequestBuilderDeleteRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function disableSubscription(string $subscriptionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->subscription()->bySubscription_id($subscriptionId)->disable()->post(new DisableRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function enableSubscription(string $subscriptionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->subscription()->bySubscription_id($subscriptionId)->enable()->post(new EnableRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function testSubscription(string $subscriptionId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->subscription()->bySubscription_id($subscriptionId)->test()->post(new TestRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function getTopic(string $topicId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Topic
    {
        TokenContext::set($accessToken);
        return $this->kiota->topic()->byTopic_id($topicId)->get(new WithTopic_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function getTopics(
        ?string $continuationToken = null,
        ?string $limit = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?TopicSearchResponse {
        TokenContext::set($accessToken);
        return $this->kiota->topic()->get(
            new TopicRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: TopicRequestBuilderGetRequestConfiguration::createQueryParameters(
                    continuation_token: $continuationToken,
                    limit: $limit,
                ),
            )
        )->wait();
    }
}
