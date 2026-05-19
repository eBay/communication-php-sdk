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

namespace EBay\Communication\Generated\Notification\Destination;

use EBay\Communication\Generated\Notification\Destination\Item\WithDestination_ItemRequestBuilder;
use EBay\Communication\Generated\Notification\Models\DestinationRequest;
use EBay\Communication\Generated\Notification\Models\DestinationSearchResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /destination
*/
class DestinationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/Communication/Generated/Notification.destination.item collection
     * @param string $destination_id The unique identifier of the destination to retrieve. Use <b>getDestinations</b> to retrieve destination IDs.
     * @return WithDestination_ItemRequestBuilder
    */
    public function byDestination_id(string $destination_id): WithDestination_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['destination_id'] = $destination_id;
        return new WithDestination_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DestinationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/destination{?continuation_token*,limit*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method allows applications to retrieve a paginated collection of destination resources and related details. The details include the destination names, statuses, and configurations, including the endpoints and verification tokens.
     * @param DestinationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DestinationSearchResponse|null>
     * @throws Exception
    */
    public function get(?DestinationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [DestinationSearchResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method allows applications to create a destination. A destination is an endpoint that receives HTTP push notifications.<br><br>A single destination for all topics is valid, as is individual destinations for each topic.<br><br>To update a destination, use the <strong>updateDestination</strong> call.<br><br>The destination created will need to be referenced while creating or updating a subscription to a topic.<br><br><span class="tablenote"><b>Note:</b> The destination should be created and ready to respond with the expected <b>challengeResponse</b> for the endpoint to be registered successfully. Refer to the <a href="/api-docs/commerce/notification/overview.html">Notification API overview</a> for more information.</span>
     * @param DestinationRequest $body A type that contains information about the destination request.
     * @param DestinationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DestinationPostResponse|null>
     * @throws Exception
    */
    public function post(DestinationRequest $body, ?DestinationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [DestinationPostResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method allows applications to retrieve a paginated collection of destination resources and related details. The details include the destination names, statuses, and configurations, including the endpoints and verification tokens.
     * @param DestinationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DestinationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method allows applications to create a destination. A destination is an endpoint that receives HTTP push notifications.<br><br>A single destination for all topics is valid, as is individual destinations for each topic.<br><br>To update a destination, use the <strong>updateDestination</strong> call.<br><br>The destination created will need to be referenced while creating or updating a subscription to a topic.<br><br><span class="tablenote"><b>Note:</b> The destination should be created and ready to respond with the expected <b>challengeResponse</b> for the endpoint to be registered successfully. Refer to the <a href="/api-docs/commerce/notification/overview.html">Notification API overview</a> for more information.</span>
     * @param DestinationRequest $body A type that contains information about the destination request.
     * @param DestinationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DestinationRequest $body, ?DestinationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DestinationRequestBuilder
    */
    public function withUrl(string $rawUrl): DestinationRequestBuilder {
        return new DestinationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
