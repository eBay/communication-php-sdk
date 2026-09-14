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
 * This type defines filter details for the specified subscription filter.
*/
class SubscriptionFilter implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $creationDate The creation date for this subscription filter.
    */
    private ?string $creationDate = null;
    
    /**
     * @var string|null $filterId The unique identifier for this subscription filter.
    */
    private ?string $filterId = null;
    
    /**
     * @var SubscriptionFilter_filterSchema|null $filterSchema The content of this subscription filter as a valid <a href="https://json-schema.org " target="_blank">JSON Schema Core document</a> (version 2020-12 or later). The <strong>filterSchema</strong> provided must describe the subscription's notification payload such that it supplies valid criteria to filter the subscription's notifications.
    */
    private ?SubscriptionFilter_filterSchema $filterSchema = null;
    
    /**
     * @var SubscriptionFilterStatus|null $filterStatus The status of this subscription filter.
    */
    private ?SubscriptionFilterStatus $filterStatus = null;
    
    /**
     * @var string|null $subscriptionId The unique identifier for the subscription.
    */
    private ?string $subscriptionId = null;
    
    /**
     * Instantiates a new SubscriptionFilter and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionFilter {
        return new SubscriptionFilter();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the creationDate property value. The creation date for this subscription filter.
     * @return string|null
    */
    public function getCreationDate(): ?string {
        return $this->creationDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'creationDate' => fn(ParseNode $n) => $o->setCreationDate($n->getStringValue()),
            'filterId' => fn(ParseNode $n) => $o->setFilterId($n->getStringValue()),
            'filterSchema' => fn(ParseNode $n) => $o->setFilterSchema($n->getObjectValue([SubscriptionFilter_filterSchema::class, 'createFromDiscriminatorValue'])),
            'filterStatus' => fn(ParseNode $n) => $o->setFilterStatus($n->getEnumValue(SubscriptionFilterStatus::class)),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the filterId property value. The unique identifier for this subscription filter.
     * @return string|null
    */
    public function getFilterId(): ?string {
        return $this->filterId;
    }

    /**
     * Gets the filterSchema property value. The content of this subscription filter as a valid <a href="https://json-schema.org " target="_blank">JSON Schema Core document</a> (version 2020-12 or later). The <strong>filterSchema</strong> provided must describe the subscription's notification payload such that it supplies valid criteria to filter the subscription's notifications.
     * @return SubscriptionFilter_filterSchema|null
    */
    public function getFilterSchema(): ?SubscriptionFilter_filterSchema {
        return $this->filterSchema;
    }

    /**
     * Gets the filterStatus property value. The status of this subscription filter.
     * @return SubscriptionFilterStatus|null
    */
    public function getFilterStatus(): ?SubscriptionFilterStatus {
        return $this->filterStatus;
    }

    /**
     * Gets the subscriptionId property value. The unique identifier for the subscription.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('creationDate', $this->getCreationDate());
        $writer->writeStringValue('filterId', $this->getFilterId());
        $writer->writeObjectValue('filterSchema', $this->getFilterSchema());
        $writer->writeEnumValue('filterStatus', $this->getFilterStatus());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
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
     * Sets the creationDate property value. The creation date for this subscription filter.
     * @param string|null $value Value to set for the creationDate property.
    */
    public function setCreationDate(?string $value): void {
        $this->creationDate = $value;
    }

    /**
     * Sets the filterId property value. The unique identifier for this subscription filter.
     * @param string|null $value Value to set for the filterId property.
    */
    public function setFilterId(?string $value): void {
        $this->filterId = $value;
    }

    /**
     * Sets the filterSchema property value. The content of this subscription filter as a valid <a href="https://json-schema.org " target="_blank">JSON Schema Core document</a> (version 2020-12 or later). The <strong>filterSchema</strong> provided must describe the subscription's notification payload such that it supplies valid criteria to filter the subscription's notifications.
     * @param SubscriptionFilter_filterSchema|null $value Value to set for the filterSchema property.
    */
    public function setFilterSchema(?SubscriptionFilter_filterSchema $value): void {
        $this->filterSchema = $value;
    }

    /**
     * Sets the filterStatus property value. The status of this subscription filter.
     * @param SubscriptionFilterStatus|null $value Value to set for the filterStatus property.
    */
    public function setFilterStatus(?SubscriptionFilterStatus $value): void {
        $this->filterStatus = $value;
    }

    /**
     * Sets the subscriptionId property value. The unique identifier for the subscription.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->subscriptionId = $value;
    }

}
