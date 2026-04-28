<?php

namespace EBay\Communication\Generated\Feedback\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type specifies the amount of time elapsed associated with a feedback entry.
*/
class FeedbackEnteredPeriod implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $unit The unit for the feedback entry period's <b>value</b>. Supported value: <code>DAY</code>.
    */
    private ?string $unit = null;
    
    /**
     * @var int|null $value The value for the feedback entry period, specified in units of <b>unit</b>. Supported values: <code>7</code>, <code>30</code>, <code>90</code>, <code>180</code>, or <code>365</code>.
    */
    private ?int $value = null;
    
    /**
     * Instantiates a new FeedbackEnteredPeriod and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedbackEnteredPeriod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedbackEnteredPeriod {
        return new FeedbackEnteredPeriod();
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
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the unit property value. The unit for the feedback entry period's <b>value</b>. Supported value: <code>DAY</code>.
     * @return string|null
    */
    public function getUnit(): ?string {
        return $this->unit;
    }

    /**
     * Gets the value property value. The value for the feedback entry period, specified in units of <b>unit</b>. Supported values: <code>7</code>, <code>30</code>, <code>90</code>, <code>180</code>, or <code>365</code>.
     * @return int|null
    */
    public function getValue(): ?int {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('unit', $this->getUnit());
        $writer->writeIntegerValue('value', $this->getValue());
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
     * Sets the unit property value. The unit for the feedback entry period's <b>value</b>. Supported value: <code>DAY</code>.
     * @param string|null $value Value to set for the unit property.
    */
    public function setUnit(?string $value): void {
        $this->unit = $value;
    }

    /**
     * Sets the value property value. The value for the feedback entry period, specified in units of <b>unit</b>. Supported values: <code>7</code>, <code>30</code>, <code>90</code>, <code>180</code>, or <code>365</code>.
     * @param int|null $value Value to set for the value property.
    */
    public function setValue(?int $value): void {
        $this->value = $value;
    }

}
