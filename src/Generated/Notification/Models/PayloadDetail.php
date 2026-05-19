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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A type that describes the details about a topic's payload.
*/
class PayloadDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $deliveryProtocol The supported delivery protocols. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:ProtocolEnum'>eBay API documentation</a>
    */
    private ?string $deliveryProtocol = null;
    
    /**
     * @var bool|null $deprecated A deprecation indicator.
    */
    private ?bool $deprecated = null;
    
    /**
     * @var array<string>|null $format The supported format. Presently, <code>JSON</code> is the only supported format.
    */
    private ?array $format = null;
    
    /**
     * @var string|null $schemaVersion The supported schema version.
    */
    private ?string $schemaVersion = null;
    
    /**
     * Instantiates a new PayloadDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PayloadDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PayloadDetail {
        return new PayloadDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the deliveryProtocol property value. The supported delivery protocols. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:ProtocolEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getDeliveryProtocol(): ?string {
        return $this->deliveryProtocol;
    }

    /**
     * Gets the deprecated property value. A deprecation indicator.
     * @return bool|null
    */
    public function getDeprecated(): ?bool {
        return $this->deprecated;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deliveryProtocol' => fn(ParseNode $n) => $o->setDeliveryProtocol($n->getStringValue()),
            'deprecated' => fn(ParseNode $n) => $o->setDeprecated($n->getBooleanValue()),
            'format' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setFormat($val);
            },
            'schemaVersion' => fn(ParseNode $n) => $o->setSchemaVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the format property value. The supported format. Presently, <code>JSON</code> is the only supported format.
     * @return array<string>|null
    */
    public function getFormat(): ?array {
        return $this->format;
    }

    /**
     * Gets the schemaVersion property value. The supported schema version.
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
        $writer->writeBooleanValue('deprecated', $this->getDeprecated());
        $writer->writeCollectionOfPrimitiveValues('format', $this->getFormat());
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
     * Sets the deliveryProtocol property value. The supported delivery protocols. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:ProtocolEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the deliveryProtocol property.
    */
    public function setDeliveryProtocol(?string $value): void {
        $this->deliveryProtocol = $value;
    }

    /**
     * Sets the deprecated property value. A deprecation indicator.
     * @param bool|null $value Value to set for the deprecated property.
    */
    public function setDeprecated(?bool $value): void {
        $this->deprecated = $value;
    }

    /**
     * Sets the format property value. The supported format. Presently, <code>JSON</code> is the only supported format.
     * @param array<string>|null $value Value to set for the format property.
    */
    public function setFormat(?array $value): void {
        $this->format = $value;
    }

    /**
     * Sets the schemaVersion property value. The supported schema version.
     * @param string|null $value Value to set for the schemaVersion property.
    */
    public function setSchemaVersion(?string $value): void {
        $this->schemaVersion = $value;
    }

}
