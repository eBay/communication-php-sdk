<?php

namespace EBay\Communication\Generated\Feedback\Feedback_rating_summary;

/**
 * This method provides a detailed overview of feedback ratings associated with a user in the eBay marketplace. Specify a user ID and apply filters to retrieve summarized feedback data categorized by rating types and user roles. These returned metrics are aggregated, which offers insight into user experiences and performance. <p class="msgbox_tipInDiv" ><div class="msgbox_tip"><span><b><span style="color: #478415;">Tip:</span></b></span></span> You can use this method to help sellers and buyers understand their marketplace reputation and identify areas for improvement.</div></p><p>Returned data provides a summary of feedback ratings for a user by rating type (such as overall experience, communication, or delivery timeliness) for both buyer and seller roles. Each type of rating includes aggregated metrics like averages, counts, unique feedback givers, and the percentage of positive ratings (excluding neutrals). The response also details the distribution of specific rating values, their frequency, and time period (with period units like days or months) over which these metrics were calculated.</p>
*/
class Feedback_rating_summaryRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $filter Use this parameter to limit the response based on specified filter values:<br><ul><li><b>ratingType</b>: Specifies the type of rating being summarized and returned <b>(Required)</b>. Available values: <code>OVERALL_EXPERIENCE</code>, <code>OVERALL_EXPERIENCE_COMMENT</code>, <code>ON_TIME_DELIVERY</code>, <code>DSR_ITEM_AS_DESCRIBED</code>, <code>DSR_COMMUNICATION</code>, <code>DSR_SHIPPING_CHARGES</code>, <code>DSR_SHIPPING_TIME</code>, <code>ITEM_RATING</code><br>See <a href="/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum" >FeedbackRatingTypeEnum</a> for descriptions of values. </li><li><b>excludeRepeatFeedback</b>: Set to <code>true</code> to exclude repeat feedback.</li><li><b>lookbackPeriodInDays</b>: Limit the response to a previous period of days. Available values: <code>7</code>, <code>30</code>, <code>90</code>, <code>180</code>, or <code>365</code></li></ul><p>You can send the filter as a query parameter, either with the required <b>ratingType</b> only, or combining the filter values with a comma-separated <em>name</em><b>:</b><em>value</em> list. For example:</p><p><code>filter=ratingType:OVERALL_EXPERIENCE,excludeRepeatFeedback:true,period:365</code></p>
    */
    public ?string $filter = null;
    
    /**
     * @QueryParameter("user_id")
     * @var string|null $userId Use this parameter to specify the unique identifier (the eBay username associated with the account) for the eBay user whose feedback summary is being retrieved.
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new Feedback_rating_summaryRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $filter Use this parameter to limit the response based on specified filter values:<br><ul><li><b>ratingType</b>: Specifies the type of rating being summarized and returned <b>(Required)</b>. Available values: <code>OVERALL_EXPERIENCE</code>, <code>OVERALL_EXPERIENCE_COMMENT</code>, <code>ON_TIME_DELIVERY</code>, <code>DSR_ITEM_AS_DESCRIBED</code>, <code>DSR_COMMUNICATION</code>, <code>DSR_SHIPPING_CHARGES</code>, <code>DSR_SHIPPING_TIME</code>, <code>ITEM_RATING</code><br>See <a href="/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum" >FeedbackRatingTypeEnum</a> for descriptions of values. </li><li><b>excludeRepeatFeedback</b>: Set to <code>true</code> to exclude repeat feedback.</li><li><b>lookbackPeriodInDays</b>: Limit the response to a previous period of days. Available values: <code>7</code>, <code>30</code>, <code>90</code>, <code>180</code>, or <code>365</code></li></ul><p>You can send the filter as a query parameter, either with the required <b>ratingType</b> only, or combining the filter values with a comma-separated <em>name</em><b>:</b><em>value</em> list. For example:</p><p><code>filter=ratingType:OVERALL_EXPERIENCE,excludeRepeatFeedback:true,period:365</code></p>
     * @param string|null $user_id Use this parameter to specify the unique identifier (the eBay username associated with the account) for the eBay user whose feedback summary is being retrieved.
    */
    public function __construct(?string $filter = null, ?string $user_id = null) {
        $this->filter = $filter;
        $this->userId = $user_id;
    }

}
