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

use EBay\Communication\Generated\Feedback\Models\GetFeedbackResponse;
use EBay\Communication\Generated\Feedback\Models\LeaveFeedbackRequest;
use EBay\Communication\Generated\Feedback\Models\LeaveFeedbackResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /feedback
*/
class FeedbackRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FeedbackRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/feedback?feedback_type={feedback_type}&user_id={user_id}{&feedback_id*,filter*,limit*,listing_id*,offset*,order_line_item_id*,sort*,transaction_id*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method enables users to retrieve feedback for any specified user ID and feedback type (sent or received). You can refine the results using optional query parameters such as its feedback ID, listing ID, or order line item ID, or applying one or more filters.<p>Applying filters can narrow results using criteria such as comment type, photos, or topics identified through AI-based analysis. When filtering for feedback with photos (<code>filterImage:true</code>), only entries with images (entries that include image URLs) are returned. Additionally, feedback can be refined for the number of days to look back, the role of the user providing the feedback, and whether to include automated feedback entries left by eBay.</p><p>Sorting and pagination features help organize and navigate returned items efficiently.</p><p>Returned data includes feedback details (such as comment text and type), feedback ratings (covering criteria like overall experience, and for sellers item description, shipping time, and communication), role and attributes of the feedback giver, line item and transaction summaries, images, and any available topics. See <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#uri.filter" >filter</a> for additional information. Privacy is safeguarded by restricting the amount of detail visible to users, depending on their context. When accessing another user's feedback without logging in, buyer names are masked and seller names are shown. Logged-in users viewing their own feedback see all names, while those viewing other users' feedback will encounter some masking.</p>
     * @param FeedbackRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetFeedbackResponse|null>
     * @throws Exception
    */
    public function get(?FeedbackRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetFeedbackResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method creates and submits feedback to the user's order partner for a line item in the order. For each order, the order partner is the other participant in the transaction, either the buyer or seller, depending on the eBay user associated with the user token. This method allows users to provide detailed information about the transaction, including the feedback rating, comments, and seller delivery. You can also add images to your feedback.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>A seller can only provide a comment for a buyer, but a buyer can provide a comment plus provides ratings on a number of metrics for a seller.</span></p> <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>The feedback must adhere to community guidelines and be relevant to the transaction.</span></p> <p>When leaving feedback, keep the following in mind:<ul><li>Your feedback score is not affected when you leave feedback</li><li>Feedback can only be revised once after it is submitted</li></ul></p><p>For additional information on leaving feedback, see the following:<ul><li><a href="https://www.ebay.com/help/buying/leaving-feedback-sellers/leaving-feedback-sellers?id=4007"  target="_blank">Leaving feedback for sellers</a></li><li><a href="https://www.ebay.com/help/selling/leaving-feedback-buyers/leaving-feedback-buyers?id=4078"  target="_blank">Leaving feedback for buyers</a></li></ul></p><p>A successful call to this method returns a feedback ID, which is a unique identifier for the newly created feedback and allows for reference and tracking. </p>
     * @param LeaveFeedbackRequest $body This type provides fields available to leave feedback in the <b>leaveFeedback</b> request.
     * @param FeedbackRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LeaveFeedbackResponse|null>
     * @throws Exception
    */
    public function post(LeaveFeedbackRequest $body, ?FeedbackRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [LeaveFeedbackResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method enables users to retrieve feedback for any specified user ID and feedback type (sent or received). You can refine the results using optional query parameters such as its feedback ID, listing ID, or order line item ID, or applying one or more filters.<p>Applying filters can narrow results using criteria such as comment type, photos, or topics identified through AI-based analysis. When filtering for feedback with photos (<code>filterImage:true</code>), only entries with images (entries that include image URLs) are returned. Additionally, feedback can be refined for the number of days to look back, the role of the user providing the feedback, and whether to include automated feedback entries left by eBay.</p><p>Sorting and pagination features help organize and navigate returned items efficiently.</p><p>Returned data includes feedback details (such as comment text and type), feedback ratings (covering criteria like overall experience, and for sellers item description, shipping time, and communication), role and attributes of the feedback giver, line item and transaction summaries, images, and any available topics. See <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#uri.filter" >filter</a> for additional information. Privacy is safeguarded by restricting the amount of detail visible to users, depending on their context. When accessing another user's feedback without logging in, buyer names are masked and seller names are shown. Logged-in users viewing their own feedback see all names, while those viewing other users' feedback will encounter some masking.</p>
     * @param FeedbackRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FeedbackRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * This method creates and submits feedback to the user's order partner for a line item in the order. For each order, the order partner is the other participant in the transaction, either the buyer or seller, depending on the eBay user associated with the user token. This method allows users to provide detailed information about the transaction, including the feedback rating, comments, and seller delivery. You can also add images to your feedback.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>A seller can only provide a comment for a buyer, but a buyer can provide a comment plus provides ratings on a number of metrics for a seller.</span></p> <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>The feedback must adhere to community guidelines and be relevant to the transaction.</span></p> <p>When leaving feedback, keep the following in mind:<ul><li>Your feedback score is not affected when you leave feedback</li><li>Feedback can only be revised once after it is submitted</li></ul></p><p>For additional information on leaving feedback, see the following:<ul><li><a href="https://www.ebay.com/help/buying/leaving-feedback-sellers/leaving-feedback-sellers?id=4007"  target="_blank">Leaving feedback for sellers</a></li><li><a href="https://www.ebay.com/help/selling/leaving-feedback-buyers/leaving-feedback-buyers?id=4078"  target="_blank">Leaving feedback for buyers</a></li></ul></p><p>A successful call to this method returns a feedback ID, which is a unique identifier for the newly created feedback and allows for reference and tracking. </p>
     * @param LeaveFeedbackRequest $body This type provides fields available to leave feedback in the <b>leaveFeedback</b> request.
     * @param FeedbackRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(LeaveFeedbackRequest $body, ?FeedbackRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/feedback';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return FeedbackRequestBuilder
    */
    public function withUrl(string $rawUrl): FeedbackRequestBuilder {
        return new FeedbackRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
