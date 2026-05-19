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

namespace EBay\Communication\Generated\Feedback\Respond_to_feedback;

use EBay\Communication\Generated\Feedback\Models\RespondToFeedbackRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /respond_to_feedback
*/
class Respond_to_feedbackRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Respond_to_feedbackRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/respond_to_feedback');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method allows users to respond to feedback provided by the order partner for a specific line item in an order. For each order, the order partner is the other participant in the transaction, either the buyer or seller, depending on the eBay user associated with the user token. This method allows the user to provide additional context or address the order partner's feedback.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>The feedback response must adhere to community guidelines and be relevant to the transaction.</span></p><p>You can only use this method if feedback has been provided by the order partner and you have not yet responded to it. </p> <p>When responding to feedback, your feedback score is not affected when you respond to feedback.</p><p>For additional information on leaving feedback, see the following:<ul><li><a href="https://www.ebay.com/help/buying/leaving-feedback-sellers/leaving-feedback-sellers?id=4007"  target="_blank">Leaving feedback for sellers</a></li><li><a href="https://www.ebay.com/help/selling/leaving-feedback-buyers/leaving-feedback-buyers?id=4078"  target="_blank">Leaving feedback for buyers</a></li></ul></p><p>A successful call returns an HTTP status of <b>200 Success</b>.</p>
     * @param RespondToFeedbackRequest $body The type that defines the fields for the <b>respondToFeedback</b> request.
     * @param Respond_to_feedbackRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Respond_to_feedbackPostResponse|null>
     * @throws Exception
    */
    public function post(RespondToFeedbackRequest $body, ?Respond_to_feedbackRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Respond_to_feedbackPostResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method allows users to respond to feedback provided by the order partner for a specific line item in an order. For each order, the order partner is the other participant in the transaction, either the buyer or seller, depending on the eBay user associated with the user token. This method allows the user to provide additional context or address the order partner's feedback.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>The feedback response must adhere to community guidelines and be relevant to the transaction.</span></p><p>You can only use this method if feedback has been provided by the order partner and you have not yet responded to it. </p> <p>When responding to feedback, your feedback score is not affected when you respond to feedback.</p><p>For additional information on leaving feedback, see the following:<ul><li><a href="https://www.ebay.com/help/buying/leaving-feedback-sellers/leaving-feedback-sellers?id=4007"  target="_blank">Leaving feedback for sellers</a></li><li><a href="https://www.ebay.com/help/selling/leaving-feedback-buyers/leaving-feedback-buyers?id=4078"  target="_blank">Leaving feedback for buyers</a></li></ul></p><p>A successful call returns an HTTP status of <b>200 Success</b>.</p>
     * @param RespondToFeedbackRequest $body The type that defines the fields for the <b>respondToFeedback</b> request.
     * @param Respond_to_feedbackRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RespondToFeedbackRequest $body, ?Respond_to_feedbackRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
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
     * @return Respond_to_feedbackRequestBuilder
    */
    public function withUrl(string $rawUrl): Respond_to_feedbackRequestBuilder {
        return new Respond_to_feedbackRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
