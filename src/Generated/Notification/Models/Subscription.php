<?php

namespace EBay\Communication\Generated\Notification\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that describes the subscription.
*/
class Subscription implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $creationDate The creation date for this subscription.
    */
    private ?string $creationDate = null;
    
    /**
     * @var string|null $destinationId The unique identifier for the destination associated with this subscription.
    */
    private ?string $destinationId = null;
    
    /**
     * @var string|null $filterId The unique identifier for the filter associated with this subscription.
    */
    private ?string $filterId = null;
    
    /**
     * @var SubscriptionPayloadDetail|null $payload A type that describes the details of the subscription payload.
    */
    private ?SubscriptionPayloadDetail $payload = null;
    
    /**
     * @var string|null $status The status of this subscription. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:SubscriptionStatusEnum'>eBay API documentation</a>
    */
    private ?string $status = null;
    
    /**
     * @var string|null $subscriptionId The unique identifier for the subscription.
    */
    private ?string $subscriptionId = null;
    
    /**
     * @var string|null $topicId The unique identifier for the topic associated with this subscription.
    */
    private ?string $topicId = null;
    
    /**
     * Instantiates a new Subscription and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Subscription
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Subscription {
        return new Subscription();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the creationDate property value. The creation date for this subscription.
     * @return string|null
    */
    public function getCreationDate(): ?string {
        return $this->creationDate;
    }

    /**
     * Gets the destinationId property value. The unique identifier for the destination associated with this subscription.
     * @return string|null
    */
    public function getDestinationId(): ?string {
        return $this->destinationId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'creationDate' => fn(ParseNode $n) => $o->setCreationDate($n->getStringValue()),
            'destinationId' => fn(ParseNode $n) => $o->setDestinationId($n->getStringValue()),
            'filterId' => fn(ParseNode $n) => $o->setFilterId($n->getStringValue()),
            'payload' => fn(ParseNode $n) => $o->setPayload($n->getObjectValue([SubscriptionPayloadDetail::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'topicId' => fn(ParseNode $n) => $o->setTopicId($n->getStringValue()),
        ];
    }

    /**
     * Gets the filterId property value. The unique identifier for the filter associated with this subscription.
     * @return string|null
    */
    public function getFilterId(): ?string {
        return $this->filterId;
    }

    /**
     * Gets the payload property value. A type that describes the details of the subscription payload.
     * @return SubscriptionPayloadDetail|null
    */
    public function getPayload(): ?SubscriptionPayloadDetail {
        return $this->payload;
    }

    /**
     * Gets the status property value. The status of this subscription. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:SubscriptionStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the subscriptionId property value. The unique identifier for the subscription.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Gets the topicId property value. The unique identifier for the topic associated with this subscription.
     * @return string|null
    */
    public function getTopicId(): ?string {
        return $this->topicId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('creationDate', $this->getCreationDate());
        $writer->writeStringValue('destinationId', $this->getDestinationId());
        $writer->writeStringValue('filterId', $this->getFilterId());
        $writer->writeObjectValue('payload', $this->getPayload());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('topicId', $this->getTopicId());
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
     * Sets the creationDate property value. The creation date for this subscription.
     * @param string|null $value Value to set for the creationDate property.
    */
    public function setCreationDate(?string $value): void {
        $this->creationDate = $value;
    }

    /**
     * Sets the destinationId property value. The unique identifier for the destination associated with this subscription.
     * @param string|null $value Value to set for the destinationId property.
    */
    public function setDestinationId(?string $value): void {
        $this->destinationId = $value;
    }

    /**
     * Sets the filterId property value. The unique identifier for the filter associated with this subscription.
     * @param string|null $value Value to set for the filterId property.
    */
    public function setFilterId(?string $value): void {
        $this->filterId = $value;
    }

    /**
     * Sets the payload property value. A type that describes the details of the subscription payload.
     * @param SubscriptionPayloadDetail|null $value Value to set for the payload property.
    */
    public function setPayload(?SubscriptionPayloadDetail $value): void {
        $this->payload = $value;
    }

    /**
     * Sets the status property value. The status of this subscription. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:SubscriptionStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the subscriptionId property value. The unique identifier for the subscription.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->subscriptionId = $value;
    }

    /**
     * Sets the topicId property value. The unique identifier for the topic associated with this subscription.
     * @param string|null $value Value to set for the topicId property.
    */
    public function setTopicId(?string $value): void {
        $this->topicId = $value;
    }

}
