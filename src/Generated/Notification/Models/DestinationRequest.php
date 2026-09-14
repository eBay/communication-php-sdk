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
 * A type that contains information about the destination request.
*/
class DestinationRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DeliveryConfig|null $deliveryConfig This container is used to specify the destination endpoint and verification token associated with this endpoint.
    */
    private ?DeliveryConfig $deliveryConfig = null;
    
    /**
     * @var string|null $name The seller-specified name for the destination endpoint.
    */
    private ?string $name = null;
    
    /**
     * @var DestinationStatusEnum|null $status This field sets the status for the destination endpoint as <code>ENABLED</code> or <code>DISABLED</code>.<br><br><span class="tablenote"><b>Note:</b> The <b>MARKED_DOWN</b> value is set by eBay systems and cannot be used in a create or update call by applications.</span>
    */
    private ?DestinationStatusEnum $status = null;
    
    /**
     * Instantiates a new DestinationRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DestinationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DestinationRequest {
        return new DestinationRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the deliveryConfig property value. This container is used to specify the destination endpoint and verification token associated with this endpoint.
     * @return DeliveryConfig|null
    */
    public function getDeliveryConfig(): ?DeliveryConfig {
        return $this->deliveryConfig;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deliveryConfig' => fn(ParseNode $n) => $o->setDeliveryConfig($n->getObjectValue([DeliveryConfig::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DestinationStatusEnum::class)),
        ];
    }

    /**
     * Gets the name property value. The seller-specified name for the destination endpoint.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the status property value. This field sets the status for the destination endpoint as <code>ENABLED</code> or <code>DISABLED</code>.<br><br><span class="tablenote"><b>Note:</b> The <b>MARKED_DOWN</b> value is set by eBay systems and cannot be used in a create or update call by applications.</span>
     * @return DestinationStatusEnum|null
    */
    public function getStatus(): ?DestinationStatusEnum {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('deliveryConfig', $this->getDeliveryConfig());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the deliveryConfig property value. This container is used to specify the destination endpoint and verification token associated with this endpoint.
     * @param DeliveryConfig|null $value Value to set for the deliveryConfig property.
    */
    public function setDeliveryConfig(?DeliveryConfig $value): void {
        $this->deliveryConfig = $value;
    }

    /**
     * Sets the name property value. The seller-specified name for the destination endpoint.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the status property value. This field sets the status for the destination endpoint as <code>ENABLED</code> or <code>DISABLED</code>.<br><br><span class="tablenote"><b>Note:</b> The <b>MARKED_DOWN</b> value is set by eBay systems and cannot be used in a create or update call by applications.</span>
     * @param DestinationStatusEnum|null $value Value to set for the status property.
    */
    public function setStatus(?DestinationStatusEnum $value): void {
        $this->status = $value;
    }

}
