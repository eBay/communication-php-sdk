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

namespace EBay\Communication\Generated\Feedback\Feedback;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FeedbackRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FeedbackRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FeedbackRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FeedbackRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FeedbackRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FeedbackRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FeedbackRequestBuilderGetQueryParameters.
     * @param string|null $feedback_id Use this field to only return a specific feedback record by its feedback ID. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If this query parameter is used, no other filters will be applicable.</span></p>
     * @param string|null $feedback_type Use this field to specify the type of feedback records to return. Acceptable values include the following: <br><ul><li><strong>FEEDBACK_RECEIVED</strong>: Retrieve feedback received by the specified user.</li><li><strong>FEEDBACK_SENT</strong>: Retrieve feedback sent by the specified user.</li></ul><p>If not specified, both feedback received and feedback left for the user shall be retrieved.</p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>When using <strong>FEEDBACK_SENT</strong>, it is recommended to also filter <strong>feedback_id</strong> to target results accurately.</span></p>
     * @param string|null $filter Use this parameter to limit the response based on the specified filter parameters as follows: <br><ul><li><strong>commentType</strong>: Return only feedback with the set type of comments. Comment types available are <code>POSITIVE</code>, <code>NEUTRAL</code>, or <code>NEGATIVE</code>. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Sellers can only provide positive feedback.</span></p> </li><li><strong>filterImage</strong>: Return feedback dependent on if images are included. Filter values available:<ul><li><code>true</code>: Return only feedback with images</li><li><code>false</code>: Return feedback with or without images</li></ul></li><li><strong>topics</strong>: Uses AI to generate items returned that are associated with the set topic. For example, if you set <code>topics:shipping</code>, only feedback comments about shipping are returned. Topics available are <code>shipping</code>, <code>service</code>, <code>packaging</code>, <code>description</code>, <code>seller-satisfaction</code>, <code>overall-satisfaction</code>, <code>refund</code>, <code>inventory</code>, <code>customer loyalty</code>, <code>seller-other</code>, <code>quality</code>, <code>price</code>, <code>condition</code>, <code>fit</code>, <code>appearance</code>, <code>dimensions</code>, <code>usage</code>, <code>product-satisfaction</code>, <code>product-other</code>, and <code>extras</code>.<br><br>See <a href="/develop/guides-v2/communications/sell-communications-guide#retrieve-ai-filtered-items" target="_blank">Retrieve AI-filtered feedback</a> for an example.</li><li><strong>period</strong>: Filter results by the number of days to look back for feedback. If not set, lifetime results are returned. Supported values available are <code>7</code>, <code>30</code>, <code>90</code>, <code>180</code>, or <code>365</code>.</li><li><strong>role</strong>: Filter results by the role of the user providing feedback. Roles available are <code>BUYER</code> or <code>SELLER</code>.</li><li><strong>showAutomatedFeedback</strong>: Filter results to include automated feedback left by eBay  entries. For sellers with less than a 10 feedback score, an automated feedback message on behalf of eBay is returned.<ul><li><code>true</code>: Return automated feedback including both user and eBay generated feedback</li><li><code>false</code>: Do not return eBay's automatic feedback for seller in response (default)</li></ul></li></ul>Send the filter as a query parameter in a comma-separated <em>name</em>:<em>value</em> list. For example:  <br><br><code>filter=commentType:POSITIVE,filterImage:true,topics:fit,period:30,role:SELLER,showAutomatedFeedback:true</code></p>
     * @param string|null $limit Use this parameter to set the maximum number of items to return per page of data.<br><p>Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. For example, with offset set to <code>20</code> and limit set to <code>10</code>, the call retrieves entries 21 through 30 from the result set.</p><p> Although this field is optional, if omitted the default value of <code>25</code> is used.</p><p><strong>Default: </strong>25</p><p><strong>Minimum: </strong>1</p><p><strong>Maximum: </strong>200</p>
     * @param string|null $listing_id Use this field to limit feedback entries to those associated with a specified listing.
     * @param string|null $offset Use this field to specify the number of line items to skip in the result set. This is used with the <code>limit</code> field to control the pagination of the output. For example:<br><ul><li>If <strong>offset</strong> is <code>0</code> and <strong>limit</strong> is <code>10</code>, the method will retrieve items 1-10 from the list of line items returned.</li><li>If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>10</code>, the method will retrieve items 11-20 from the list of line items returned.</li></ul><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This feature employs a zero-based list, where the first line item in the list has an offset of 0.</span></p><p>If this parameter is not set, its value defaults to <code>0</code> which returns the first page of records.</p><p><strong>Default:</strong> 0</p>
     * @param string|null $order_line_item_id Use this field to retrieve specific feedback entries related to an order line item ID. A maximum of two entries may be retrieved: feedback left by the buyer and feedback left by the seller. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If this query parameter is set, no other filters will be applicable.</span></p>
     * @param string|null $sort Use this parameter to configure the order of the returned items. The time is based on when the buyer paid for the line item. Acceptable values include the following:<br><ul><li><strong>RELEVANCE</strong>: Sorts items by relevance (default). This sort takes into account any available factors such as a comment score, comment type (positive, negative, neutral), how long ago the comment was left, or the length of the comment.</li><li><strong>TIME</strong>: Sorts items by end time from newest to oldest.</li></ul><p>If this parameter is omitted, its value defaults to <strong>RELEVANCE</strong>.</p><p><strong>Default: </strong><code>RELEVANCE</code></p>
     * @param string|null $transaction_id Use this field to limit feedback entries to those associated with the specified transaction ID.
     * @param string|null $user_id Use this field to specify the unique identifier user ID (eBay username of the user) of the account for which feedback is being retrieved.<br><br><span class="tablenote"><strong>Note:</strong> Both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     * @return FeedbackRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $feedback_id = null, ?string $feedback_type = null, ?string $filter = null, ?string $limit = null, ?string $listing_id = null, ?string $offset = null, ?string $order_line_item_id = null, ?string $sort = null, ?string $transaction_id = null, ?string $user_id = null): FeedbackRequestBuilderGetQueryParameters {
        return new FeedbackRequestBuilderGetQueryParameters($feedback_id, $feedback_type, $filter, $limit, $listing_id, $offset, $order_line_item_id, $sort, $transaction_id, $user_id);
    }

}
