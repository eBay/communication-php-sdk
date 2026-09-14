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
 * This type defines the response payload of the <strong>getConversation</strong> method.
*/
class GetMessagesByConversationIdResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $conversationStatus The current status of the conversation, such as <code>ACTIVE</code> or <code>ARCHIVE</code>. 
    */
    private ?string $conversationStatus = null;
    
    /**
     * @var string|null $conversationTitle The title of the conversation.
    */
    private ?string $conversationTitle = null;
    
    /**
     * @var string|null $conversationType The type of the conversation, such as <code>FROM_EBAY</code> or <code>FROM_MEMBERS</code>.
    */
    private ?string $conversationType = null;
    
    /**
     * @var string|null $href The URI to the current page of results.
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit The value of the <strong>limit</strong> parameter submitted in the request.
    */
    private ?int $limit = null;
    
    /**
     * @var array<MessageDetail>|null $messages This array returns a list of messages from the specified conversation.
    */
    private ?array $messages = null;
    
    /**
     * @var string|null $next The URI for the next page of results.<br><br>This value is only returned if there is an additional page of results in the result set.
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset The value of the <strong>offset</strong> parameter submitted in the request.
    */
    private ?int $offset = null;
    
    /**
     * @var string|null $prev The URI for the previous page of results.<br><br>This value is only returned if there is a previous page of results in the result set.
    */
    private ?string $prev = null;
    
    /**
     * @var int|null $total The total number of entries returned in the result set.
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new GetMessagesByConversationIdResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetMessagesByConversationIdResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetMessagesByConversationIdResponse {
        return new GetMessagesByConversationIdResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the conversationStatus property value. The current status of the conversation, such as <code>ACTIVE</code> or <code>ARCHIVE</code>. 
     * @return string|null
    */
    public function getConversationStatus(): ?string {
        return $this->conversationStatus;
    }

    /**
     * Gets the conversationTitle property value. The title of the conversation.
     * @return string|null
    */
    public function getConversationTitle(): ?string {
        return $this->conversationTitle;
    }

    /**
     * Gets the conversationType property value. The type of the conversation, such as <code>FROM_EBAY</code> or <code>FROM_MEMBERS</code>.
     * @return string|null
    */
    public function getConversationType(): ?string {
        return $this->conversationType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conversationStatus' => fn(ParseNode $n) => $o->setConversationStatus($n->getStringValue()),
            'conversationTitle' => fn(ParseNode $n) => $o->setConversationTitle($n->getStringValue()),
            'conversationType' => fn(ParseNode $n) => $o->setConversationType($n->getStringValue()),
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'messages' => fn(ParseNode $n) => $o->setMessages($n->getCollectionOfObjectValues([MessageDetail::class, 'createFromDiscriminatorValue'])),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. The URI to the current page of results.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. The value of the <strong>limit</strong> parameter submitted in the request.
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the messages property value. This array returns a list of messages from the specified conversation.
     * @return array<MessageDetail>|null
    */
    public function getMessages(): ?array {
        return $this->messages;
    }

    /**
     * Gets the next property value. The URI for the next page of results.<br><br>This value is only returned if there is an additional page of results in the result set.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. The value of the <strong>offset</strong> parameter submitted in the request.
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the prev property value. The URI for the previous page of results.<br><br>This value is only returned if there is a previous page of results in the result set.
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the total property value. The total number of entries returned in the result set.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('conversationStatus', $this->getConversationStatus());
        $writer->writeStringValue('conversationTitle', $this->getConversationTitle());
        $writer->writeStringValue('conversationType', $this->getConversationType());
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeCollectionOfObjectValues('messages', $this->getMessages());
        $writer->writeStringValue('next', $this->getNext());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeStringValue('prev', $this->getPrev());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the conversationStatus property value. The current status of the conversation, such as <code>ACTIVE</code> or <code>ARCHIVE</code>. 
     * @param string|null $value Value to set for the conversationStatus property.
    */
    public function setConversationStatus(?string $value): void {
        $this->conversationStatus = $value;
    }

    /**
     * Sets the conversationTitle property value. The title of the conversation.
     * @param string|null $value Value to set for the conversationTitle property.
    */
    public function setConversationTitle(?string $value): void {
        $this->conversationTitle = $value;
    }

    /**
     * Sets the conversationType property value. The type of the conversation, such as <code>FROM_EBAY</code> or <code>FROM_MEMBERS</code>.
     * @param string|null $value Value to set for the conversationType property.
    */
    public function setConversationType(?string $value): void {
        $this->conversationType = $value;
    }

    /**
     * Sets the href property value. The URI to the current page of results.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. The value of the <strong>limit</strong> parameter submitted in the request.
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the messages property value. This array returns a list of messages from the specified conversation.
     * @param array<MessageDetail>|null $value Value to set for the messages property.
    */
    public function setMessages(?array $value): void {
        $this->messages = $value;
    }

    /**
     * Sets the next property value. The URI for the next page of results.<br><br>This value is only returned if there is an additional page of results in the result set.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. The value of the <strong>offset</strong> parameter submitted in the request.
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the prev property value. The URI for the previous page of results.<br><br>This value is only returned if there is a previous page of results in the result set.
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the total property value. The total number of entries returned in the result set.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
