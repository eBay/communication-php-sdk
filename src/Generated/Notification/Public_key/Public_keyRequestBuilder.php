<?php

namespace EBay\Communication\Generated\Notification\Public_key;

use EBay\Communication\Generated\Notification\Public_key\Item\WithPublic_key_ItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /public_key
*/
class Public_keyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/Communication/Generated/Notification.public_key.item collection
     * @param string $public_key_id The unique key ID that is used to retrieve the public key.<br><br><span class="tablenote"><b>Note: </b>This is retrieved from the <b>X-EBAY-SIGNATURE</b> header that is included with the push notification.</span>
     * @return WithPublic_key_ItemRequestBuilder
    */
    public function byPublic_key_id(string $public_key_id): WithPublic_key_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['public_key_id'] = $public_key_id;
        return new WithPublic_key_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Public_keyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/public_key');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
