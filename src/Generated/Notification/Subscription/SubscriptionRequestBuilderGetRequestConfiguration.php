<?php

namespace EBay\Communication\Generated\Notification\Subscription;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriptionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubscriptionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriptionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscriptionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriptionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscriptionRequestBuilderGetQueryParameters.
     * @param string|null $continuation_token This string value can be used to return the next page in the result set. The string to use here is returned in the next field of the current page of results.
     * @param string|null $limit The maximum number of subscriptions to return per page from the result set.<br><br><b>Min:</b> 10<br><br><b>Max:</b> 100<br><br><b>Default:</b> 20
     * @return SubscriptionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $continuation_token = null, ?string $limit = null): SubscriptionRequestBuilderGetQueryParameters {
        return new SubscriptionRequestBuilderGetQueryParameters($continuation_token, $limit);
    }

}
