<?php

namespace EBay\Communication;

use EBay\Communication\Clients\Rest\FeedbackClient;
use EBay\Communication\Clients\Rest\MessageClient;
use EBay\Communication\Clients\Rest\NegotiationClient;
use EBay\Communication\Clients\Rest\NotificationClient;
use EBay\Communication\Configuration\CommunicationConfiguration;
use EBay\Communication\Configuration\KiotaAuthProvider;
use EBay\Communication\Generated\Feedback\FeedbackApiClient;
use EBay\Communication\Generated\Message\MessageApiClient;
use EBay\Communication\Generated\Negotiation\NegotiationApiClient;
use EBay\Communication\Generated\Notification\NotificationApiClient;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class CommunicationClient
{
    public readonly FeedbackClient $feedback;
    public readonly MessageClient $message;
    public readonly NegotiationClient $negotiation;
    public readonly NotificationClient $notification;

    public function __construct(CommunicationConfiguration $config, ?GuzzleClient $guzzle = null)
    {
        $guzzle ??= new GuzzleClient([
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        $feedbackAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $feedbackAdapter->setBaseUrl($config->feedbackBaseUrl);
        $this->feedback = new FeedbackClient(new FeedbackApiClient($feedbackAdapter));

        $messageAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $messageAdapter->setBaseUrl($config->messageBaseUrl);
        $this->message = new MessageClient(new MessageApiClient($messageAdapter));

        $negotiationAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $negotiationAdapter->setBaseUrl($config->negotiationBaseUrl);
        $this->negotiation = new NegotiationClient(new NegotiationApiClient($negotiationAdapter));

        $notificationAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $notificationAdapter->setBaseUrl($config->notificationBaseUrl);
        $this->notification = new NotificationClient(new NotificationApiClient($notificationAdapter));
    }
}
