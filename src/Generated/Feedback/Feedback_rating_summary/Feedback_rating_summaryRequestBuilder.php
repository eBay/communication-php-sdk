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

use EBay\Communication\Generated\Feedback\Models\GetFeedbackRatingSummaryResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /feedback_rating_summary
*/
class Feedback_rating_summaryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Feedback_rating_summaryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/feedback_rating_summary?filter={filter}&user_id={user_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method provides a detailed overview of feedback ratings associated with a user in the eBay marketplace. Specify a user ID and apply filters to retrieve summarized feedback data categorized by rating types and user roles. These returned metrics are aggregated, which offers insight into user experiences and performance. <p class="msgbox_tipInDiv" ><div class="msgbox_tip"><span><b><span style="color: #478415;">Tip:</span></b></span></span> You can use this method to help sellers and buyers understand their marketplace reputation and identify areas for improvement.</div></p><p>Returned data provides a summary of feedback ratings for a user by rating type (such as overall experience, communication, or delivery timeliness) for both buyer and seller roles. Each type of rating includes aggregated metrics like averages, counts, unique feedback givers, and the percentage of positive ratings (excluding neutrals). The response also details the distribution of specific rating values, their frequency, and time period (with period units like days or months) over which these metrics were calculated.</p>
     * @param Feedback_rating_summaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetFeedbackRatingSummaryResponse|null>
     * @throws Exception
    */
    public function get(?Feedback_rating_summaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetFeedbackRatingSummaryResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method provides a detailed overview of feedback ratings associated with a user in the eBay marketplace. Specify a user ID and apply filters to retrieve summarized feedback data categorized by rating types and user roles. These returned metrics are aggregated, which offers insight into user experiences and performance. <p class="msgbox_tipInDiv" ><div class="msgbox_tip"><span><b><span style="color: #478415;">Tip:</span></b></span></span> You can use this method to help sellers and buyers understand their marketplace reputation and identify areas for improvement.</div></p><p>Returned data provides a summary of feedback ratings for a user by rating type (such as overall experience, communication, or delivery timeliness) for both buyer and seller roles. Each type of rating includes aggregated metrics like averages, counts, unique feedback givers, and the percentage of positive ratings (excluding neutrals). The response also details the distribution of specific rating values, their frequency, and time period (with period units like days or months) over which these metrics were calculated.</p>
     * @param Feedback_rating_summaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Feedback_rating_summaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Feedback_rating_summaryRequestBuilder
    */
    public function withUrl(string $rawUrl): Feedback_rating_summaryRequestBuilder {
        return new Feedback_rating_summaryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
