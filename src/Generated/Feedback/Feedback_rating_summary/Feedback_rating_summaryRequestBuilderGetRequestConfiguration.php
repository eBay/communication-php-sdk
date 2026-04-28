<?php

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
     * @param string|null $filter Use this parameter to limit the response based on specified filter values:<br><ul><li><b>ratingType</b>: Specifies the type of rating being summarized and returned <b>(Required)</b>. Available values: <code>OVERALL_EXPERIENCE</code>, <code>OVERALL_EXPERIENCE_COMMENT</code>, <code>ON_TIME_DELIVERY</code>, <code>DSR_ITEM_AS_DESCRIBED</code>, <code>DSR_COMMUNICATION</code>, <code>DSR_SHIPPING_CHARGES</code>, <code>DSR_SHIPPING_TIME</code>, <code>ITEM_RATING</code><br>See <a href="/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum" >FeedbackRatingTypeEnum</a> for descriptions of values. </li><li><b>excludeRepeatFeedback</b>: Set to <code>true</code> to exclude repeat feedback.</li><li><b>lookbackPeriodInDays</b>: Limit the response to a previous period of days. Available values: <code>7</code>, <code>30</code>, <code>90</code>, <code>180</code>, or <code>365</code></li></ul><p>You can send the filter as a query parameter, either with the required <b>ratingType</b> only, or combining the filter values with a comma-separated <em>name</em><b>:</b><em>value</em> list. For example:</p><p><code>filter=ratingType:OVERALL_EXPERIENCE,excludeRepeatFeedback:true,period:365</code></p>
     * @param string|null $user_id Use this parameter to specify the unique identifier (the eBay username associated with the account) for the eBay user whose feedback summary is being retrieved.
     * @return Feedback_rating_summaryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $filter = null, ?string $user_id = null): Feedback_rating_summaryRequestBuilderGetQueryParameters {
        return new Feedback_rating_summaryRequestBuilderGetQueryParameters($filter, $user_id);
    }

}
