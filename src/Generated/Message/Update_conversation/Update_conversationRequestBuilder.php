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

namespace EBay\Communication\Generated\Message\Update_conversation;

use EBay\Communication\Generated\Message\Models\UpdateConversationRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /update_conversation
*/
class Update_conversationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Update_conversationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/update_conversation');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method can be used to update the <strong>conversationStatus</strong> or the <strong>read</strong> status of a specified conversation.<br><br><span class="tablenote"><strong>Note:</strong> Only one of these statuses can be updated at a time using this method. If both fields are included, only the <strong>read</strong> status of the specified conversation will be updated and the <strong>conversationStatus</strong> field will be ignored.</span><br>Both the <strong>conversationId</strong> of the conversation to modify and the existing <strong>conversationType</strong> of the specified conversation are required as part of the request payload.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></strong></span></span> Although it cannot be updated, the existing <strong>conversationType</strong> of the specified conversation to be updated is required in the request payload. If this value is not provided, an error will occur.</p></div><br>To update a conversation's status (e.g., updating an <code>ACTIVE</code> conversation to <code>ARCHIVE</code>), include the <strong>conversationStatus</strong> field in the request with the updated value. To update a conversation's read status (e.g., updating an <code>UNREAD</code> conversation to <code>READ</code>), include the <strong>read</strong> boolean in the request with the updated value.
     * @param UpdateConversationRequest $body This type defines the request payload of the <strong>updateConversation</strong> method.
     * @param Update_conversationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(UpdateConversationRequest $body, ?Update_conversationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This method can be used to update the <strong>conversationStatus</strong> or the <strong>read</strong> status of a specified conversation.<br><br><span class="tablenote"><strong>Note:</strong> Only one of these statuses can be updated at a time using this method. If both fields are included, only the <strong>read</strong> status of the specified conversation will be updated and the <strong>conversationStatus</strong> field will be ignored.</span><br>Both the <strong>conversationId</strong> of the conversation to modify and the existing <strong>conversationType</strong> of the specified conversation are required as part of the request payload.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></strong></span></span> Although it cannot be updated, the existing <strong>conversationType</strong> of the specified conversation to be updated is required in the request payload. If this value is not provided, an error will occur.</p></div><br>To update a conversation's status (e.g., updating an <code>ACTIVE</code> conversation to <code>ARCHIVE</code>), include the <strong>conversationStatus</strong> field in the request with the updated value. To update a conversation's read status (e.g., updating an <code>UNREAD</code> conversation to <code>READ</code>), include the <strong>read</strong> boolean in the request with the updated value.
     * @param UpdateConversationRequest $body This type defines the request payload of the <strong>updateConversation</strong> method.
     * @param Update_conversationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpdateConversationRequest $body, ?Update_conversationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return Update_conversationRequestBuilder
    */
    public function withUrl(string $rawUrl): Update_conversationRequestBuilder {
        return new Update_conversationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
