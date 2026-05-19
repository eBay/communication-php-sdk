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
 * This type provides the updated information for a conversation that has been modified.
*/
class ConversationsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $conversationId The unique identifier of the conversation.
    */
    private ?string $conversationId = null;
    
    /**
     * @var string|null $updateStatus The update status of the conversation, such as <code>SUCCESS</code> or <code>FAILURE</code>.
    */
    private ?string $updateStatus = null;
    
    /**
     * Instantiates a new ConversationsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConversationsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConversationsResponse {
        return new ConversationsResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the conversationId property value. The unique identifier of the conversation.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->conversationId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'updateStatus' => fn(ParseNode $n) => $o->setUpdateStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the updateStatus property value. The update status of the conversation, such as <code>SUCCESS</code> or <code>FAILURE</code>.
     * @return string|null
    */
    public function getUpdateStatus(): ?string {
        return $this->updateStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeStringValue('updateStatus', $this->getUpdateStatus());
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
     * Sets the conversationId property value. The unique identifier of the conversation.
     * @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the updateStatus property value. The update status of the conversation, such as <code>SUCCESS</code> or <code>FAILURE</code>.
     * @param string|null $value Value to set for the updateStatus property.
    */
    public function setUpdateStatus(?string $value): void {
        $this->updateStatus = $value;
    }

}
