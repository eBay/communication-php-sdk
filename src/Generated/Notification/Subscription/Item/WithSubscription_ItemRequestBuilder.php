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

namespace EBay\Communication\Generated\Notification\Subscription\Item;

use EBay\Communication\Generated\Notification\Models\Subscription;
use EBay\Communication\Generated\Notification\Models\UpdateSubscriptionRequest;
use EBay\Communication\Generated\Notification\Subscription\Item\Disable\DisableRequestBuilder;
use EBay\Communication\Generated\Notification\Subscription\Item\Enable\EnableRequestBuilder;
use EBay\Communication\Generated\Notification\Subscription\Item\Filter\FilterRequestBuilder;
use EBay\Communication\Generated\Notification\Subscription\Item\Test\TestRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /subscription/{subscription_id}
*/
class WithSubscription_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The disable property
    */
    public function disable(): DisableRequestBuilder {
        return new DisableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The enable property
    */
    public function enable(): EnableRequestBuilder {
        return new EnableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The filter property
    */
    public function filter(): FilterRequestBuilder {
        return new FilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The test property
    */
    public function test(): TestRequestBuilder {
        return new TestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithSubscription_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/subscription/{subscription_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method allows applications to delete a subscription. Subscriptions can be deleted regardless of status.
     * @param WithSubscription_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WithSubscription_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This method allows applications to retrieve subscription details for the specified subscription.<br><br>Specify the subscription to retrieve using the <strong>subscription_id</strong>. Use the <strong>getSubscriptions</strong> method to browse all subscriptions if you do not know the <strong>subscription_id</strong>.<br><br>Subscriptions allow applications to express interest in notifications and keep receiving the information relevant to their business.
     * @param WithSubscription_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Subscription|null>
     * @throws Exception
    */
    public function get(?WithSubscription_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Subscription::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method allows applications to update a subscription. Subscriptions allow applications to express interest in notifications and keep receiving the information relevant to their business.<br><br><span class="tablenote"><b>Note:</b> This call returns an error if an application is not authorized to subscribe to a topic.</span><br><br>You can pause and restart a subscription. See the <b>disableSubscription</b> and <b>enableSubscription</b> methods.
     * @param UpdateSubscriptionRequest $body A type that describes the details of the update subscription request.
     * @param WithSubscription_ItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function put(UpdateSubscriptionRequest $body, ?WithSubscription_ItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This method allows applications to delete a subscription. Subscriptions can be deleted regardless of status.
     * @param WithSubscription_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithSubscription_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * This method allows applications to retrieve subscription details for the specified subscription.<br><br>Specify the subscription to retrieve using the <strong>subscription_id</strong>. Use the <strong>getSubscriptions</strong> method to browse all subscriptions if you do not know the <strong>subscription_id</strong>.<br><br>Subscriptions allow applications to express interest in notifications and keep receiving the information relevant to their business.
     * @param WithSubscription_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithSubscription_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * This method allows applications to update a subscription. Subscriptions allow applications to express interest in notifications and keep receiving the information relevant to their business.<br><br><span class="tablenote"><b>Note:</b> This call returns an error if an application is not authorized to subscribe to a topic.</span><br><br>You can pause and restart a subscription. See the <b>disableSubscription</b> and <b>enableSubscription</b> methods.
     * @param UpdateSubscriptionRequest $body A type that describes the details of the update subscription request.
     * @param WithSubscription_ItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UpdateSubscriptionRequest $body, ?WithSubscription_ItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithSubscription_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithSubscription_ItemRequestBuilder {
        return new WithSubscription_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
