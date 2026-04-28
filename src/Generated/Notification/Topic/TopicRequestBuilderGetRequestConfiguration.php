<?php

namespace EBay\Communication\Generated\Notification\Topic;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TopicRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TopicRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TopicRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TopicRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TopicRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TopicRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TopicRequestBuilderGetQueryParameters.
     * @param string|null $continuation_token This string value can be used to return the next page in the result set. The string to use here is returned in the <b>next</b> field of the current page of results.
     * @param string|null $limit The maximum number of notification topics to return per page from the result set.<br><br><b>Min:</b> 10<br><br><b>Max:</b> 100<br><br><b>Default:</b> 20
     * @return TopicRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $continuation_token = null, ?string $limit = null): TopicRequestBuilderGetQueryParameters {
        return new TopicRequestBuilderGetQueryParameters($continuation_token, $limit);
    }

}
