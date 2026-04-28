<?php

namespace EBay\Communication\Generated\Feedback\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type provides fields for available values for use in a particular rating, and whether the value is enabled.
*/
class FeedbackRatingAcceptableValue implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $enabled If <code>true</code>, this boolean indicates that this value is enabled and selectable.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $value The value that can be selected for feedback. For most <b>ratingType</b> values, this is <code>1</code> through <code>5</code>, with <code>1</code> representing the lowest rating and <code>5</code> representing the highest rating. For <b>ratingType</b> of <code>OVERALL_EXPERIENCE</code>, this can be <code>POSITIVE</code>, <code>NEGATIVE</code>, and <code>NEUTRAL</code>. These are the same values as used with the <b>leaveFeedback</b> methods.
    */
    private ?string $value = null;
    
    /**
     * @var string|null $valueLabel This field provides information about the corresponding <b>value</b>.
    */
    private ?string $valueLabel = null;
    
    /**
     * Instantiates a new FeedbackRatingAcceptableValue and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedbackRatingAcceptableValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedbackRatingAcceptableValue {
        return new FeedbackRatingAcceptableValue();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the enabled property value. If <code>true</code>, this boolean indicates that this value is enabled and selectable.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
            'valueLabel' => fn(ParseNode $n) => $o->setValueLabel($n->getStringValue()),
        ];
    }

    /**
     * Gets the value property value. The value that can be selected for feedback. For most <b>ratingType</b> values, this is <code>1</code> through <code>5</code>, with <code>1</code> representing the lowest rating and <code>5</code> representing the highest rating. For <b>ratingType</b> of <code>OVERALL_EXPERIENCE</code>, this can be <code>POSITIVE</code>, <code>NEGATIVE</code>, and <code>NEUTRAL</code>. These are the same values as used with the <b>leaveFeedback</b> methods.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Gets the valueLabel property value. This field provides information about the corresponding <b>value</b>.
     * @return string|null
    */
    public function getValueLabel(): ?string {
        return $this->valueLabel;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('value', $this->getValue());
        $writer->writeStringValue('valueLabel', $this->getValueLabel());
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
     * Sets the enabled property value. If <code>true</code>, this boolean indicates that this value is enabled and selectable.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the value property value. The value that can be selected for feedback. For most <b>ratingType</b> values, this is <code>1</code> through <code>5</code>, with <code>1</code> representing the lowest rating and <code>5</code> representing the highest rating. For <b>ratingType</b> of <code>OVERALL_EXPERIENCE</code>, this can be <code>POSITIVE</code>, <code>NEGATIVE</code>, and <code>NEUTRAL</code>. These are the same values as used with the <b>leaveFeedback</b> methods.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

    /**
     * Sets the valueLabel property value. This field provides information about the corresponding <b>value</b>.
     * @param string|null $value Value to set for the valueLabel property.
    */
    public function setValueLabel(?string $value): void {
        $this->valueLabel = $value;
    }

}
