<?php

namespace EBay\Communication\Generated\Notification\Destination\Item;

use EBay\Communication\Generated\Notification\Models\Destination;
use EBay\Communication\Generated\Notification\Models\DestinationRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /destination/{destination_id}
*/
class WithDestination_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithDestination_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/destination/{destination_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method provides applications a way to delete a destination.<br><br>The same destination ID can be used by many destinations.<br><br>Trying to delete an active destination results in an error. You can disable a subscription, and when the destination is no longer in use, you can delete it.
     * @param WithDestination_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WithDestination_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This method allows applications to fetch the details for a destination. The details include the destination name, status, and configuration, including the endpoint and verification token.
     * @param WithDestination_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Destination|null>
     * @throws Exception
    */
    public function get(?WithDestination_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Destination::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method allows applications to update a destination.<br><br><span class="tablenote"><b>Note:</b> The destination should be created and ready to respond with the expected <b>challengeResponse</b> for the endpoint to be registered successfully. Refer to the <a href="/api-docs/commerce/notification/overview.html">Notification API overview</a> for more information.</span>
     * @param DestinationRequest $body A type that contains information about the destination request.
     * @param WithDestination_ItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function put(DestinationRequest $body, ?WithDestination_ItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This method provides applications a way to delete a destination.<br><br>The same destination ID can be used by many destinations.<br><br>Trying to delete an active destination results in an error. You can disable a subscription, and when the destination is no longer in use, you can delete it.
     * @param WithDestination_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithDestination_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method allows applications to fetch the details for a destination. The details include the destination name, status, and configuration, including the endpoint and verification token.
     * @param WithDestination_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithDestination_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method allows applications to update a destination.<br><br><span class="tablenote"><b>Note:</b> The destination should be created and ready to respond with the expected <b>challengeResponse</b> for the endpoint to be registered successfully. Refer to the <a href="/api-docs/commerce/notification/overview.html">Notification API overview</a> for more information.</span>
     * @param DestinationRequest $body A type that contains information about the destination request.
     * @param WithDestination_ItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(DestinationRequest $body, ?WithDestination_ItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithDestination_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithDestination_ItemRequestBuilder {
        return new WithDestination_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
