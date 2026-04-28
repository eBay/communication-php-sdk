<?php

namespace EBay\Communication\Configuration;

final class CommunicationConfiguration
{
    public RequestOptions $defaultRequestOptions;

    public function __construct()
    {
        $this->defaultRequestOptions = new RequestOptions();
    }

    public string $feedbackBaseUrl    = 'https://api.ebay.com/commerce/feedback/v1';
    public string $messageBaseUrl     = 'https://api.ebay.com/commerce/message/v1';
    public string $notificationBaseUrl = 'https://api.ebay.com/commerce/notification/v1';
    public string $negotiationBaseUrl  = 'https://api.ebay.com/sell/negotiation/v1';

    /** Static fallback; per-call token takes precedence. */
    public ?string $accessToken = null;

    public bool $diagnosticLogging = false;

    /** Hostnames tokens may be sent to — passed to AllowedHostsValidator. */
    public function getAllowedHosts(): array
    {
        return array_unique(array_filter(array_map(
            fn(string $url) => parse_url($url, PHP_URL_HOST),
            [
                $this->feedbackBaseUrl,
                $this->messageBaseUrl,
                $this->notificationBaseUrl,
                $this->negotiationBaseUrl,
            ]
        )));
    }
}
