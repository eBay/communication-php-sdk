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
 * This type provides field for an array listing the distribution values of the feedback ratings.
*/
class FeedbackRatingValueDistribution implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $count An integer representing the number of occurrences for a specific feedback rating <b>value</b>. For example, for the <code>POSITIVE</code> <b>value</b>, a <code>3</code> returned as the <b>count</b> represents three positive ratings were returned.
    */
    private ?int $count = null;
    
    /**
     * @var string|null $value A string indicating the specific feedback rating value. Supported values include: <code>POSITIVE</code>, <code>NEUTRAL</code>, <code>NEGATIVE</code>, <code>1</code>, <code>2</code>, <code>3</code>, <code>4</code>, and <code>5</code>.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new FeedbackRatingValueDistribution and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedbackRatingValueDistribution
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedbackRatingValueDistribution {
        return new FeedbackRatingValueDistribution();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the count property value. An integer representing the number of occurrences for a specific feedback rating <b>value</b>. For example, for the <code>POSITIVE</code> <b>value</b>, a <code>3</code> returned as the <b>count</b> represents three positive ratings were returned.
     * @return int|null
    */
    public function getCount(): ?int {
        return $this->count;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'count' => fn(ParseNode $n) => $o->setCount($n->getIntegerValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the value property value. A string indicating the specific feedback rating value. Supported values include: <code>POSITIVE</code>, <code>NEUTRAL</code>, <code>NEGATIVE</code>, <code>1</code>, <code>2</code>, <code>3</code>, <code>4</code>, and <code>5</code>.
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
        $writer->writeIntegerValue('count', $this->getCount());
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
     * Sets the count property value. An integer representing the number of occurrences for a specific feedback rating <b>value</b>. For example, for the <code>POSITIVE</code> <b>value</b>, a <code>3</code> returned as the <b>count</b> represents three positive ratings were returned.
     * @param int|null $value Value to set for the count property.
    */
    public function setCount(?int $value): void {
        $this->count = $value;
    }

    /**
     * Sets the value property value. A string indicating the specific feedback rating value. Supported values include: <code>POSITIVE</code>, <code>NEUTRAL</code>, <code>NEGATIVE</code>, <code>1</code>, <code>2</code>, <code>3</code>, <code>4</code>, and <code>5</code>.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
