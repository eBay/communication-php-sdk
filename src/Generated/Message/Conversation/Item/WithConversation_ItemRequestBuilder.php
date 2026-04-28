<?php

namespace EBay\Communication\Generated\Message\Conversation\Item;

use EBay\Communication\Generated\Message\Models\GetMessagesByConversationIdResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /conversation/{conversation_id}
*/
class WithConversation_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithConversation_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/conversation/{conversation_id}?conversation_type={conversation_type}{&limit*,offset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method can be used to retrieve messages within a specific conversation.<br><br>The <b>conversation_id</b> of the conversation for which to retrieve messages is required as path parameters, and the and <b>conversation_type</b> of the conversation is required as a query parameter.
     * @param WithConversation_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetMessagesByConversationIdResponse|null>
     * @throws Exception
    */
    public function get(?WithConversation_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetMessagesByConversationIdResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method can be used to retrieve messages within a specific conversation.<br><br>The <b>conversation_id</b> of the conversation for which to retrieve messages is required as path parameters, and the and <b>conversation_type</b> of the conversation is required as a query parameter.
     * @param WithConversation_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithConversation_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithConversation_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithConversation_ItemRequestBuilder {
        return new WithConversation_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
