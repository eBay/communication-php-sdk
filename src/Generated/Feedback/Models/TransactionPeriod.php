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
 * This type specifies the amount of time elapsed and the threshold associated with a transaction.
*/
class TransactionPeriod implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Period|null $period This container indicates if the time since the item was bought on eBay is less than, more than, or equal to 90 days.
    */
    private ?Period $period = null;
    
    /**
     * @var ThresholdTypeEnum|null $thresholdType This enumerated value indicates whether a transaction <strong>period</strong> exceeds, falls short, or matches the threshold. You can use this field to trigger specific logic or actions based on whether a transaction period exceeds, falls short, or matches the threshold.
    */
    private ?ThresholdTypeEnum $thresholdType = null;
    
    /**
     * Instantiates a new TransactionPeriod and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TransactionPeriod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TransactionPeriod {
        return new TransactionPeriod();
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
            'period' => fn(ParseNode $n) => $o->setPeriod($n->getObjectValue([Period::class, 'createFromDiscriminatorValue'])),
            'thresholdType' => fn(ParseNode $n) => $o->setThresholdType($n->getEnumValue(ThresholdTypeEnum::class)),
        ];
    }

    /**
     * Gets the period property value. This container indicates if the time since the item was bought on eBay is less than, more than, or equal to 90 days.
     * @return Period|null
    */
    public function getPeriod(): ?Period {
        return $this->period;
    }

    /**
     * Gets the thresholdType property value. This enumerated value indicates whether a transaction <strong>period</strong> exceeds, falls short, or matches the threshold. You can use this field to trigger specific logic or actions based on whether a transaction period exceeds, falls short, or matches the threshold.
     * @return ThresholdTypeEnum|null
    */
    public function getThresholdType(): ?ThresholdTypeEnum {
        return $this->thresholdType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('period', $this->getPeriod());
        $writer->writeEnumValue('thresholdType', $this->getThresholdType());
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
     * Sets the period property value. This container indicates if the time since the item was bought on eBay is less than, more than, or equal to 90 days.
     * @param Period|null $value Value to set for the period property.
    */
    public function setPeriod(?Period $value): void {
        $this->period = $value;
    }

    /**
     * Sets the thresholdType property value. This enumerated value indicates whether a transaction <strong>period</strong> exceeds, falls short, or matches the threshold. You can use this field to trigger specific logic or actions based on whether a transaction period exceeds, falls short, or matches the threshold.
     * @param ThresholdTypeEnum|null $value Value to set for the thresholdType property.
    */
    public function setThresholdType(?ThresholdTypeEnum $value): void {
        $this->thresholdType = $value;
    }

}
