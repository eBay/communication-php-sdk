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

namespace EBay\Communication\Generated\Notification\Subscription\Item\Filter\Item;

use EBay\Communication\Generated\Notification\Models\Error;
use EBay\Communication\Generated\Notification\Models\SubscriptionFilter;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /subscription/{subscription_id}/filter/{filter_id}
*/
class WithFilter_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithFilter_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/subscription/{subscription_id}/filter/{filter_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method allows applications to disable the active filter on a subscription, so that a new subscription filter may be added.<br><br><span class="tablenote"><b>Note:</b> Subscription filters in <code>PENDING</code> status can not be disabled. However, a new filter can be created instead with the <a href="/develop/api/sell/notification_api#sell-notification_api-subscription-createsubscriptionfilter">createSubscriptionFilter</a>  method and this new filter will override the <code>PENDING</code> filter.</span>
     * @param WithFilter_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WithFilter_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '403' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * This method allows applications to retrieve the filter details for the specified subscription filter.<br><br>Specify the subscription filter to retrieve by using the <strong>subscription_id</strong> and the <strong>filter_id</strong> associated with the subscription filter. The <strong>filter_id</strong> can be found in the response body for the <strong>getSubscription</strong> method, if there is a filter applied on the subscription.<br><br>Filters allow applications to only be sent notifications that match a provided criteria. Notifications that do not match this criteria will not be sent to the destination.
     * @param WithFilter_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SubscriptionFilter|null>
     * @throws Exception
    */
    public function get(?WithFilter_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '403' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SubscriptionFilter::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method allows applications to disable the active filter on a subscription, so that a new subscription filter may be added.<br><br><span class="tablenote"><b>Note:</b> Subscription filters in <code>PENDING</code> status can not be disabled. However, a new filter can be created instead with the <a href="/develop/api/sell/notification_api#sell-notification_api-subscription-createsubscriptionfilter">createSubscriptionFilter</a>  method and this new filter will override the <code>PENDING</code> filter.</span>
     * @param WithFilter_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithFilter_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * This method allows applications to retrieve the filter details for the specified subscription filter.<br><br>Specify the subscription filter to retrieve by using the <strong>subscription_id</strong> and the <strong>filter_id</strong> associated with the subscription filter. The <strong>filter_id</strong> can be found in the response body for the <strong>getSubscription</strong> method, if there is a filter applied on the subscription.<br><br>Filters allow applications to only be sent notifications that match a provided criteria. Notifications that do not match this criteria will not be sent to the destination.
     * @param WithFilter_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithFilter_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithFilter_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithFilter_ItemRequestBuilder {
        return new WithFilter_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
