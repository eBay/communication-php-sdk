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
 * This type defines the message details for a conversation.
*/
class MessageDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $createdDate The date,  in ISO 8601 format, the message was received.
    */
    private ?string $createdDate = null;
    
    /**
     * @var string|null $messageBody The message text.
    */
    private ?string $messageBody = null;
    
    /**
     * @var string|null $messageId The unique identifier of the message.
    */
    private ?string $messageId = null;
    
    /**
     * @var array<MessageMedia>|null $messageMedia This array returns a list, if applicable, of media attached to the message.
    */
    private ?array $messageMedia = null;
    
    /**
     * @var bool|null $readStatus This boolean indicates if the message has been viewed by the recipient.<br><br>If this boolean is returned as <code>true</code>, the message has been read. If this boolean is returned as <code>false</code>, the message has not been read.
    */
    private ?bool $readStatus = null;
    
    /**
     * @var string|null $recipientUsername The eBay username of the message recipient.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
    */
    private ?string $recipientUsername = null;
    
    /**
     * @var string|null $senderUsername The eBay username of the message sender.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
    */
    private ?string $senderUsername = null;
    
    /**
     * @var string|null $subject The subject line of the message.
    */
    private ?string $subject = null;
    
    /**
     * Instantiates a new MessageDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessageDetail {
        return new MessageDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdDate property value. The date,  in ISO 8601 format, the message was received.
     * @return string|null
    */
    public function getCreatedDate(): ?string {
        return $this->createdDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdDate' => fn(ParseNode $n) => $o->setCreatedDate($n->getStringValue()),
            'messageBody' => fn(ParseNode $n) => $o->setMessageBody($n->getStringValue()),
            'messageId' => fn(ParseNode $n) => $o->setMessageId($n->getStringValue()),
            'messageMedia' => fn(ParseNode $n) => $o->setMessageMedia($n->getCollectionOfObjectValues([MessageMedia::class, 'createFromDiscriminatorValue'])),
            'readStatus' => fn(ParseNode $n) => $o->setReadStatus($n->getBooleanValue()),
            'recipientUsername' => fn(ParseNode $n) => $o->setRecipientUsername($n->getStringValue()),
            'senderUsername' => fn(ParseNode $n) => $o->setSenderUsername($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ];
    }

    /**
     * Gets the messageBody property value. The message text.
     * @return string|null
    */
    public function getMessageBody(): ?string {
        return $this->messageBody;
    }

    /**
     * Gets the messageId property value. The unique identifier of the message.
     * @return string|null
    */
    public function getMessageId(): ?string {
        return $this->messageId;
    }

    /**
     * Gets the messageMedia property value. This array returns a list, if applicable, of media attached to the message.
     * @return array<MessageMedia>|null
    */
    public function getMessageMedia(): ?array {
        return $this->messageMedia;
    }

    /**
     * Gets the readStatus property value. This boolean indicates if the message has been viewed by the recipient.<br><br>If this boolean is returned as <code>true</code>, the message has been read. If this boolean is returned as <code>false</code>, the message has not been read.
     * @return bool|null
    */
    public function getReadStatus(): ?bool {
        return $this->readStatus;
    }

    /**
     * Gets the recipientUsername property value. The eBay username of the message recipient.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     * @return string|null
    */
    public function getRecipientUsername(): ?string {
        return $this->recipientUsername;
    }

    /**
     * Gets the senderUsername property value. The eBay username of the message sender.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     * @return string|null
    */
    public function getSenderUsername(): ?string {
        return $this->senderUsername;
    }

    /**
     * Gets the subject property value. The subject line of the message.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('createdDate', $this->getCreatedDate());
        $writer->writeStringValue('messageBody', $this->getMessageBody());
        $writer->writeStringValue('messageId', $this->getMessageId());
        $writer->writeCollectionOfObjectValues('messageMedia', $this->getMessageMedia());
        $writer->writeBooleanValue('readStatus', $this->getReadStatus());
        $writer->writeStringValue('recipientUsername', $this->getRecipientUsername());
        $writer->writeStringValue('senderUsername', $this->getSenderUsername());
        $writer->writeStringValue('subject', $this->getSubject());
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
     * Sets the createdDate property value. The date,  in ISO 8601 format, the message was received.
     * @param string|null $value Value to set for the createdDate property.
    */
    public function setCreatedDate(?string $value): void {
        $this->createdDate = $value;
    }

    /**
     * Sets the messageBody property value. The message text.
     * @param string|null $value Value to set for the messageBody property.
    */
    public function setMessageBody(?string $value): void {
        $this->messageBody = $value;
    }

    /**
     * Sets the messageId property value. The unique identifier of the message.
     * @param string|null $value Value to set for the messageId property.
    */
    public function setMessageId(?string $value): void {
        $this->messageId = $value;
    }

    /**
     * Sets the messageMedia property value. This array returns a list, if applicable, of media attached to the message.
     * @param array<MessageMedia>|null $value Value to set for the messageMedia property.
    */
    public function setMessageMedia(?array $value): void {
        $this->messageMedia = $value;
    }

    /**
     * Sets the readStatus property value. This boolean indicates if the message has been viewed by the recipient.<br><br>If this boolean is returned as <code>true</code>, the message has been read. If this boolean is returned as <code>false</code>, the message has not been read.
     * @param bool|null $value Value to set for the readStatus property.
    */
    public function setReadStatus(?bool $value): void {
        $this->readStatus = $value;
    }

    /**
     * Sets the recipientUsername property value. The eBay username of the message recipient.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     * @param string|null $value Value to set for the recipientUsername property.
    */
    public function setRecipientUsername(?string $value): void {
        $this->recipientUsername = $value;
    }

    /**
     * Sets the senderUsername property value. The eBay username of the message sender.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     * @param string|null $value Value to set for the senderUsername property.
    */
    public function setSenderUsername(?string $value): void {
        $this->senderUsername = $value;
    }

    /**
     * Sets the subject property value. The subject line of the message.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->subject = $value;
    }

}
