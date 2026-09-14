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

use EBay\Communication\Generated\Feedback\Models\AwaitingFeedbackResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /awaiting_feedback
*/
class Awaiting_feedbackRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Awaiting_feedbackRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/awaiting_feedback{?filter*,limit*,offset*,sort*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves line items awaiting feedback from the user's order partner. You can refine the results using optional filter query parameters, such as item ID, username, or user role in the transaction. Sorting and pagination features help organize and navigate returned items efficiently.<p>For sellers, only sold items that have not yet received feedback are included. For buyers, only purchased items for which feedback is still pending are included. If the user is both a buyer and a seller, this API returns items awaiting feedback for transactions where the user acted as either. Applying filters can limit results to either buyer-only or seller-only transactions. </p><p>The response provides an overview of feedback yet to be left for completed transactions (as filtered) with counts for both the buyer and seller roles. It includes an array of line items, each containing the listing ID, title, and price (with currency and value). For each line item, the response offers feedback templates specifying which ratings are available.</p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Detailed seller ratings are for sellers only and are created from buyer feedback.</span></p>
     * @param Awaiting_feedbackRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AwaitingFeedbackResponse|null>
     * @throws Exception
    */
    public function get(?Awaiting_feedbackRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [AwaitingFeedbackResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method retrieves line items awaiting feedback from the user's order partner. You can refine the results using optional filter query parameters, such as item ID, username, or user role in the transaction. Sorting and pagination features help organize and navigate returned items efficiently.<p>For sellers, only sold items that have not yet received feedback are included. For buyers, only purchased items for which feedback is still pending are included. If the user is both a buyer and a seller, this API returns items awaiting feedback for transactions where the user acted as either. Applying filters can limit results to either buyer-only or seller-only transactions. </p><p>The response provides an overview of feedback yet to be left for completed transactions (as filtered) with counts for both the buyer and seller roles. It includes an array of line items, each containing the listing ID, title, and price (with currency and value). For each line item, the response offers feedback templates specifying which ratings are available.</p><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Detailed seller ratings are for sellers only and are created from buyer feedback.</span></p>
     * @param Awaiting_feedbackRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Awaiting_feedbackRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Awaiting_feedbackRequestBuilder
    */
    public function withUrl(string $rawUrl): Awaiting_feedbackRequestBuilder {
        return new Awaiting_feedbackRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
