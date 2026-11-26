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

namespace EBay\Communication\Generated\Feedback\Feedback_rating_summary;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Feedback_rating_summaryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Feedback_rating_summaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Feedback_rating_summaryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Feedback_rating_summaryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Feedback_rating_summaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Feedback_rating_summaryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Feedback_rating_summaryRequestBuilderGetQueryParameters.
     * @param string|null $filter Use this parameter to limit the response based on specified filter values:<br><ul><li><strong>ratingType</strong>: Specifies the type of rating being summarized and returned <strong>(Required)</strong>. Available values include <code>OVERALL_EXPERIENCE</code>, <code>OVERALL_EXPERIENCE_COMMENT</code>, <code>ON_TIME_DELIVERY</code>, <code>DSR_ITEM_AS_DESCRIBED</code>, <code>DSR_COMMUNICATION</code>, <code>DSR_SHIPPING_CHARGES</code>, <code>DSR_SHIPPING_TIME</code>, and <code>ITEM_RATING</code>.<br>See <strong>FeedbackRatingTypeEnum</strong> for descriptions of values. </li><li><strong>excludeRepeatFeedback</strong>: Set to <code>true</code> to exclude repeat feedback. When set to <code>true</code>, counts are only available for the 365-day period, so only 365-day data is returned. Combining <code>excludeRepeatFeedback:true</code> with <code>period:30</code> or <code>period:180</code> returns an unsupported request parameter combination error.</li><li><strong>period</strong>: Limit the response to a previous period of days. Supported values are <code>30</code>, <code>180</code>, or <code>365</code>. Other values (for example, <code>7</code>, <code>60</code>, or <code>90</code>) are not supported and return error 501037. If this filter is omitted, summaries for all available periods (<code>7</code>, <code>30</code>, <code>180</code>, and <code>365</code> days) are returned.</li></ul><p>You can send the filter as a query parameter, either with the required <strong>ratingType</strong> only, or combining the filter values with a comma-separated <em>name</em><strong>:</strong><em>value</em> list. For example:</p><p><code>filter=ratingType:OVERALL_EXPERIENCE,period:30</code></p><p><code>filter=ratingType:OVERALL_EXPERIENCE,excludeRepeatFeedback:true,period:365</code></p>
     * @param string|null $user_id Use this parameter to specify the unique identifier (the eBay username associated with the account) for the eBay user whose feedback summary is being retrieved.
     * @return Feedback_rating_summaryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $filter = null, ?string $user_id = null): Feedback_rating_summaryRequestBuilderGetQueryParameters {
        return new Feedback_rating_summaryRequestBuilderGetQueryParameters($filter, $user_id);
    }

}
