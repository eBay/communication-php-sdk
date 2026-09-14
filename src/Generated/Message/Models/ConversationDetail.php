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
 * This type defines the details of a conversation, such as its ID, status, type, and latest message.
*/
class ConversationDetail implements AdditionalDataHolder, Parsable 
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
     * @var string|null $conversationStatus This value indicates the current status of the conversation, such as <code>ACTIVE</code> or <code>ARCHIVED</code>.
    */
    private ?string $conversationStatus = null;
    
    /**
     * @var string|null $conversationTitle This value indicates the title of the conversation.
    */
    private ?string $conversationTitle = null;
    
    /**
     * @var string|null $conversationType This value indicates the type of the conversation, such as <code>FROM_EBAY</code> or <code>FROM_MEMBERS</code>.
    */
    private ?string $conversationType = null;
    
    /**
     * @var string|null $createdDate This value indicates the date the conversation was created in ISO 8601 format.
    */
    private ?string $createdDate = null;
    
    /**
     * @var MessageDetail|null $latestMessage This container returns the latest message in the conversation and its details.
    */
    private ?MessageDetail $latestMessage = null;
    
    /**
     * @var string|null $referenceId This value indicates the reference ID associated with the corresponding <strong>referenceType</strong> value.<br><br>In the case of a <code>LISTING</code> <strong>referenceType</strong>, this value will be the item ID value of the associated listing.
    */
    private ?string $referenceId = null;
    
    /**
     * @var string|null $referenceType This value indicates the reference type, if applicable, associated with the conversation.<br><br>The reference type is used to specify what the conversation is in reference to. For example, a value of <code>LISTING</code> specifies that the conversation is associated with a specific listing. The item ID associated with this listing will then be returned in the <strong>referenceId</strong> field.<br><br>Currently, only the <code>LISTING</code> reference type is supported.
    */
    private ?string $referenceType = null;
    
    /**
     * @var int|null $unreadCount This value indicates the number of unread messages in the conversation.
    */
    private ?int $unreadCount = null;
    
    /**
     * Instantiates a new ConversationDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConversationDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConversationDetail {
        return new ConversationDetail();
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
     * Gets the conversationStatus property value. This value indicates the current status of the conversation, such as <code>ACTIVE</code> or <code>ARCHIVED</code>.
     * @return string|null
    */
    public function getConversationStatus(): ?string {
        return $this->conversationStatus;
    }

    /**
     * Gets the conversationTitle property value. This value indicates the title of the conversation.
     * @return string|null
    */
    public function getConversationTitle(): ?string {
        return $this->conversationTitle;
    }

    /**
     * Gets the conversationType property value. This value indicates the type of the conversation, such as <code>FROM_EBAY</code> or <code>FROM_MEMBERS</code>.
     * @return string|null
    */
    public function getConversationType(): ?string {
        return $this->conversationType;
    }

    /**
     * Gets the createdDate property value. This value indicates the date the conversation was created in ISO 8601 format.
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
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'conversationStatus' => fn(ParseNode $n) => $o->setConversationStatus($n->getStringValue()),
            'conversationTitle' => fn(ParseNode $n) => $o->setConversationTitle($n->getStringValue()),
            'conversationType' => fn(ParseNode $n) => $o->setConversationType($n->getStringValue()),
            'createdDate' => fn(ParseNode $n) => $o->setCreatedDate($n->getStringValue()),
            'latestMessage' => fn(ParseNode $n) => $o->setLatestMessage($n->getObjectValue([MessageDetail::class, 'createFromDiscriminatorValue'])),
            'referenceId' => fn(ParseNode $n) => $o->setReferenceId($n->getStringValue()),
            'referenceType' => fn(ParseNode $n) => $o->setReferenceType($n->getStringValue()),
            'unreadCount' => fn(ParseNode $n) => $o->setUnreadCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the latestMessage property value. This container returns the latest message in the conversation and its details.
     * @return MessageDetail|null
    */
    public function getLatestMessage(): ?MessageDetail {
        return $this->latestMessage;
    }

    /**
     * Gets the referenceId property value. This value indicates the reference ID associated with the corresponding <strong>referenceType</strong> value.<br><br>In the case of a <code>LISTING</code> <strong>referenceType</strong>, this value will be the item ID value of the associated listing.
     * @return string|null
    */
    public function getReferenceId(): ?string {
        return $this->referenceId;
    }

    /**
     * Gets the referenceType property value. This value indicates the reference type, if applicable, associated with the conversation.<br><br>The reference type is used to specify what the conversation is in reference to. For example, a value of <code>LISTING</code> specifies that the conversation is associated with a specific listing. The item ID associated with this listing will then be returned in the <strong>referenceId</strong> field.<br><br>Currently, only the <code>LISTING</code> reference type is supported.
     * @return string|null
    */
    public function getReferenceType(): ?string {
        return $this->referenceType;
    }

    /**
     * Gets the unreadCount property value. This value indicates the number of unread messages in the conversation.
     * @return int|null
    */
    public function getUnreadCount(): ?int {
        return $this->unreadCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeStringValue('conversationStatus', $this->getConversationStatus());
        $writer->writeStringValue('conversationTitle', $this->getConversationTitle());
        $writer->writeStringValue('conversationType', $this->getConversationType());
        $writer->writeStringValue('createdDate', $this->getCreatedDate());
        $writer->writeObjectValue('latestMessage', $this->getLatestMessage());
        $writer->writeStringValue('referenceId', $this->getReferenceId());
        $writer->writeStringValue('referenceType', $this->getReferenceType());
        $writer->writeIntegerValue('unreadCount', $this->getUnreadCount());
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
     * Sets the conversationStatus property value. This value indicates the current status of the conversation, such as <code>ACTIVE</code> or <code>ARCHIVED</code>.
     * @param string|null $value Value to set for the conversationStatus property.
    */
    public function setConversationStatus(?string $value): void {
        $this->conversationStatus = $value;
    }

    /**
     * Sets the conversationTitle property value. This value indicates the title of the conversation.
     * @param string|null $value Value to set for the conversationTitle property.
    */
    public function setConversationTitle(?string $value): void {
        $this->conversationTitle = $value;
    }

    /**
     * Sets the conversationType property value. This value indicates the type of the conversation, such as <code>FROM_EBAY</code> or <code>FROM_MEMBERS</code>.
     * @param string|null $value Value to set for the conversationType property.
    */
    public function setConversationType(?string $value): void {
        $this->conversationType = $value;
    }

    /**
     * Sets the createdDate property value. This value indicates the date the conversation was created in ISO 8601 format.
     * @param string|null $value Value to set for the createdDate property.
    */
    public function setCreatedDate(?string $value): void {
        $this->createdDate = $value;
    }

    /**
     * Sets the latestMessage property value. This container returns the latest message in the conversation and its details.
     * @param MessageDetail|null $value Value to set for the latestMessage property.
    */
    public function setLatestMessage(?MessageDetail $value): void {
        $this->latestMessage = $value;
    }

    /**
     * Sets the referenceId property value. This value indicates the reference ID associated with the corresponding <strong>referenceType</strong> value.<br><br>In the case of a <code>LISTING</code> <strong>referenceType</strong>, this value will be the item ID value of the associated listing.
     * @param string|null $value Value to set for the referenceId property.
    */
    public function setReferenceId(?string $value): void {
        $this->referenceId = $value;
    }

    /**
     * Sets the referenceType property value. This value indicates the reference type, if applicable, associated with the conversation.<br><br>The reference type is used to specify what the conversation is in reference to. For example, a value of <code>LISTING</code> specifies that the conversation is associated with a specific listing. The item ID associated with this listing will then be returned in the <strong>referenceId</strong> field.<br><br>Currently, only the <code>LISTING</code> reference type is supported.
     * @param string|null $value Value to set for the referenceType property.
    */
    public function setReferenceType(?string $value): void {
        $this->referenceType = $value;
    }

    /**
     * Sets the unreadCount property value. This value indicates the number of unread messages in the conversation.
     * @param int|null $value Value to set for the unreadCount property.
    */
    public function setUnreadCount(?int $value): void {
        $this->unreadCount = $value;
    }

}
