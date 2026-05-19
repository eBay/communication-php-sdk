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

namespace EBay\Communication\Generated\Feedback\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the attributes of the user who provided the feedback of a <b>getFeedback</b> response.
*/
class ProviderUserDetailUserAttributes implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $name This enumerated value indicates an attribute of the user (for example, <code>USER_VERIFIED</code>). The <b>value</b> field indicates if the attribute applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:UserAttributeEnum'>eBay API documentation</a>
    */
    private ?string $name = null;
    
    /**
     * @var string|null $value If returned as <code>true</code>, the user attribute <b>name</b> applies; if returned as <code>false</code>, the attribute does not apply.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new ProviderUserDetailUserAttributes and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProviderUserDetailUserAttributes
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProviderUserDetailUserAttributes {
        return new ProviderUserDetailUserAttributes();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. This enumerated value indicates an attribute of the user (for example, <code>USER_VERIFIED</code>). The <b>value</b> field indicates if the attribute applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:UserAttributeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the value property value. If returned as <code>true</code>, the user attribute <b>name</b> applies; if returned as <code>false</code>, the attribute does not apply.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the name property value. This enumerated value indicates an attribute of the user (for example, <code>USER_VERIFIED</code>). The <b>value</b> field indicates if the attribute applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:UserAttributeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the value property value. If returned as <code>true</code>, the user attribute <b>name</b> applies; if returned as <code>false</code>, the attribute does not apply.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
