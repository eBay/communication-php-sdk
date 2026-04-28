<?php

namespace EBay\Communication\Generated\Message\Send_message;

use EBay\Communication\Generated\Message\Models\SendMessageRequest;
use EBay\Communication\Generated\Message\Models\SendMessageResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /send_message
*/
class Send_messageRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Send_messageRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/send_message');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method can be used to start a conversation with another user or send a message in an existing conversation with another user based on the information provided in the request.<br><br>To send a message, one of the <b>conversationId</b> or <b>otherPartyUsername</b> request fields are required. The <b>conversationId</b> must be used when sending a message in an existing conversation and specifies the conversation for which to send the message. For a new conversation, the <b>otherPartyUsername</b> field must be used to send the message to a specific user. In addition, the <b>messageText</b> field is required as it contains the body text of the message.<br><br>Optionally, media (such as images or documents) can be attached to the message using the <b>messageMedia</b> container. The <b>reference</b> container can also be used to associate a message with a listing.
     * @param SendMessageRequest $body This type defines the request payload of the <b>sendMessage</b> method.
     * @param Send_messageRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SendMessageResponse|null>
     * @throws Exception
    */
    public function post(SendMessageRequest $body, ?Send_messageRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [SendMessageResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method can be used to start a conversation with another user or send a message in an existing conversation with another user based on the information provided in the request.<br><br>To send a message, one of the <b>conversationId</b> or <b>otherPartyUsername</b> request fields are required. The <b>conversationId</b> must be used when sending a message in an existing conversation and specifies the conversation for which to send the message. For a new conversation, the <b>otherPartyUsername</b> field must be used to send the message to a specific user. In addition, the <b>messageText</b> field is required as it contains the body text of the message.<br><br>Optionally, media (such as images or documents) can be attached to the message using the <b>messageMedia</b> container. The <b>reference</b> container can also be used to associate a message with a listing.
     * @param SendMessageRequest $body This type defines the request payload of the <b>sendMessage</b> method.
     * @param Send_messageRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SendMessageRequest $body, ?Send_messageRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Send_messageRequestBuilder
    */
    public function withUrl(string $rawUrl): Send_messageRequestBuilder {
        return new Send_messageRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
