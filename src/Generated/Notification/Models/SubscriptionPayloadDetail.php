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

namespace EBay\Communication\Generated\Notification\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that describes the details of the subscription payload.
*/
class SubscriptionPayloadDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $deliveryProtocol The supported delivery protocol of the notification topic.<br><br><span class="tablenote"><b>Note:</b> <code>HTTPS</code> is currently the only supported delivery protocol of all notification topics. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:ProtocolEnum'>eBay API documentation</a>
    */
    private ?string $deliveryProtocol = null;
    
    /**
     * @var string|null $format The supported data format of the payload.<br><br><span class="tablenote"><b>Note:</b> JSON is currently the only supported format for all notification topics.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:FormatTypeEnum'>eBay API documentation</a>
    */
    private ?string $format = null;
    
    /**
     * @var string|null $schemaVersion The supported schema version for the notification topic. See the <b>supportedPayloads.schemaVersion</b> field for the topic in <b>getTopics</b> or <b>getTopic</b> response.
    */
    private ?string $schemaVersion = null;
    
    /**
     * Instantiates a new SubscriptionPayloadDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionPayloadDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionPayloadDetail {
        return new SubscriptionPayloadDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the deliveryProtocol property value. The supported delivery protocol of the notification topic.<br><br><span class="tablenote"><b>Note:</b> <code>HTTPS</code> is currently the only supported delivery protocol of all notification topics. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:ProtocolEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getDeliveryProtocol(): ?string {
        return $this->deliveryProtocol;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deliveryProtocol' => fn(ParseNode $n) => $o->setDeliveryProtocol($n->getStringValue()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'schemaVersion' => fn(ParseNode $n) => $o->setSchemaVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the format property value. The supported data format of the payload.<br><br><span class="tablenote"><b>Note:</b> JSON is currently the only supported format for all notification topics.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:FormatTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getFormat(): ?string {
        return $this->format;
    }

    /**
     * Gets the schemaVersion property value. The supported schema version for the notification topic. See the <b>supportedPayloads.schemaVersion</b> field for the topic in <b>getTopics</b> or <b>getTopic</b> response.
     * @return string|null
    */
    public function getSchemaVersion(): ?string {
        return $this->schemaVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deliveryProtocol', $this->getDeliveryProtocol());
        $writer->writeStringValue('format', $this->getFormat());
        $writer->writeStringValue('schemaVersion', $this->getSchemaVersion());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deliveryProtocol property value. The supported delivery protocol of the notification topic.<br><br><span class="tablenote"><b>Note:</b> <code>HTTPS</code> is currently the only supported delivery protocol of all notification topics. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:ProtocolEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the deliveryProtocol property.
    */
    public function setDeliveryProtocol(?string $value): void {
        $this->deliveryProtocol = $value;
    }

    /**
     * Sets the format property value. The supported data format of the payload.<br><br><span class="tablenote"><b>Note:</b> JSON is currently the only supported format for all notification topics.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:FormatTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value): void {
        $this->format = $value;
    }

    /**
     * Sets the schemaVersion property value. The supported schema version for the notification topic. See the <b>supportedPayloads.schemaVersion</b> field for the topic in <b>getTopics</b> or <b>getTopic</b> response.
     * @param string|null $value Value to set for the schemaVersion property.
    */
    public function setSchemaVersion(?string $value): void {
        $this->schemaVersion = $value;
    }

}
