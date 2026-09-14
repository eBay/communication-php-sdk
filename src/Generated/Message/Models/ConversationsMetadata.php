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

namespace EBay\Communication\Generated\Message\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the metadata, such as successes and failures, associated with a bulk conversation status update.
*/
class ConversationsMetadata implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $totalConversationsCount The total number of conversations being updated.
    */
    private ?int $totalConversationsCount = null;
    
    /**
     * @var int|null $updateFailureCount The number of conversations in which the specified update failed.
    */
    private ?int $updateFailureCount = null;
    
    /**
     * @var int|null $updateSuccessCount The number of conversations in which the specified update succeeded.
    */
    private ?int $updateSuccessCount = null;
    
    /**
     * Instantiates a new ConversationsMetadata and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConversationsMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConversationsMetadata {
        return new ConversationsMetadata();
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
            'totalConversationsCount' => fn(ParseNode $n) => $o->setTotalConversationsCount($n->getIntegerValue()),
            'updateFailureCount' => fn(ParseNode $n) => $o->setUpdateFailureCount($n->getIntegerValue()),
            'updateSuccessCount' => fn(ParseNode $n) => $o->setUpdateSuccessCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the totalConversationsCount property value. The total number of conversations being updated.
     * @return int|null
    */
    public function getTotalConversationsCount(): ?int {
        return $this->totalConversationsCount;
    }

    /**
     * Gets the updateFailureCount property value. The number of conversations in which the specified update failed.
     * @return int|null
    */
    public function getUpdateFailureCount(): ?int {
        return $this->updateFailureCount;
    }

    /**
     * Gets the updateSuccessCount property value. The number of conversations in which the specified update succeeded.
     * @return int|null
    */
    public function getUpdateSuccessCount(): ?int {
        return $this->updateSuccessCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('totalConversationsCount', $this->getTotalConversationsCount());
        $writer->writeIntegerValue('updateFailureCount', $this->getUpdateFailureCount());
        $writer->writeIntegerValue('updateSuccessCount', $this->getUpdateSuccessCount());
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
     * Sets the totalConversationsCount property value. The total number of conversations being updated.
     * @param int|null $value Value to set for the totalConversationsCount property.
    */
    public function setTotalConversationsCount(?int $value): void {
        $this->totalConversationsCount = $value;
    }

    /**
     * Sets the updateFailureCount property value. The number of conversations in which the specified update failed.
     * @param int|null $value Value to set for the updateFailureCount property.
    */
    public function setUpdateFailureCount(?int $value): void {
        $this->updateFailureCount = $value;
    }

    /**
     * Sets the updateSuccessCount property value. The number of conversations in which the specified update succeeded.
     * @param int|null $value Value to set for the updateSuccessCount property.
    */
    public function setUpdateSuccessCount(?int $value): void {
        $this->updateSuccessCount = $value;
    }

}
