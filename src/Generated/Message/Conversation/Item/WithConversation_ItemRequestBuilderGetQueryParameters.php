<?php

namespace EBay\Communication\Generated\Message\Conversation\Item;

/**
 * This method can be used to retrieve messages within a specific conversation.<br><br>The <b>conversation_id</b> of the conversation for which to retrieve messages is required as path parameters, and the and <b>conversation_type</b> of the conversation is required as a query parameter.
*/
class WithConversation_ItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("conversation_type")
     * @var string|null $conversationType This query parameter specifies the type of the conversation being retrieved.<br><br>This parameter is always required when using the this method.<br><br><b>Valid values:</b><ul><li><code>FROM_EBAY</code></li><li><code>FROM_MEMBERS</code></li></ul>
    */
    public ?string $conversationType = null;
    
    /**
     * @var string|null $limit The maximum number of entries that can be returned on each page of the paginated response.<br><br>Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the call retrieves entries 11 through 20 from the result set.<br><br><span class="tablenote"><b>Note:</b> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><b>Default:</b> 25<br><br><b>Maximum:</b> 50
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset The number of reports to skip in the result set before returning the first entry in the paginated response.<br><br>Use this parameter in conjunction with the <b>limit</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>0</code> and <b>limit</b> is set to <code>10</code>, the first page of the response will contain the first 10 entries from the complete list retrieved by the call.<br><br><span class="tablenote"><b>Note:</b> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><b>Default:</b> 0
    */
    public ?string $offset = null;
    
    /**
     * Instantiates a new WithConversation_ItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $conversation_type This query parameter specifies the type of the conversation being retrieved.<br><br>This parameter is always required when using the this method.<br><br><b>Valid values:</b><ul><li><code>FROM_EBAY</code></li><li><code>FROM_MEMBERS</code></li></ul>
     * @param string|null $limit The maximum number of entries that can be returned on each page of the paginated response.<br><br>Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the call retrieves entries 11 through 20 from the result set.<br><br><span class="tablenote"><b>Note:</b> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><b>Default:</b> 25<br><br><b>Maximum:</b> 50
     * @param string|null $offset The number of reports to skip in the result set before returning the first entry in the paginated response.<br><br>Use this parameter in conjunction with the <b>limit</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>0</code> and <b>limit</b> is set to <code>10</code>, the first page of the response will contain the first 10 entries from the complete list retrieved by the call.<br><br><span class="tablenote"><b>Note:</b> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><b>Default:</b> 0
    */
    public function __construct(?string $conversation_type = null, ?string $limit = null, ?string $offset = null) {
        $this->conversationType = $conversation_type;
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
