<?php

namespace EBay\Communication\Generated\Feedback\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains the details for each line item awaiting feedback.
*/
class AwaitingFeedback implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $listingId This is the unique identifier for the listing associated with the line item. It is used to reference the specific listing for which feedback is being awaited.
    */
    private ?string $listingId = null;
    
    /**
     * @var ListingPrice|null $listingPrice This type provides details about the price of the listing awaiting feedback.
    */
    private ?ListingPrice $listingPrice = null;
    
    /**
     * @var string|null $listingTitle The title of the listing.
    */
    private ?string $listingTitle = null;
    
    /**
     * @var string|null $orderLineItemId The unique identifier for the eBay order line item associated with the listing. It is used to pinpoint the exact line item for which feedback is being awaited.
    */
    private ?string $orderLineItemId = null;
    
    /**
     * @var array<FeedbackRatingTemplateType>|null $ratingTemplates This array contains a list of available values for use in a particular rating, and whether the value is enabled. This is dependent on what seller ratings the buyer's order partner qualifies.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Rating templates should only be returned to the user in their role as a buyer; only sellers have Detailed Seller Ratings (DSRs). </span></p><p>Use the metadata returned here when leaving DSR ratings through the <b>leaveFeedback</b> method. The key field in this container is the <b>ratingKey</b> field. See <a href="/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum" >FeedbackRatingTypeEnum</a> for its values. The other metadata returned in this container apply to each <b>ratingKey</b> value that is returned.</p>
    */
    private ?array $ratingTemplates = null;
    
    /**
     * @var string|null $transactionId The unique identifier of the sales transaction.
    */
    private ?string $transactionId = null;
    
    /**
     * Instantiates a new AwaitingFeedback and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwaitingFeedback
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwaitingFeedback {
        return new AwaitingFeedback();
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
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'listingPrice' => fn(ParseNode $n) => $o->setListingPrice($n->getObjectValue([ListingPrice::class, 'createFromDiscriminatorValue'])),
            'listingTitle' => fn(ParseNode $n) => $o->setListingTitle($n->getStringValue()),
            'orderLineItemId' => fn(ParseNode $n) => $o->setOrderLineItemId($n->getStringValue()),
            'ratingTemplates' => fn(ParseNode $n) => $o->setRatingTemplates($n->getCollectionOfObjectValues([FeedbackRatingTemplateType::class, 'createFromDiscriminatorValue'])),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the listingId property value. This is the unique identifier for the listing associated with the line item. It is used to reference the specific listing for which feedback is being awaited.
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the listingPrice property value. This type provides details about the price of the listing awaiting feedback.
     * @return ListingPrice|null
    */
    public function getListingPrice(): ?ListingPrice {
        return $this->listingPrice;
    }

    /**
     * Gets the listingTitle property value. The title of the listing.
     * @return string|null
    */
    public function getListingTitle(): ?string {
        return $this->listingTitle;
    }

    /**
     * Gets the orderLineItemId property value. The unique identifier for the eBay order line item associated with the listing. It is used to pinpoint the exact line item for which feedback is being awaited.
     * @return string|null
    */
    public function getOrderLineItemId(): ?string {
        return $this->orderLineItemId;
    }

    /**
     * Gets the ratingTemplates property value. This array contains a list of available values for use in a particular rating, and whether the value is enabled. This is dependent on what seller ratings the buyer's order partner qualifies.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Rating templates should only be returned to the user in their role as a buyer; only sellers have Detailed Seller Ratings (DSRs). </span></p><p>Use the metadata returned here when leaving DSR ratings through the <b>leaveFeedback</b> method. The key field in this container is the <b>ratingKey</b> field. See <a href="/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum" >FeedbackRatingTypeEnum</a> for its values. The other metadata returned in this container apply to each <b>ratingKey</b> value that is returned.</p>
     * @return array<FeedbackRatingTemplateType>|null
    */
    public function getRatingTemplates(): ?array {
        return $this->ratingTemplates;
    }

    /**
     * Gets the transactionId property value. The unique identifier of the sales transaction.
     * @return string|null
    */
    public function getTransactionId(): ?string {
        return $this->transactionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('listingId', $this->getListingId());
        $writer->writeObjectValue('listingPrice', $this->getListingPrice());
        $writer->writeStringValue('listingTitle', $this->getListingTitle());
        $writer->writeStringValue('orderLineItemId', $this->getOrderLineItemId());
        $writer->writeCollectionOfObjectValues('ratingTemplates', $this->getRatingTemplates());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
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
     * Sets the listingId property value. This is the unique identifier for the listing associated with the line item. It is used to reference the specific listing for which feedback is being awaited.
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the listingPrice property value. This type provides details about the price of the listing awaiting feedback.
     * @param ListingPrice|null $value Value to set for the listingPrice property.
    */
    public function setListingPrice(?ListingPrice $value): void {
        $this->listingPrice = $value;
    }

    /**
     * Sets the listingTitle property value. The title of the listing.
     * @param string|null $value Value to set for the listingTitle property.
    */
    public function setListingTitle(?string $value): void {
        $this->listingTitle = $value;
    }

    /**
     * Sets the orderLineItemId property value. The unique identifier for the eBay order line item associated with the listing. It is used to pinpoint the exact line item for which feedback is being awaited.
     * @param string|null $value Value to set for the orderLineItemId property.
    */
    public function setOrderLineItemId(?string $value): void {
        $this->orderLineItemId = $value;
    }

    /**
     * Sets the ratingTemplates property value. This array contains a list of available values for use in a particular rating, and whether the value is enabled. This is dependent on what seller ratings the buyer's order partner qualifies.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Rating templates should only be returned to the user in their role as a buyer; only sellers have Detailed Seller Ratings (DSRs). </span></p><p>Use the metadata returned here when leaving DSR ratings through the <b>leaveFeedback</b> method. The key field in this container is the <b>ratingKey</b> field. See <a href="/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum" >FeedbackRatingTypeEnum</a> for its values. The other metadata returned in this container apply to each <b>ratingKey</b> value that is returned.</p>
     * @param array<FeedbackRatingTemplateType>|null $value Value to set for the ratingTemplates property.
    */
    public function setRatingTemplates(?array $value): void {
        $this->ratingTemplates = $value;
    }

    /**
     * Sets the transactionId property value. The unique identifier of the sales transaction.
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->transactionId = $value;
    }

}
