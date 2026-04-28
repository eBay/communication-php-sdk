<?php

namespace EBay\Communication\Generated\Feedback\Awaiting_feedback;

/**
 * This method retrieves line items awaiting feedback from the user's order partner. You can refine the results using optional filter query parameters, such as item ID, user name, or user role in the transaction. Sorting and pagination features help organize and navigate returned items efficiently.<p>For sellers, only sold items that have not yet received feedback are included. For buyers, only purchased items for which feedback is still pending are included. If the user is both a buyer and a seller, this API returns items awaiting feedback for transactions where the user acted as either. Applying filters can limit results to either buyer-only or seller-only transactions. </p><p>The response provides an overview of feedback yet to be left for completed transactions (as filtered), with counts for both the buyer and seller roles. It includes an array of line items, each containing the listing ID, title, price (with currency and value). For each line item, the response offers feedback templates specifying which ratings are available.</p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Detailed seller ratings are for sellers only, and are created from buyer feedback.</span></p>
*/
class Awaiting_feedbackRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $filter Use this parameter to limit the response based on the specified filter parameters. Supported filter parameters include:<br><p><ul><li><b>listingId</b>: Filter results by the specific listing ID</li><li><b>receiverName</b>: Filter results by the user's order partner name involved in the transaction</li><li><b>userRole</b>: Use this filter to only retrieve feedback due from the user in role as a seller or a buyer. If this filter is not used, all feedback due in both user roles is retrieved (<code>BUYER</code> or <code>SELLER</code>)</li></ul></p><p>Send the filter as a query parameter in a comma-separated <em>name</em>:<em>value</em> list. For example: <br><code>filter=listingId:123,receiverName:user,userRole:BUYER</code><p>
    */
    public ?string $filter = null;
    
    /**
     * @var string|null $limit This parameter sets the maximum number of line items to return per page of data.<br><p>Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. For example, with offset set to <code>20</code> and limit set to <code>10</code>, the call retrieves entries 21 through 30 from the result set.</p><p> Although this field is optional, if omitted the default value of <code>25</code> is used.</p><p><b>Default: </b>25</p><p><b>Minimum: </b>25</p><p><b>Maximum: </b>200</p>
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset Use this parameter to specify the number of items to skip in the result set. This is used with the <code>limit</code> field to control the pagination of the output. For example:<br><ul><li>If <b>offset</b> is <code>0</code> and <b>limit</b> is <code>10</code>, the method will retrieve items 1-10 from the list of line items returned</li><li>If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>10</code>, the method will retrieve items 11-20 from the list of line items returned.</li></ul><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This feature employs a zero-based list, where the first line item in the list has an offset of 0.</span></p><p>If this parameter is not set, its value defaults to <code>0</code> which returns the first page of records.</p><p><b>Default:</b> 0</p>
    */
    public ?string $offset = null;
    
    /**
     * @var string|null $sort Use this parameter to configure the order of the returned listings. The time is based on when the buyer paid for the line item. Acceptable values:<br><ul><li><b>END_TIME_ASC:</b> Sorts listings by end time from oldest to newest</li><li><b>END_TIME_DESC:</b> Sorts listings by end time from newest to oldest (default)</li></ul><p>If this parameter is omitted, its value defaults to <b>END_TIME_DESC</b>.</p><p><b>Default: </b><code>END_TIME_DESC</code></p>
    */
    public ?string $sort = null;
    
    /**
     * Instantiates a new Awaiting_feedbackRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $filter Use this parameter to limit the response based on the specified filter parameters. Supported filter parameters include:<br><p><ul><li><b>listingId</b>: Filter results by the specific listing ID</li><li><b>receiverName</b>: Filter results by the user's order partner name involved in the transaction</li><li><b>userRole</b>: Use this filter to only retrieve feedback due from the user in role as a seller or a buyer. If this filter is not used, all feedback due in both user roles is retrieved (<code>BUYER</code> or <code>SELLER</code>)</li></ul></p><p>Send the filter as a query parameter in a comma-separated <em>name</em>:<em>value</em> list. For example: <br><code>filter=listingId:123,receiverName:user,userRole:BUYER</code><p>
     * @param string|null $limit This parameter sets the maximum number of line items to return per page of data.<br><p>Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. For example, with offset set to <code>20</code> and limit set to <code>10</code>, the call retrieves entries 21 through 30 from the result set.</p><p> Although this field is optional, if omitted the default value of <code>25</code> is used.</p><p><b>Default: </b>25</p><p><b>Minimum: </b>25</p><p><b>Maximum: </b>200</p>
     * @param string|null $offset Use this parameter to specify the number of items to skip in the result set. This is used with the <code>limit</code> field to control the pagination of the output. For example:<br><ul><li>If <b>offset</b> is <code>0</code> and <b>limit</b> is <code>10</code>, the method will retrieve items 1-10 from the list of line items returned</li><li>If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>10</code>, the method will retrieve items 11-20 from the list of line items returned.</li></ul><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This feature employs a zero-based list, where the first line item in the list has an offset of 0.</span></p><p>If this parameter is not set, its value defaults to <code>0</code> which returns the first page of records.</p><p><b>Default:</b> 0</p>
     * @param string|null $sort Use this parameter to configure the order of the returned listings. The time is based on when the buyer paid for the line item. Acceptable values:<br><ul><li><b>END_TIME_ASC:</b> Sorts listings by end time from oldest to newest</li><li><b>END_TIME_DESC:</b> Sorts listings by end time from newest to oldest (default)</li></ul><p>If this parameter is omitted, its value defaults to <b>END_TIME_DESC</b>.</p><p><b>Default: </b><code>END_TIME_DESC</code></p>
    */
    public function __construct(?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $sort = null) {
        $this->filter = $filter;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->sort = $sort;
    }

}
