<?php

namespace EBay\Communication\Clients\Rest;

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

final class NotificationClient
{
    public function __construct(private readonly NotificationApiClient $kiota) {}

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getConfig(?string $accessToken = null): ?Config
    {
        TokenContext::set($accessToken);
        return $this->kiota->config()->get()->wait();
    }

    public function updateConfig(Config $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->config()->put($body)->wait();
    }

    public function getDestinations(?string $accessToken = null): ?DestinationSearchResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->destination()->get()->wait();
    }

    public function createDestination(DestinationRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->destination()->post($body)->wait();
    }

    public function getDestination(string $destinationId, ?string $accessToken = null): ?Destination
    {
        TokenContext::set($accessToken);
        return $this->kiota->destination()->byDestination_id($destinationId)->get()->wait();
    }

    public function updateDestination(string $destinationId, DestinationRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->destination()->byDestination_id($destinationId)->put($body)->wait();
    }

    public function deleteDestination(string $destinationId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->destination()->byDestination_id($destinationId)->delete()->wait();
    }

    public function getPublicKey(string $publicKeyId, ?string $accessToken = null): ?PublicKey
    {
        TokenContext::set($accessToken);
        return $this->kiota->public_key()->byPublic_key_id($publicKeyId)->get()->wait();
    }

    public function getSubscriptions(?string $accessToken = null): ?SubscriptionSearchResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->subscription()->get()->wait();
    }

    public function createSubscription(CreateSubscriptionRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->subscription()->post($body)->wait();
    }

    public function getSubscription(string $subscriptionId, ?string $accessToken = null): ?Subscription
    {
        TokenContext::set($accessToken);
        return $this->kiota->subscription()->bySubscription_id($subscriptionId)->get()->wait();
    }

    public function updateSubscription(string $subscriptionId, UpdateSubscriptionRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->subscription()->bySubscription_id($subscriptionId)->put($body)->wait();
    }

    public function deleteSubscription(string $subscriptionId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->subscription()->bySubscription_id($subscriptionId)->delete()->wait();
    }

    public function createSubscriptionFilter(string $subscriptionId, CreateSubscriptionFilterRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->subscription()->bySubscription_id($subscriptionId)->filter()->post($body)->wait();
    }

    public function getSubscriptionFilter(string $subscriptionId, string $filterId, ?string $accessToken = null): ?SubscriptionFilter
    {
        TokenContext::set($accessToken);
        return $this->kiota->subscription()->bySubscription_id($subscriptionId)->filter()->byFilter_id($filterId)->get()->wait();
    }

    public function deleteSubscriptionFilter(string $subscriptionId, string $filterId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->subscription()->bySubscription_id($subscriptionId)->filter()->byFilter_id($filterId)->delete()->wait();
    }

    public function disableSubscription(string $subscriptionId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->subscription()->bySubscription_id($subscriptionId)->disable()->post()->wait();
    }

    public function enableSubscription(string $subscriptionId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->subscription()->bySubscription_id($subscriptionId)->enable()->post()->wait();
    }

    public function testSubscription(string $subscriptionId, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->subscription()->bySubscription_id($subscriptionId)->test()->post()->wait();
    }

    public function getTopic(string $topicId, ?string $accessToken = null): ?Topic
    {
        TokenContext::set($accessToken);
        return $this->kiota->topic()->byTopic_id($topicId)->get()->wait();
    }

    public function getTopics(?string $accessToken = null): ?TopicSearchResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->topic()->get()->wait();
    }
}
