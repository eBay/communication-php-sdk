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

namespace EBay\Communication\Generated\Notification\Subscription;

use EBay\Communication\Generated\Notification\Models\CreateSubscriptionRequest;
use EBay\Communication\Generated\Notification\Models\Error;
use EBay\Communication\Generated\Notification\Models\SubscriptionSearchResponse;
use EBay\Communication\Generated\Notification\Subscription\Item\WithSubscription_ItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /subscription
*/
class SubscriptionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/Communication/Generated/Notification.subscription.item collection
     * @param string $subscription_id The unique identifier of the subscription to retrieve. Use <a href="/develop/api/sell/notification_api#sell-notification_api-subscription-getsubscriptions">getSubscriptions</a> to retrieve subscription IDs.
     * @return WithSubscription_ItemRequestBuilder
    */
    public function bySubscription_id(string $subscription_id): WithSubscription_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscription_id'] = $subscription_id;
        return new WithSubscription_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SubscriptionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/subscription{?continuation_token*,limit*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method allows applications to retrieve a list of all subscriptions. The list returned is a paginated collection of subscription resources.<br><br>Subscriptions allow applications to express interest in notifications and keep receiving the information relevant to their business.
     * @param SubscriptionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SubscriptionSearchResponse|null>
     * @throws Exception
    */
    public function get(?SubscriptionRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SubscriptionSearchResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method allows applications to create a subscription for a topic and supported schema version. Subscriptions allow applications to express interest in notifications and keep receiving the information relevant to their business.<br><br>Each application and topic-schema pairing to a subscription should have a 1:1 cardinality.<br><br>You can create the subscription in disabled mode, test it (see the <b>test</b> method), and when everything is ready, you can enable the subscription (see the <a href="/develop/api/sell/notification_api#sell-notification_api-subscription-enablesubscription">enableSubscription</a> method).<br><br><span class="tablenote"><b>Note:</b> If an application is not authorized to subscribe to a topic, for example, if your authorization does not include the list of scopes required for the topic, an error code of 195011 is returned.</span>
     * @param CreateSubscriptionRequest $body The create subscription request.
     * @param SubscriptionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SubscriptionPostResponse|null>
     * @throws Exception
    */
    public function post(CreateSubscriptionRequest $body, ?SubscriptionRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '403' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SubscriptionPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method allows applications to retrieve a list of all subscriptions. The list returned is a paginated collection of subscription resources.<br><br>Subscriptions allow applications to express interest in notifications and keep receiving the information relevant to their business.
     * @param SubscriptionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SubscriptionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method allows applications to create a subscription for a topic and supported schema version. Subscriptions allow applications to express interest in notifications and keep receiving the information relevant to their business.<br><br>Each application and topic-schema pairing to a subscription should have a 1:1 cardinality.<br><br>You can create the subscription in disabled mode, test it (see the <b>test</b> method), and when everything is ready, you can enable the subscription (see the <a href="/develop/api/sell/notification_api#sell-notification_api-subscription-enablesubscription">enableSubscription</a> method).<br><br><span class="tablenote"><b>Note:</b> If an application is not authorized to subscribe to a topic, for example, if your authorization does not include the list of scopes required for the topic, an error code of 195011 is returned.</span>
     * @param CreateSubscriptionRequest $body The create subscription request.
     * @param SubscriptionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateSubscriptionRequest $body, ?SubscriptionRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SubscriptionRequestBuilder
    */
    public function withUrl(string $rawUrl): SubscriptionRequestBuilder {
        return new SubscriptionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
