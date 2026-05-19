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

namespace EBay\Communication\Generated\Notification\Subscription\Item\Filter;

use EBay\Communication\Generated\Notification\Models\CreateSubscriptionFilterRequest;
use EBay\Communication\Generated\Notification\Subscription\Item\Filter\Item\WithFilter_ItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /subscription/{subscription_id}/filter
*/
class FilterRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/Communication/Generated/Notification.subscription.item.filter.item collection
     * @param string $filter_id The unique identifier of the subscription filter.  Filter ID values, if configured for a subscription, will be shown in the <b>subscriptions.filterId</b> field in <b>getSubscription</b> and <b>getSubscription</b> responses. The filter ID value is also returned in the Location response header when a filter is created with <b>createSubscriptionFilter</b>.
     * @return WithFilter_ItemRequestBuilder
    */
    public function byFilter_id(string $filter_id): WithFilter_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['filter_id'] = $filter_id;
        return new WithFilter_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FilterRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/subscription/{subscription_id}/filter');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method allows applications to create a filter for a subscription. Filters allow applications to only be sent notifications that match a provided criteria. Notifications that do not match this criteria will not be sent to the destination.<br><br>The <strong>filterSchema</strong> value must be a valid <a href="https://json-schema.org " target="_blank">JSON Schema Core document</a> (version 2020-12 or later). The <strong>filterSchema</strong> provided must describe the subscription's notification payload such that it supplies valid criteria to filter the subscription's notifications. The user does not need to provide <code>$schema</code> and <code>$id</code> definitions.<br><br>When a filter is first created, it is not immediately active on the subscription. If the request has a valid JSON body, the successful call returns the HTTP status code <b>201&nbsp;Created</b>. Newly created filters are in <code>PENDING</code> status until they are reviewed. If a filter is valid, it will move from <code>PENDING</code> status to <code>ENABLED</code> status. You can find the status of a filter using the <a href="/api-docs/commerce/notification/resources/subscription/methods/getSubscriptionFilter">getSubscriptionFilter</a> method. See <a href="/api-docs/commerce/notification/overview.html#create-filter" target="_blank">Creating a subscription filter for a topic</a> for additional information.<br><br><span class="tablenote"><b>Note:</b> Only one filter can be in <strong>ENABLED</strong> (which means active) status on a subscription at a time. If an <strong>ENABLED</strong> filter is overwritten by a new call to <strong>CREATE</strong> a filter for the subscription, it stays in <strong>ENABLED</strong> status until the new <strong>PENDING</strong> filter becomes the <strong>ENABLED</strong> filter, and the existing filter then becomes <strong>DISABLED</strong>.</span>
     * @param CreateSubscriptionFilterRequest $body The request body
     * @param FilterRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FilterPostResponse|null>
     * @throws Exception
    */
    public function post(CreateSubscriptionFilterRequest $body, ?FilterRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [FilterPostResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method allows applications to create a filter for a subscription. Filters allow applications to only be sent notifications that match a provided criteria. Notifications that do not match this criteria will not be sent to the destination.<br><br>The <strong>filterSchema</strong> value must be a valid <a href="https://json-schema.org " target="_blank">JSON Schema Core document</a> (version 2020-12 or later). The <strong>filterSchema</strong> provided must describe the subscription's notification payload such that it supplies valid criteria to filter the subscription's notifications. The user does not need to provide <code>$schema</code> and <code>$id</code> definitions.<br><br>When a filter is first created, it is not immediately active on the subscription. If the request has a valid JSON body, the successful call returns the HTTP status code <b>201&nbsp;Created</b>. Newly created filters are in <code>PENDING</code> status until they are reviewed. If a filter is valid, it will move from <code>PENDING</code> status to <code>ENABLED</code> status. You can find the status of a filter using the <a href="/api-docs/commerce/notification/resources/subscription/methods/getSubscriptionFilter">getSubscriptionFilter</a> method. See <a href="/api-docs/commerce/notification/overview.html#create-filter" target="_blank">Creating a subscription filter for a topic</a> for additional information.<br><br><span class="tablenote"><b>Note:</b> Only one filter can be in <strong>ENABLED</strong> (which means active) status on a subscription at a time. If an <strong>ENABLED</strong> filter is overwritten by a new call to <strong>CREATE</strong> a filter for the subscription, it stays in <strong>ENABLED</strong> status until the new <strong>PENDING</strong> filter becomes the <strong>ENABLED</strong> filter, and the existing filter then becomes <strong>DISABLED</strong>.</span>
     * @param CreateSubscriptionFilterRequest $body The request body
     * @param FilterRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateSubscriptionFilterRequest $body, ?FilterRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FilterRequestBuilder
    */
    public function withUrl(string $rawUrl): FilterRequestBuilder {
        return new FilterRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
