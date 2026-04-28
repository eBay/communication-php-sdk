<?php

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
     * @var Period|null $period This type provides fields for the time period on which the feedback summary is calculated.
    */
    private ?Period $period = null;
    
    /**
     * @var string|null $thresholdType This enumerated value indicates whether a transaction <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.orderLineItemSummary.transactionPeriod.period" >period</a> exceeds, falls short, or matches the threshold. You can use this field to trigger specific logic or actions based on whether a transaction period exceeds, falls short, or matches the threshold. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:ThresholdTypeEnum'>eBay API documentation</a>
    */
    private ?string $thresholdType = null;
    
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
            'thresholdType' => fn(ParseNode $n) => $o->setThresholdType($n->getStringValue()),
        ];
    }

    /**
     * Gets the period property value. This type provides fields for the time period on which the feedback summary is calculated.
     * @return Period|null
    */
    public function getPeriod(): ?Period {
        return $this->period;
    }

    /**
     * Gets the thresholdType property value. This enumerated value indicates whether a transaction <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.orderLineItemSummary.transactionPeriod.period" >period</a> exceeds, falls short, or matches the threshold. You can use this field to trigger specific logic or actions based on whether a transaction period exceeds, falls short, or matches the threshold. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:ThresholdTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getThresholdType(): ?string {
        return $this->thresholdType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('period', $this->getPeriod());
        $writer->writeStringValue('thresholdType', $this->getThresholdType());
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
     * Sets the period property value. This type provides fields for the time period on which the feedback summary is calculated.
     * @param Period|null $value Value to set for the period property.
    */
    public function setPeriod(?Period $value): void {
        $this->period = $value;
    }

    /**
     * Sets the thresholdType property value. This enumerated value indicates whether a transaction <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.orderLineItemSummary.transactionPeriod.period" >period</a> exceeds, falls short, or matches the threshold. You can use this field to trigger specific logic or actions based on whether a transaction period exceeds, falls short, or matches the threshold. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:ThresholdTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the thresholdType property.
    */
    public function setThresholdType(?string $value): void {
        $this->thresholdType = $value;
    }

}
