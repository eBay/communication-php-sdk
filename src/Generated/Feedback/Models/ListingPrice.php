<?php

namespace EBay\Communication\Generated\Feedback\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type provides details about the price of the listing awaiting feedback.
*/
class ListingPrice implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $currency This field provides the three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html"  target="_blank">ISO 4217</a> code that represents the currency of the amount in the value field. Both the <b>value</b> and <b>currency</b> fields are always returned when expressing prices.
    */
    private ?string $currency = null;
    
    /**
     * @var float|null $value This field contains the numerical value of the listing price in the currency specified in the <b>currency</b> field. Both the <b>value</b> and <b>currency</b> fields are always returned when expressing prices.
    */
    private ?float $value = null;
    
    /**
     * Instantiates a new ListingPrice and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListingPrice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListingPrice {
        return new ListingPrice();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the currency property value. This field provides the three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html"  target="_blank">ISO 4217</a> code that represents the currency of the amount in the value field. Both the <b>value</b> and <b>currency</b> fields are always returned when expressing prices.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getFloatValue()),
        ];
    }

    /**
     * Gets the value property value. This field contains the numerical value of the listing price in the currency specified in the <b>currency</b> field. Both the <b>value</b> and <b>currency</b> fields are always returned when expressing prices.
     * @return float|null
    */
    public function getValue(): ?float {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeFloatValue('value', $this->getValue());
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
     * Sets the currency property value. This field provides the three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html"  target="_blank">ISO 4217</a> code that represents the currency of the amount in the value field. Both the <b>value</b> and <b>currency</b> fields are always returned when expressing prices.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the value property value. This field contains the numerical value of the listing price in the currency specified in the <b>currency</b> field. Both the <b>value</b> and <b>currency</b> fields are always returned when expressing prices.
     * @param float|null $value Value to set for the value property.
    */
    public function setValue(?float $value): void {
        $this->value = $value;
    }

}
