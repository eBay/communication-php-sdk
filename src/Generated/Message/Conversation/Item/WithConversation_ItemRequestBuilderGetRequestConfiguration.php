<?php

namespace EBay\Communication\Generated\Message\Conversation\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithConversation_ItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithConversation_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithConversation_ItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithConversation_ItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithConversation_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithConversation_ItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithConversation_ItemRequestBuilderGetQueryParameters.
     * @param string|null $conversation_type This query parameter specifies the type of the conversation being retrieved.<br><br>This parameter is always required when using the this method.<br><br><b>Valid values:</b><ul><li><code>FROM_EBAY</code></li><li><code>FROM_MEMBERS</code></li></ul>
     * @param string|null $limit The maximum number of entries that can be returned on each page of the paginated response.<br><br>Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the call retrieves entries 11 through 20 from the result set.<br><br><span class="tablenote"><b>Note:</b> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><b>Default:</b> 25<br><br><b>Maximum:</b> 50
     * @param string|null $offset The number of reports to skip in the result set before returning the first entry in the paginated response.<br><br>Use this parameter in conjunction with the <b>limit</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>0</code> and <b>limit</b> is set to <code>10</code>, the first page of the response will contain the first 10 entries from the complete list retrieved by the call.<br><br><span class="tablenote"><b>Note:</b> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><b>Default:</b> 0
     * @return WithConversation_ItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $conversation_type = null, ?string $limit = null, ?string $offset = null): WithConversation_ItemRequestBuilderGetQueryParameters {
        return new WithConversation_ItemRequestBuilderGetQueryParameters($conversation_type, $limit, $offset);
    }

}
