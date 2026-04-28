<?php

namespace EBay\Communication\Generated\Feedback\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields for the <b>getItemsAwaitingFeedback</b> response.
*/
class AwaitingFeedbackResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ItemsAwaitingFeedbackCount|null $itemsAwaitingFeedbackCount This type returns the number of line items awaiting feedback.
    */
    private ?ItemsAwaitingFeedbackCount $itemsAwaitingFeedbackCount = null;
    
    /**
     * @var array<AwaitingFeedback>|null $lineItems This array contains the details for each line item awaiting feedback. An empty array is returned if no line items are awaiting feedback or that match the filter criteria.
    */
    private ?array $lineItems = null;
    
    /**
     * @var Pagination|null $pagination This type provides pagination information for the returned line items.
    */
    private ?Pagination $pagination = null;
    
    /**
     * Instantiates a new AwaitingFeedbackResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwaitingFeedbackResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwaitingFeedbackResponse {
        return new AwaitingFeedbackResponse();
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
            'itemsAwaitingFeedbackCount' => fn(ParseNode $n) => $o->setItemsAwaitingFeedbackCount($n->getObjectValue([ItemsAwaitingFeedbackCount::class, 'createFromDiscriminatorValue'])),
            'lineItems' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([AwaitingFeedback::class, 'createFromDiscriminatorValue'])),
            'pagination' => fn(ParseNode $n) => $o->setPagination($n->getObjectValue([Pagination::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the itemsAwaitingFeedbackCount property value. This type returns the number of line items awaiting feedback.
     * @return ItemsAwaitingFeedbackCount|null
    */
    public function getItemsAwaitingFeedbackCount(): ?ItemsAwaitingFeedbackCount {
        return $this->itemsAwaitingFeedbackCount;
    }

    /**
     * Gets the lineItems property value. This array contains the details for each line item awaiting feedback. An empty array is returned if no line items are awaiting feedback or that match the filter criteria.
     * @return array<AwaitingFeedback>|null
    */
    public function getLineItems(): ?array {
        return $this->lineItems;
    }

    /**
     * Gets the pagination property value. This type provides pagination information for the returned line items.
     * @return Pagination|null
    */
    public function getPagination(): ?Pagination {
        return $this->pagination;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('itemsAwaitingFeedbackCount', $this->getItemsAwaitingFeedbackCount());
        $writer->writeCollectionOfObjectValues('lineItems', $this->getLineItems());
        $writer->writeObjectValue('pagination', $this->getPagination());
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
     * Sets the itemsAwaitingFeedbackCount property value. This type returns the number of line items awaiting feedback.
     * @param ItemsAwaitingFeedbackCount|null $value Value to set for the itemsAwaitingFeedbackCount property.
    */
    public function setItemsAwaitingFeedbackCount(?ItemsAwaitingFeedbackCount $value): void {
        $this->itemsAwaitingFeedbackCount = $value;
    }

    /**
     * Sets the lineItems property value. This array contains the details for each line item awaiting feedback. An empty array is returned if no line items are awaiting feedback or that match the filter criteria.
     * @param array<AwaitingFeedback>|null $value Value to set for the lineItems property.
    */
    public function setLineItems(?array $value): void {
        $this->lineItems = $value;
    }

    /**
     * Sets the pagination property value. This type provides pagination information for the returned line items.
     * @param Pagination|null $value Value to set for the pagination property.
    */
    public function setPagination(?Pagination $value): void {
        $this->pagination = $value;
    }

}
