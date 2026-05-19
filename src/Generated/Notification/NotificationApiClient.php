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

namespace EBay\Communication\Generated\Notification;

use EBay\Communication\Generated\Notification\Config\ConfigRequestBuilder;
use EBay\Communication\Generated\Notification\Destination\DestinationRequestBuilder;
use EBay\Communication\Generated\Notification\Public_key\Public_keyRequestBuilder;
use EBay\Communication\Generated\Notification\Subscription\SubscriptionRequestBuilder;
use EBay\Communication\Generated\Notification\Topic\TopicRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Serialization\Form\FormParseNodeFactory;
use Microsoft\Kiota\Serialization\Form\FormSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Multipart\MultipartSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class NotificationApiClient extends BaseRequestBuilder 
{
    /**
     * The config property
    */
    public function config(): ConfigRequestBuilder {
        return new ConfigRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The destination property
    */
    public function destination(): DestinationRequestBuilder {
        return new DestinationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The public_key property
    */
    public function public_key(): Public_keyRequestBuilder {
        return new Public_keyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscription property
    */
    public function subscription(): SubscriptionRequestBuilder {
        return new SubscriptionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The topic property
    */
    public function topic(): TopicRequestBuilder {
        return new TopicRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new NotificationApiClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}');
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(FormSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(MultipartSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(FormParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://api.ebay.com{basePath}');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

}
