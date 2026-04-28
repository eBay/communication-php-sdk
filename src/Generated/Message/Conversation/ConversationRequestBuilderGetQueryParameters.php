<?php

namespace EBay\Communication\Generated\Message\Conversation;

/**
 * This method can be used to retrieve one or more conversations associated with a user.<br><br>The <b>conversation_type</b> query parameter is required when using this method to specify if the retrieved conversations are from eBay or from members.<br><br>The result set can also optionally be filtered by conversation status, reference, username, and/or time range. The <b>limit</b> and <b>offset</b> path parameters can be used to paginate the result set and control how many conversations are returned in the response.
*/
class ConversationRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("conversation_status")
     * @var string|null $conversationStatus This query parameter specifies the status of the conversations being retrieved. Only conversations in the specified status will be returned.<br><br><b>Valid values:</b><ul><li><code>ACTIVE</code></li><li><code>ARCHIVE</code></li><li><code>DELETE</code></li><li><code>READ</code></li><li><code>UNREAD</code></li></ul>
    */
    public ?string $conversationStatus = null;
    
    /**
     * @QueryParameter("conversation_type")
     * @var string|null $conversationType This query parameter specifies the type of the conversations being retrieved. Only conversations of the specified type will be returned.<br><br>This parameter is always required when using this method.<br><br><b>Valid values:</b><ul><li><code>FROM_EBAY</code></li><li><code>FROM_MEMBERS</code></li></ul>
    */
    public ?string $conversationType = null;
    
    /**
     * @QueryParameter("end_time")
     * @var string|null $endTime This query parameter specifies the end time (in ISO 8601 format) for which to stop retrieving conversations.<br><br>For example, if set to <code>2024-11-06T10:00:00.000Z</code>, only messages sent before this time will be retrieved.<br><br><b>Format:</b> yyyy-MM-ddThh:mm.ss.sssZ<br><br><span class="tablenote"><b>Note:</b> Currently, this parameter is only available if the <b>conversation_type</b> of the conversation is <code>FROM_MEMBERS</code>.</span>
    */
    public ?string $endTime = null;
    
    /**
     * @var string|null $limit The maximum number of entries that can be returned on each page of the paginated response.<br><br>Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the call retrieves entries 11 through 20 from the result set.<br><br><span class="tablenote"><b>Note:</b> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><b>Default:</b> 25<br><br><b>Maximum:</b> 50
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset The number of reports to skip in the result set before returning the first entry in the paginated response.<br><br>Use this parameter in conjunction with the <b>limit</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>0</code> and <b>limit</b> is set to <code>10</code>, the first page of the response will contain the first 10 entries from the complete list retrieved by the call.<br><br><span class="tablenote"><b>Note:</b> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><b>Default:</b> 0
    */
    public ?string $offset = null;
    
    /**
     * @QueryParameter("other_party_username")
     * @var string|null $otherPartyUsername This query parameter specifies the user name (login name) of an eBay user for which to retrieve conversations.<br><br>If this filter is used, only conversation(s) from the other eBay user specified through this parameter will be returned. 
    */
    public ?string $otherPartyUsername = null;
    
    /**
     * @QueryParameter("reference_id")
     * @var string|null $referenceId This query parameter specifies the unique identifier of the reference (specified by the corresponding <b>reference_type</b> value) associated with the conversation. Only conversations associated with the specified reference ID will be returned.<br><br>For example, in the case of a <code>LISTING</code> reference, this value will be the item ID value of the listing.<br><br><span class="tablenote"><b>Note:</b> If this query parameter is used, the <b>reference_type</b> parameter must also be used to specify the type of reference this ID is associated with.</span>
    */
    public ?string $referenceId = null;
    
    /**
     * @QueryParameter("reference_type")
     * @var string|null $referenceType This query parameter specifies the type of reference associated with a conversation.<br><br>The reference type is used to specify what the conversation is in reference to. For example, a value of <code>LISTING</code> specifies that the conversation is associated with a specific listing. The item ID associated with this listing can then be specified through the <b>reference_id</b> query parameter.<br><br>Currently, only the <code>LISTING</code> reference type is supported.
    */
    public ?string $referenceType = null;
    
    /**
     * @QueryParameter("start_time")
     * @var string|null $startTime This query parameter specifies the start time (in ISO 8601 format) for which to start retrieving conversations.<br><br>For example, if set to <code>2024-11-06T10:00:00.000Z</code>, only messages sent after this time will be retrieved.<br><br><b>Format:</b> yyyy-MM-ddThh:mm.ss.sssZ<br><br><span class="tablenote"><b>Note:</b> Currently, this parameter is only available if the <b>conversation_type</b> of the conversation is <code>FROM_MEMBERS</code>.</span>
    */
    public ?string $startTime = null;
    
    /**
     * Instantiates a new ConversationRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $conversation_status This query parameter specifies the status of the conversations being retrieved. Only conversations in the specified status will be returned.<br><br><b>Valid values:</b><ul><li><code>ACTIVE</code></li><li><code>ARCHIVE</code></li><li><code>DELETE</code></li><li><code>READ</code></li><li><code>UNREAD</code></li></ul>
     * @param string|null $conversation_type This query parameter specifies the type of the conversations being retrieved. Only conversations of the specified type will be returned.<br><br>This parameter is always required when using this method.<br><br><b>Valid values:</b><ul><li><code>FROM_EBAY</code></li><li><code>FROM_MEMBERS</code></li></ul>
     * @param string|null $end_time This query parameter specifies the end time (in ISO 8601 format) for which to stop retrieving conversations.<br><br>For example, if set to <code>2024-11-06T10:00:00.000Z</code>, only messages sent before this time will be retrieved.<br><br><b>Format:</b> yyyy-MM-ddThh:mm.ss.sssZ<br><br><span class="tablenote"><b>Note:</b> Currently, this parameter is only available if the <b>conversation_type</b> of the conversation is <code>FROM_MEMBERS</code>.</span>
     * @param string|null $limit The maximum number of entries that can be returned on each page of the paginated response.<br><br>Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the call retrieves entries 11 through 20 from the result set.<br><br><span class="tablenote"><b>Note:</b> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><b>Default:</b> 25<br><br><b>Maximum:</b> 50
     * @param string|null $offset The number of reports to skip in the result set before returning the first entry in the paginated response.<br><br>Use this parameter in conjunction with the <b>limit</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>0</code> and <b>limit</b> is set to <code>10</code>, the first page of the response will contain the first 10 entries from the complete list retrieved by the call.<br><br><span class="tablenote"><b>Note:</b> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><b>Default:</b> 0
     * @param string|null $other_party_username This query parameter specifies the user name (login name) of an eBay user for which to retrieve conversations.<br><br>If this filter is used, only conversation(s) from the other eBay user specified through this parameter will be returned. 
     * @param string|null $reference_id This query parameter specifies the unique identifier of the reference (specified by the corresponding <b>reference_type</b> value) associated with the conversation. Only conversations associated with the specified reference ID will be returned.<br><br>For example, in the case of a <code>LISTING</code> reference, this value will be the item ID value of the listing.<br><br><span class="tablenote"><b>Note:</b> If this query parameter is used, the <b>reference_type</b> parameter must also be used to specify the type of reference this ID is associated with.</span>
     * @param string|null $reference_type This query parameter specifies the type of reference associated with a conversation.<br><br>The reference type is used to specify what the conversation is in reference to. For example, a value of <code>LISTING</code> specifies that the conversation is associated with a specific listing. The item ID associated with this listing can then be specified through the <b>reference_id</b> query parameter.<br><br>Currently, only the <code>LISTING</code> reference type is supported.
     * @param string|null $start_time This query parameter specifies the start time (in ISO 8601 format) for which to start retrieving conversations.<br><br>For example, if set to <code>2024-11-06T10:00:00.000Z</code>, only messages sent after this time will be retrieved.<br><br><b>Format:</b> yyyy-MM-ddThh:mm.ss.sssZ<br><br><span class="tablenote"><b>Note:</b> Currently, this parameter is only available if the <b>conversation_type</b> of the conversation is <code>FROM_MEMBERS</code>.</span>
    */
    public function __construct(?string $conversation_status = null, ?string $conversation_type = null, ?string $end_time = null, ?string $limit = null, ?string $offset = null, ?string $other_party_username = null, ?string $reference_id = null, ?string $reference_type = null, ?string $start_time = null) {
        $this->conversationStatus = $conversation_status;
        $this->conversationType = $conversation_type;
        $this->endTime = $end_time;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->otherPartyUsername = $other_party_username;
        $this->referenceId = $reference_id;
        $this->referenceType = $reference_type;
        $this->startTime = $start_time;
    }

}
