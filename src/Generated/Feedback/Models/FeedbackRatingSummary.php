<?php

namespace EBay\Communication\Generated\Feedback\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type provides fields for an array containing a summary of feedback ratings. Each element provides detailed metrics and distributions for specific rating types.
*/
class FeedbackRatingSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<RatingSummaryByRatingType>|null $ratingSummaryByRatingType An array that includes metrics and distributions for each rating type.
    */
    private ?array $ratingSummaryByRatingType = null;
    
    /**
     * @var string|null $ratingType This enumerated value indicates the type of rating being summarized. For example, <code>OVERALL_EXPERIENCE</code> indicates the rating applies to the overall transaction experience. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum'>eBay API documentation</a>
    */
    private ?string $ratingType = null;
    
    /**
     * Instantiates a new FeedbackRatingSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedbackRatingSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedbackRatingSummary {
        return new FeedbackRatingSummary();
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
            'ratingSummaryByRatingType' => fn(ParseNode $n) => $o->setRatingSummaryByRatingType($n->getCollectionOfObjectValues([RatingSummaryByRatingType::class, 'createFromDiscriminatorValue'])),
            'ratingType' => fn(ParseNode $n) => $o->setRatingType($n->getStringValue()),
        ];
    }

    /**
     * Gets the ratingSummaryByRatingType property value. An array that includes metrics and distributions for each rating type.
     * @return array<RatingSummaryByRatingType>|null
    */
    public function getRatingSummaryByRatingType(): ?array {
        return $this->ratingSummaryByRatingType;
    }

    /**
     * Gets the ratingType property value. This enumerated value indicates the type of rating being summarized. For example, <code>OVERALL_EXPERIENCE</code> indicates the rating applies to the overall transaction experience. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getRatingType(): ?string {
        return $this->ratingType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('ratingSummaryByRatingType', $this->getRatingSummaryByRatingType());
        $writer->writeStringValue('ratingType', $this->getRatingType());
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
     * Sets the ratingSummaryByRatingType property value. An array that includes metrics and distributions for each rating type.
     * @param array<RatingSummaryByRatingType>|null $value Value to set for the ratingSummaryByRatingType property.
    */
    public function setRatingSummaryByRatingType(?array $value): void {
        $this->ratingSummaryByRatingType = $value;
    }

    /**
     * Sets the ratingType property value. This enumerated value indicates the type of rating being summarized. For example, <code>OVERALL_EXPERIENCE</code> indicates the rating applies to the overall transaction experience. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the ratingType property.
    */
    public function setRatingType(?string $value): void {
        $this->ratingType = $value;
    }

}
