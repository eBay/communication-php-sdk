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
 * This type provides fields for specific aspects of the seller's performance.
*/
class SellerRating implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var KeyEnum|null $key The enumerated value of the category being rated, such as delivery timeliness (<code>ON_TIME_DELIVERY</code>).
    */
    private ?KeyEnum $key = null;
    
    /**
     * @var string|null $value The value assigned for the selected category. Use a value of <code>1</code> through <code>5</code>, with <code>1</code> being the lowest rating and <code>5</code> being the highest.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new SellerRating and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SellerRating
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SellerRating {
        return new SellerRating();
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
            'key' => fn(ParseNode $n) => $o->setKey($n->getEnumValue(KeyEnum::class)),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the key property value. The enumerated value of the category being rated, such as delivery timeliness (<code>ON_TIME_DELIVERY</code>).
     * @return KeyEnum|null
    */
    public function getKey(): ?KeyEnum {
        return $this->key;
    }

    /**
     * Gets the value property value. The value assigned for the selected category. Use a value of <code>1</code> through <code>5</code>, with <code>1</code> being the lowest rating and <code>5</code> being the highest.
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
        $writer->writeEnumValue('key', $this->getKey());
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
     * Sets the key property value. The enumerated value of the category being rated, such as delivery timeliness (<code>ON_TIME_DELIVERY</code>).
     * @param KeyEnum|null $value Value to set for the key property.
    */
    public function setKey(?KeyEnum $value): void {
        $this->key = $value;
    }

    /**
     * Sets the value property value. The value assigned for the selected category. Use a value of <code>1</code> through <code>5</code>, with <code>1</code> being the lowest rating and <code>5</code> being the highest.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
