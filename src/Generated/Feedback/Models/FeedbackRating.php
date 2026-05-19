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
 * This type provides for fields in ratings attached to feedback.
*/
class FeedbackRating implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $ratingType This enumerated value indicates the type of rating (for example, <code>OVERALL_EXPERIENCE</code>, <code>DSR_ITEM_AS_DESCRIBED</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum'>eBay API documentation</a>
    */
    private ?string $ratingType = null;
    
    /**
     * @var string|null $value The value assigned to the rating, specified as a string representing a number from <code>1</code> to <code>5</code>, with <code>1</code> representing the lowest rating and <code>5</code> representing the highest rating.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new FeedbackRating and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedbackRating
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedbackRating {
        return new FeedbackRating();
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
            'ratingType' => fn(ParseNode $n) => $o->setRatingType($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the ratingType property value. This enumerated value indicates the type of rating (for example, <code>OVERALL_EXPERIENCE</code>, <code>DSR_ITEM_AS_DESCRIBED</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getRatingType(): ?string {
        return $this->ratingType;
    }

    /**
     * Gets the value property value. The value assigned to the rating, specified as a string representing a number from <code>1</code> to <code>5</code>, with <code>1</code> representing the lowest rating and <code>5</code> representing the highest rating.
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
        $writer->writeStringValue('ratingType', $this->getRatingType());
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
     * Sets the ratingType property value. This enumerated value indicates the type of rating (for example, <code>OVERALL_EXPERIENCE</code>, <code>DSR_ITEM_AS_DESCRIBED</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the ratingType property.
    */
    public function setRatingType(?string $value): void {
        $this->ratingType = $value;
    }

    /**
     * Sets the value property value. The value assigned to the rating, specified as a string representing a number from <code>1</code> to <code>5</code>, with <code>1</code> representing the lowest rating and <code>5</code> representing the highest rating.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
