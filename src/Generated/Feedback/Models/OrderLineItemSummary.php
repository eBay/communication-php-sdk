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
 * This type provides fields for a summary of the line item related to feedback.
*/
class OrderLineItemSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $listingId This field provides the unique identifier for the listing associated with the feedback entry. Conditionally returned based on the authorization flow and user context. See <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.orderLineItemSummary">orderLineItemSummary</a> for details on when this field is included.
    */
    private ?string $listingId = null;
    
    /**
     * @var ListingPrice|null $listingPrice This type provides details about the price of the listing awaiting feedback.
    */
    private ?ListingPrice $listingPrice = null;
    
    /**
     * @var string|null $listingTitle This field contains the title of the listing. Conditionally returned based on the authorization flow and user context. See <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.orderLineItemSummary">orderLineItemSummary</a> for details on when this field is included.
    */
    private ?string $listingTitle = null;
    
    /**
     * @var array<OrderLineItemAttribute>|null $orderLineItemAttributes This array describes order line attributes including names and values of a transaction.
    */
    private ?array $orderLineItemAttributes = null;
    
    /**
     * @var string|null $orderLineItemId The unique identifier of the line item for this feedback. Conditionally returned based on the authorization flow and user context. See <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.orderLineItemSummary">orderLineItemSummary</a> for details on when this field is included.
    */
    private ?string $orderLineItemId = null;
    
    /**
     * @var TransactionPeriod|null $transactionPeriod This type specifies the amount of time elapsed and the threshold associated with a transaction.
    */
    private ?TransactionPeriod $transactionPeriod = null;
    
    /**
     * Instantiates a new OrderLineItemSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderLineItemSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderLineItemSummary {
        return new OrderLineItemSummary();
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
            'orderLineItemAttributes' => fn(ParseNode $n) => $o->setOrderLineItemAttributes($n->getCollectionOfObjectValues([OrderLineItemAttribute::class, 'createFromDiscriminatorValue'])),
            'orderLineItemId' => fn(ParseNode $n) => $o->setOrderLineItemId($n->getStringValue()),
            'transactionPeriod' => fn(ParseNode $n) => $o->setTransactionPeriod($n->getObjectValue([TransactionPeriod::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the listingId property value. This field provides the unique identifier for the listing associated with the feedback entry. Conditionally returned based on the authorization flow and user context. See <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.orderLineItemSummary">orderLineItemSummary</a> for details on when this field is included.
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
     * Gets the listingTitle property value. This field contains the title of the listing. Conditionally returned based on the authorization flow and user context. See <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.orderLineItemSummary">orderLineItemSummary</a> for details on when this field is included.
     * @return string|null
    */
    public function getListingTitle(): ?string {
        return $this->listingTitle;
    }

    /**
     * Gets the orderLineItemAttributes property value. This array describes order line attributes including names and values of a transaction.
     * @return array<OrderLineItemAttribute>|null
    */
    public function getOrderLineItemAttributes(): ?array {
        return $this->orderLineItemAttributes;
    }

    /**
     * Gets the orderLineItemId property value. The unique identifier of the line item for this feedback. Conditionally returned based on the authorization flow and user context. See <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.orderLineItemSummary">orderLineItemSummary</a> for details on when this field is included.
     * @return string|null
    */
    public function getOrderLineItemId(): ?string {
        return $this->orderLineItemId;
    }

    /**
     * Gets the transactionPeriod property value. This type specifies the amount of time elapsed and the threshold associated with a transaction.
     * @return TransactionPeriod|null
    */
    public function getTransactionPeriod(): ?TransactionPeriod {
        return $this->transactionPeriod;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('listingId', $this->getListingId());
        $writer->writeObjectValue('listingPrice', $this->getListingPrice());
        $writer->writeStringValue('listingTitle', $this->getListingTitle());
        $writer->writeCollectionOfObjectValues('orderLineItemAttributes', $this->getOrderLineItemAttributes());
        $writer->writeStringValue('orderLineItemId', $this->getOrderLineItemId());
        $writer->writeObjectValue('transactionPeriod', $this->getTransactionPeriod());
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
     * Sets the listingId property value. This field provides the unique identifier for the listing associated with the feedback entry. Conditionally returned based on the authorization flow and user context. See <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.orderLineItemSummary">orderLineItemSummary</a> for details on when this field is included.
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
     * Sets the listingTitle property value. This field contains the title of the listing. Conditionally returned based on the authorization flow and user context. See <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.orderLineItemSummary">orderLineItemSummary</a> for details on when this field is included.
     * @param string|null $value Value to set for the listingTitle property.
    */
    public function setListingTitle(?string $value): void {
        $this->listingTitle = $value;
    }

    /**
     * Sets the orderLineItemAttributes property value. This array describes order line attributes including names and values of a transaction.
     * @param array<OrderLineItemAttribute>|null $value Value to set for the orderLineItemAttributes property.
    */
    public function setOrderLineItemAttributes(?array $value): void {
        $this->orderLineItemAttributes = $value;
    }

    /**
     * Sets the orderLineItemId property value. The unique identifier of the line item for this feedback. Conditionally returned based on the authorization flow and user context. See <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.orderLineItemSummary">orderLineItemSummary</a> for details on when this field is included.
     * @param string|null $value Value to set for the orderLineItemId property.
    */
    public function setOrderLineItemId(?string $value): void {
        $this->orderLineItemId = $value;
    }

    /**
     * Sets the transactionPeriod property value. This type specifies the amount of time elapsed and the threshold associated with a transaction.
     * @param TransactionPeriod|null $value Value to set for the transactionPeriod property.
    */
    public function setTransactionPeriod(?TransactionPeriod $value): void {
        $this->transactionPeriod = $value;
    }

}
