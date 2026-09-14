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

namespace EBay\Communication\Generated\Message\Conversation\Item;

/**
 * This method can be used to retrieve messages within a specific conversation.<br><br>The <strong>conversation_id</strong> of the conversation for which to retrieve messages is required as a path parameter and the <strong>conversation_type</strong> of the conversation is required as a query parameter.
*/
class WithConversation_ItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("conversation_type")
     * @var string|null $conversationType This query parameter specifies the type of the conversation being retrieved.<br><br>This parameter is always required when using this method.<br><br><strong>Valid values:</strong><ul><li><code>FROM_EBAY</code></li><li><code>FROM_MEMBERS</code></li></ul>
    */
    public ?string $conversationType = null;
    
    /**
     * @var string|null $limit The maximum number of entries that can be returned on each page of the paginated response.<br><br>Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. For example, if <strong>offset</strong> is set to <code>10</code> and <strong>limit</strong> is set to <code>10</code>, the call retrieves entries 11 through 20 from the result set.<br><br><span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><strong>Default:</strong> 25<br><br><strong>Maximum:</strong> 50
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset The number of reports to skip in the result set before returning the first entry in the paginated response.<br><br>Use this parameter in conjunction with the <strong>limit</strong> parameter to control the pagination of the output. For example, if <strong>offset</strong> is set to <code>0</code> and <strong>limit</strong> is set to <code>10</code>, the first page of the response will contain the first 10 entries from the complete list retrieved by the call.<br><br><span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><strong>Default:</strong> 0
    */
    public ?string $offset = null;
    
    /**
     * Instantiates a new WithConversation_ItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $conversation_type This query parameter specifies the type of the conversation being retrieved.<br><br>This parameter is always required when using this method.<br><br><strong>Valid values:</strong><ul><li><code>FROM_EBAY</code></li><li><code>FROM_MEMBERS</code></li></ul>
     * @param string|null $limit The maximum number of entries that can be returned on each page of the paginated response.<br><br>Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. For example, if <strong>offset</strong> is set to <code>10</code> and <strong>limit</strong> is set to <code>10</code>, the call retrieves entries 11 through 20 from the result set.<br><br><span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><strong>Default:</strong> 25<br><br><strong>Maximum:</strong> 50
     * @param string|null $offset The number of reports to skip in the result set before returning the first entry in the paginated response.<br><br>Use this parameter in conjunction with the <strong>limit</strong> parameter to control the pagination of the output. For example, if <strong>offset</strong> is set to <code>0</code> and <strong>limit</strong> is set to <code>10</code>, the first page of the response will contain the first 10 entries from the complete list retrieved by the call.<br><br><span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br>If this parameter is omitted, the default value is used.<br><br><strong>Default:</strong> 0
    */
    public function __construct(?string $conversation_type = null, ?string $limit = null, ?string $offset = null) {
        $this->conversationType = $conversation_type;
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
