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

namespace EBay\Communication\Generated\Message\Bulk_update_conversation;

use EBay\Communication\Generated\Message\Models\BulkUpdateConversationsRequest;
use EBay\Communication\Generated\Message\Models\BulkUpdateConversationsResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /bulk_update_conversation
*/
class Bulk_update_conversationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Bulk_update_conversationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/bulk_update_conversation');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method can be used to update the <b>conversationStatus</b> of up to 10 conversations.<br><br>The <b>conversationId</b>, existing <b>conversationType</b>, and updated <b>conversationStatus</b> for each conversation to modify are required in the <b>conversations</b> array.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Though it cannot be updated, the <b>conversationType</b> field is required for each conversation being updated.</p></div><br>If the updates were successful, the <b>conversationId</b> of each conversation will be returned with an associated <b>updateStatus</b> value of <code>SUCCESSFUL</code>.
     * @param BulkUpdateConversationsRequest $body This type defines the request body of the <b>bulkUpdateConversation</b> method.
     * @param Bulk_update_conversationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BulkUpdateConversationsResponse|null>
     * @throws Exception
    */
    public function post(BulkUpdateConversationsRequest $body, ?Bulk_update_conversationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [BulkUpdateConversationsResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method can be used to update the <b>conversationStatus</b> of up to 10 conversations.<br><br>The <b>conversationId</b>, existing <b>conversationType</b>, and updated <b>conversationStatus</b> for each conversation to modify are required in the <b>conversations</b> array.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> Though it cannot be updated, the <b>conversationType</b> field is required for each conversation being updated.</p></div><br>If the updates were successful, the <b>conversationId</b> of each conversation will be returned with an associated <b>updateStatus</b> value of <code>SUCCESSFUL</code>.
     * @param BulkUpdateConversationsRequest $body This type defines the request body of the <b>bulkUpdateConversation</b> method.
     * @param Bulk_update_conversationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BulkUpdateConversationsRequest $body, ?Bulk_update_conversationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Bulk_update_conversationRequestBuilder
    */
    public function withUrl(string $rawUrl): Bulk_update_conversationRequestBuilder {
        return new Bulk_update_conversationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
