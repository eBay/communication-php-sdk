<?php

namespace EBay\Communication\Generated\Feedback\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields for the <b>getFeedbackRatingSummary</b> response.
*/
class GetFeedbackRatingSummaryResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<FeedbackRatingSummary>|null $feedbackRatingSummary An array containing a summary of feedback ratings. Each element provides detailed metrics and distributions for specific rating types.
    */
    private ?array $feedbackRatingSummary = null;
    
    /**
     * Instantiates a new GetFeedbackRatingSummaryResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetFeedbackRatingSummaryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetFeedbackRatingSummaryResponse {
        return new GetFeedbackRatingSummaryResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the feedbackRatingSummary property value. An array containing a summary of feedback ratings. Each element provides detailed metrics and distributions for specific rating types.
     * @return array<FeedbackRatingSummary>|null
    */
    public function getFeedbackRatingSummary(): ?array {
        return $this->feedbackRatingSummary;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'feedbackRatingSummary' => fn(ParseNode $n) => $o->setFeedbackRatingSummary($n->getCollectionOfObjectValues([FeedbackRatingSummary::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('feedbackRatingSummary', $this->getFeedbackRatingSummary());
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
     * Sets the feedbackRatingSummary property value. An array containing a summary of feedback ratings. Each element provides detailed metrics and distributions for specific rating types.
     * @param array<FeedbackRatingSummary>|null $value Value to set for the feedbackRatingSummary property.
    */
    public function setFeedbackRatingSummary(?array $value): void {
        $this->feedbackRatingSummary = $value;
    }

}
