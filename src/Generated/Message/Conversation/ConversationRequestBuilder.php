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

namespace EBay\Communication\Generated\Message\Conversation;

use EBay\Communication\Generated\Message\Conversation\Item\WithConversation_ItemRequestBuilder;
use EBay\Communication\Generated\Message\Models\GetAllMyConversationsResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /conversation
*/
class ConversationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/Communication/Generated/Message.conversation.item collection
     * @param string $conversation_id This path parameters specifies the unique identifier of the conversation that is to be retrieved.<br><br>Use the <a href="/api-docs/commerce/message/resources/conversation/methods/getConversations" target="_blank">getConversations</a> method to retrieve conversation ID values.
     * @return WithConversation_ItemRequestBuilder
    */
    public function byConversation_id(string $conversation_id): WithConversation_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversation_id'] = $conversation_id;
        return new WithConversation_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ConversationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/conversation?conversation_type={conversation_type}{&conversation_status*,end_time*,limit*,offset*,other_party_username*,reference_id*,reference_type*,start_time*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method can be used to retrieve one or more conversations associated with a user.<br><br>The <b>conversation_type</b> query parameter is required when using this method to specify if the retrieved conversations are from eBay or from members.<br><br>The result set can also optionally be filtered by conversation status, reference, username, and/or time range. The <b>limit</b> and <b>offset</b> path parameters can be used to paginate the result set and control how many conversations are returned in the response.
     * @param ConversationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetAllMyConversationsResponse|null>
     * @throws Exception
    */
    public function get(?ConversationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetAllMyConversationsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method can be used to retrieve one or more conversations associated with a user.<br><br>The <b>conversation_type</b> query parameter is required when using this method to specify if the retrieved conversations are from eBay or from members.<br><br>The result set can also optionally be filtered by conversation status, reference, username, and/or time range. The <b>limit</b> and <b>offset</b> path parameters can be used to paginate the result set and control how many conversations are returned in the response.
     * @param ConversationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConversationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConversationRequestBuilder
    */
    public function withUrl(string $rawUrl): ConversationRequestBuilder {
        return new ConversationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
