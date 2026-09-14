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
 * This type provides fields available to leave feedback in the <strong>leaveFeedback</strong> request.
*/
class LeaveFeedbackRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $commentText Use this field to provide the feedback left by the user, describing their experience with the line item of the transaction. No HTML formatting or personal information (such as phone numbers) is permitted.<br><p><strong>Maximum length:</strong> 500 characters</p>
    */
    private ?string $commentText = null;
    
    /**
     * @var FeedbackRatingValuesEnum|null $commentType Set this enumerated value to indicate the overall rating of the transaction: <code>POSITIVE</code>, <code>NEUTRAL</code>, or <code>NEGATIVE</code>.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Sellers can only provide positive feedback.</span></p>
    */
    private ?FeedbackRatingValuesEnum $commentType = null;
    
    /**
     * @var array<Image>|null $images Use this array to optionally list up to 5 images attached to the feedback.
    */
    private ?array $images = null;
    
    /**
     * @var string|null $listingId Use this field to provide the listing ID related to the transaction.
    */
    private ?string $listingId = null;
    
    /**
     * @var string|null $orderLineItemId Use this field to provide the unique identifier of the line item for this feedback.
    */
    private ?string $orderLineItemId = null;
    
    /**
     * @var array<SellerRating>|null $sellerRatings Use this array to list ratings for specific aspects of the seller's performance.
    */
    private ?array $sellerRatings = null;
    
    /**
     * @var string|null $transactionId Use this field to provide the unique identifier of the transaction for this feedback.
    */
    private ?string $transactionId = null;
    
    /**
     * Instantiates a new LeaveFeedbackRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeaveFeedbackRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeaveFeedbackRequest {
        return new LeaveFeedbackRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the commentText property value. Use this field to provide the feedback left by the user, describing their experience with the line item of the transaction. No HTML formatting or personal information (such as phone numbers) is permitted.<br><p><strong>Maximum length:</strong> 500 characters</p>
     * @return string|null
    */
    public function getCommentText(): ?string {
        return $this->commentText;
    }

    /**
     * Gets the commentType property value. Set this enumerated value to indicate the overall rating of the transaction: <code>POSITIVE</code>, <code>NEUTRAL</code>, or <code>NEGATIVE</code>.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Sellers can only provide positive feedback.</span></p>
     * @return FeedbackRatingValuesEnum|null
    */
    public function getCommentType(): ?FeedbackRatingValuesEnum {
        return $this->commentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'commentText' => fn(ParseNode $n) => $o->setCommentText($n->getStringValue()),
            'commentType' => fn(ParseNode $n) => $o->setCommentType($n->getEnumValue(FeedbackRatingValuesEnum::class)),
            'images' => fn(ParseNode $n) => $o->setImages($n->getCollectionOfObjectValues([Image::class, 'createFromDiscriminatorValue'])),
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'orderLineItemId' => fn(ParseNode $n) => $o->setOrderLineItemId($n->getStringValue()),
            'sellerRatings' => fn(ParseNode $n) => $o->setSellerRatings($n->getCollectionOfObjectValues([SellerRating::class, 'createFromDiscriminatorValue'])),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the images property value. Use this array to optionally list up to 5 images attached to the feedback.
     * @return array<Image>|null
    */
    public function getImages(): ?array {
        return $this->images;
    }

    /**
     * Gets the listingId property value. Use this field to provide the listing ID related to the transaction.
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the orderLineItemId property value. Use this field to provide the unique identifier of the line item for this feedback.
     * @return string|null
    */
    public function getOrderLineItemId(): ?string {
        return $this->orderLineItemId;
    }

    /**
     * Gets the sellerRatings property value. Use this array to list ratings for specific aspects of the seller's performance.
     * @return array<SellerRating>|null
    */
    public function getSellerRatings(): ?array {
        return $this->sellerRatings;
    }

    /**
     * Gets the transactionId property value. Use this field to provide the unique identifier of the transaction for this feedback.
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
        $writer->writeStringValue('commentText', $this->getCommentText());
        $writer->writeEnumValue('commentType', $this->getCommentType());
        $writer->writeCollectionOfObjectValues('images', $this->getImages());
        $writer->writeStringValue('listingId', $this->getListingId());
        $writer->writeStringValue('orderLineItemId', $this->getOrderLineItemId());
        $writer->writeCollectionOfObjectValues('sellerRatings', $this->getSellerRatings());
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
     * Sets the commentText property value. Use this field to provide the feedback left by the user, describing their experience with the line item of the transaction. No HTML formatting or personal information (such as phone numbers) is permitted.<br><p><strong>Maximum length:</strong> 500 characters</p>
     * @param string|null $value Value to set for the commentText property.
    */
    public function setCommentText(?string $value): void {
        $this->commentText = $value;
    }

    /**
     * Sets the commentType property value. Set this enumerated value to indicate the overall rating of the transaction: <code>POSITIVE</code>, <code>NEUTRAL</code>, or <code>NEGATIVE</code>.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Sellers can only provide positive feedback.</span></p>
     * @param FeedbackRatingValuesEnum|null $value Value to set for the commentType property.
    */
    public function setCommentType(?FeedbackRatingValuesEnum $value): void {
        $this->commentType = $value;
    }

    /**
     * Sets the images property value. Use this array to optionally list up to 5 images attached to the feedback.
     * @param array<Image>|null $value Value to set for the images property.
    */
    public function setImages(?array $value): void {
        $this->images = $value;
    }

    /**
     * Sets the listingId property value. Use this field to provide the listing ID related to the transaction.
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the orderLineItemId property value. Use this field to provide the unique identifier of the line item for this feedback.
     * @param string|null $value Value to set for the orderLineItemId property.
    */
    public function setOrderLineItemId(?string $value): void {
        $this->orderLineItemId = $value;
    }

    /**
     * Sets the sellerRatings property value. Use this array to list ratings for specific aspects of the seller's performance.
     * @param array<SellerRating>|null $value Value to set for the sellerRatings property.
    */
    public function setSellerRatings(?array $value): void {
        $this->sellerRatings = $value;
    }

    /**
     * Sets the transactionId property value. Use this field to provide the unique identifier of the transaction for this feedback.
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->transactionId = $value;
    }

}
