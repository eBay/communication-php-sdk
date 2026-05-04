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
use GuzzleHttp\HandlerStack;
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
        if ($guzzle === null) {
            $stack = HandlerStack::create();

            if ($config->diagnosticLogging) {
                $stack->push(function (callable $handler) {
                    return function ($request, array $options) use ($handler) {
                        return $handler($request, $options)->then(function ($response) use ($request) {
                            if ($response->getStatusCode() >= 400) {
                                fwrite(STDERR, sprintf("[REST %d] %s %s\n", $response->getStatusCode(), $request->getMethod(), $request->getUri()));
                                $body = (string) $response->getBody();
                                fwrite(STDERR, "[REST body] $body\n");
                                $response->getBody()->rewind();
                            }
                            return $response;
                        });
                    };
                });
            }

            $guzzle = new GuzzleClient([
                'timeout'         => 30,
                'connect_timeout' => 5,
                'handler'         => $stack,
            ]);
        }

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        $feedbackAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $feedbackAdapter->setBaseUrl($config->feedbackBaseUrl);
        $this->feedback = new FeedbackClient(new FeedbackApiClient($feedbackAdapter), $config);

        $messageAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $messageAdapter->setBaseUrl($config->messageBaseUrl);
        $this->message = new MessageClient(new MessageApiClient($messageAdapter), $config);

        $negotiationAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $negotiationAdapter->setBaseUrl($config->negotiationBaseUrl);
        $this->negotiation = new NegotiationClient(new NegotiationApiClient($negotiationAdapter), $config);

        $notificationAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $notificationAdapter->setBaseUrl($config->notificationBaseUrl);
        $this->notification = new NotificationClient(new NotificationApiClient($notificationAdapter), $config);
    }
}
