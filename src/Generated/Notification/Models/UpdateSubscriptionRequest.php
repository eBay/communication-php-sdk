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

namespace EBay\Communication\Generated\Notification\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that describes the details of the update subscription request.
*/
class UpdateSubscriptionRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $destinationId The unique identifier of the destination endpoint that will receive notifications associated with this subscription. Use <a href="/develop/api/sell/notification_api#sell-notification_api-destination-getdestinations">getDestinations</a> to retrieve destination IDs.
    */
    private ?string $destinationId = null;
    
    /**
     * @var SubscriptionPayloadDetail|null $payload The payload associated with this subscription.
    */
    private ?SubscriptionPayloadDetail $payload = null;
    
    /**
     * @var SubscriptionStatusEnum|null $status Set the status of the subscription being updated to <code>ENABLED</code> or <code>DISABLED</code>.
    */
    private ?SubscriptionStatusEnum $status = null;
    
    /**
     * Instantiates a new UpdateSubscriptionRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateSubscriptionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateSubscriptionRequest {
        return new UpdateSubscriptionRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the destinationId property value. The unique identifier of the destination endpoint that will receive notifications associated with this subscription. Use <a href="/develop/api/sell/notification_api#sell-notification_api-destination-getdestinations">getDestinations</a> to retrieve destination IDs.
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
            'destinationId' => fn(ParseNode $n) => $o->setDestinationId($n->getStringValue()),
            'payload' => fn(ParseNode $n) => $o->setPayload($n->getObjectValue([SubscriptionPayloadDetail::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SubscriptionStatusEnum::class)),
        ];
    }

    /**
     * Gets the payload property value. The payload associated with this subscription.
     * @return SubscriptionPayloadDetail|null
    */
    public function getPayload(): ?SubscriptionPayloadDetail {
        return $this->payload;
    }

    /**
     * Gets the status property value. Set the status of the subscription being updated to <code>ENABLED</code> or <code>DISABLED</code>.
     * @return SubscriptionStatusEnum|null
    */
    public function getStatus(): ?SubscriptionStatusEnum {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('destinationId', $this->getDestinationId());
        $writer->writeObjectValue('payload', $this->getPayload());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the destinationId property value. The unique identifier of the destination endpoint that will receive notifications associated with this subscription. Use <a href="/develop/api/sell/notification_api#sell-notification_api-destination-getdestinations">getDestinations</a> to retrieve destination IDs.
     * @param string|null $value Value to set for the destinationId property.
    */
    public function setDestinationId(?string $value): void {
        $this->destinationId = $value;
    }

    /**
     * Sets the payload property value. The payload associated with this subscription.
     * @param SubscriptionPayloadDetail|null $value Value to set for the payload property.
    */
    public function setPayload(?SubscriptionPayloadDetail $value): void {
        $this->payload = $value;
    }

    /**
     * Sets the status property value. Set the status of the subscription being updated to <code>ENABLED</code> or <code>DISABLED</code>.
     * @param SubscriptionStatusEnum|null $value Value to set for the status property.
    */
    public function setStatus(?SubscriptionStatusEnum $value): void {
        $this->status = $value;
    }

}
