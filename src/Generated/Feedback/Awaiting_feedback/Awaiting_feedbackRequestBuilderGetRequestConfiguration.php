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

namespace EBay\Communication\Generated\Feedback\Awaiting_feedback;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Awaiting_feedbackRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Awaiting_feedbackRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Awaiting_feedbackRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Awaiting_feedbackRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Awaiting_feedbackRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Awaiting_feedbackRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Awaiting_feedbackRequestBuilderGetQueryParameters.
     * @param string|null $filter Use this parameter to limit the response based on the specified filter parameters. Supported filter parameters include the following:<br><p><ul><li><strong>listingId</strong>: Filter results by the specific listing ID</li><li><strong>receiverName</strong>: Filter results by the user's order partner name involved in the transaction</li><li><strong>userRole</strong>: Use this filter to only retrieve feedback due from the user in role as a seller or a buyer. If this filter is not used, all feedback due in both user roles is retrieved (<code>BUYER</code> or <code>SELLER</code>)</li></ul></p><p>Send the filter as a query parameter in a comma-separated <em>name</em>:<em>value</em> list. For example: <br><code>filter=listingId:123,receiverName:user,userRole:BUYER</code><p>
     * @param string|null $limit This parameter sets the maximum number of line items to return per page of data.<br><p>Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. For example, with offset set to <code>20</code> and limit set to <code>10</code>, the call retrieves entries 21 through 30 from the result set.</p><p>Although this field is optional, if omitted, the default value of <code>10</code> is used.</p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>The <strong>limit</strong> value is subject to the following rules:<ul><li>If a value greater than <code>25</code> is submitted, the system automatically defaults to a <strong>limit</strong> of <code>25</code>.</li><li>If a value of <code>0</code> or a negative number is submitted, the system automatically defaults to a <strong>limit</strong> of <code>10</code>.</li><li>If this parameter is omitted, the system defaults to a <strong>limit</strong> of <code>10</code>.</li></ul></span></span></p><p><strong>Default: </strong>10</p><p><strong>Maximum: </strong>25</p>
     * @param string|null $offset Use this parameter to specify the number of items to skip in the result set. This is used with the <code>limit</code> field to control the pagination of the output. For example:<br><ul><li>If <strong>offset</strong> is <code>0</code> and <strong>limit</strong> is <code>10</code>, the method will retrieve items 1-10 from the list of line items returned.</li><li>If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>10</code>, the method will retrieve items 11-20 from the list of line items returned.</li></ul><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This feature employs a zero-based list, where the first line item in the list has an offset of 0.</span></p><p>If this parameter is not set, its value defaults to <code>0</code>, which returns the first page of records.</p><p><strong>Default:</strong> 0</p>
     * @param string|null $sort Use this parameter to configure the order of the returned listings. The time is based on when the buyer paid for the line item. Acceptable values:<br><ul><li><strong>END_TIME_ASC:</strong> Sorts listings by end time from oldest to newest</li><li><strong>END_TIME_DESC:</strong> Sorts listings by end time from newest to oldest (default)</li></ul><p>If this parameter is omitted, its value defaults to <strong>END_TIME_DESC</strong>.</p><p><strong>Default: </strong><code>END_TIME_DESC</code></p>
     * @return Awaiting_feedbackRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $sort = null): Awaiting_feedbackRequestBuilderGetQueryParameters {
        return new Awaiting_feedbackRequestBuilderGetQueryParameters($filter, $limit, $offset, $sort);
    }

}
