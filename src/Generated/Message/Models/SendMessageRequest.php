<?php

namespace EBay\Communication\Generated\Message\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the request payload of the <b>sendMessage</b> method.
*/
class SendMessageRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $conversationId This field specifies the unique identifier of the conversation in which to send the message.<br><br>Use the <a href="/api-docs/commerce/message/resources/conversation/methods/getConversations" target="_blank">getConversations</a> method to retrieve conversation ID values.<br><br>This field is required if sending a message in an existing conversation.
    */
    private ?string $conversationId = null;
    
    /**
     * @var bool|null $emailCopyToSender This boolean indicates whether a copy of the message should be emailed to the sender.<br><br>If this boolean is input as <code>true</code>, a copy of the message will be emailed to the sender.
    */
    private ?bool $emailCopyToSender = null;
    
    /**
     * @var array<MessageMedia>|null $messageMedia This array lists the individual forms of media, if any, to be attached to the message.<br><br>Up to five individual forms of media may be be sent per message. If more than five are specified in this array, an error will occur and the call will fail.
    */
    private ?array $messageMedia = null;
    
    /**
     * @var string|null $messageText The text of the message.<br><br><b>Max length:</b> 2000 characters
    */
    private ?string $messageText = null;
    
    /**
     * @var string|null $otherPartyUsername This field specifies the eBay username of the entity for which to send the message.<br><br>This field is required if starting a new conversation with another eBay user.
    */
    private ?string $otherPartyUsername = null;
    
    /**
     * @var Reference|null $reference This type specifies the reference type and associated reference ID associated with a message.
    */
    private ?Reference $reference = null;
    
    /**
     * Instantiates a new SendMessageRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendMessageRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendMessageRequest {
        return new SendMessageRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the conversationId property value. This field specifies the unique identifier of the conversation in which to send the message.<br><br>Use the <a href="/api-docs/commerce/message/resources/conversation/methods/getConversations" target="_blank">getConversations</a> method to retrieve conversation ID values.<br><br>This field is required if sending a message in an existing conversation.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->conversationId;
    }

    /**
     * Gets the emailCopyToSender property value. This boolean indicates whether a copy of the message should be emailed to the sender.<br><br>If this boolean is input as <code>true</code>, a copy of the message will be emailed to the sender.
     * @return bool|null
    */
    public function getEmailCopyToSender(): ?bool {
        return $this->emailCopyToSender;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'emailCopyToSender' => fn(ParseNode $n) => $o->setEmailCopyToSender($n->getBooleanValue()),
            'messageMedia' => fn(ParseNode $n) => $o->setMessageMedia($n->getCollectionOfObjectValues([MessageMedia::class, 'createFromDiscriminatorValue'])),
            'messageText' => fn(ParseNode $n) => $o->setMessageText($n->getStringValue()),
            'otherPartyUsername' => fn(ParseNode $n) => $o->setOtherPartyUsername($n->getStringValue()),
            'reference' => fn(ParseNode $n) => $o->setReference($n->getObjectValue([Reference::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the messageMedia property value. This array lists the individual forms of media, if any, to be attached to the message.<br><br>Up to five individual forms of media may be be sent per message. If more than five are specified in this array, an error will occur and the call will fail.
     * @return array<MessageMedia>|null
    */
    public function getMessageMedia(): ?array {
        return $this->messageMedia;
    }

    /**
     * Gets the messageText property value. The text of the message.<br><br><b>Max length:</b> 2000 characters
     * @return string|null
    */
    public function getMessageText(): ?string {
        return $this->messageText;
    }

    /**
     * Gets the otherPartyUsername property value. This field specifies the eBay username of the entity for which to send the message.<br><br>This field is required if starting a new conversation with another eBay user.
     * @return string|null
    */
    public function getOtherPartyUsername(): ?string {
        return $this->otherPartyUsername;
    }

    /**
     * Gets the reference property value. This type specifies the reference type and associated reference ID associated with a message.
     * @return Reference|null
    */
    public function getReference(): ?Reference {
        return $this->reference;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeBooleanValue('emailCopyToSender', $this->getEmailCopyToSender());
        $writer->writeCollectionOfObjectValues('messageMedia', $this->getMessageMedia());
        $writer->writeStringValue('messageText', $this->getMessageText());
        $writer->writeStringValue('otherPartyUsername', $this->getOtherPartyUsername());
        $writer->writeObjectValue('reference', $this->getReference());
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
     * Sets the conversationId property value. This field specifies the unique identifier of the conversation in which to send the message.<br><br>Use the <a href="/api-docs/commerce/message/resources/conversation/methods/getConversations" target="_blank">getConversations</a> method to retrieve conversation ID values.<br><br>This field is required if sending a message in an existing conversation.
     * @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the emailCopyToSender property value. This boolean indicates whether a copy of the message should be emailed to the sender.<br><br>If this boolean is input as <code>true</code>, a copy of the message will be emailed to the sender.
     * @param bool|null $value Value to set for the emailCopyToSender property.
    */
    public function setEmailCopyToSender(?bool $value): void {
        $this->emailCopyToSender = $value;
    }

    /**
     * Sets the messageMedia property value. This array lists the individual forms of media, if any, to be attached to the message.<br><br>Up to five individual forms of media may be be sent per message. If more than five are specified in this array, an error will occur and the call will fail.
     * @param array<MessageMedia>|null $value Value to set for the messageMedia property.
    */
    public function setMessageMedia(?array $value): void {
        $this->messageMedia = $value;
    }

    /**
     * Sets the messageText property value. The text of the message.<br><br><b>Max length:</b> 2000 characters
     * @param string|null $value Value to set for the messageText property.
    */
    public function setMessageText(?string $value): void {
        $this->messageText = $value;
    }

    /**
     * Sets the otherPartyUsername property value. This field specifies the eBay username of the entity for which to send the message.<br><br>This field is required if starting a new conversation with another eBay user.
     * @param string|null $value Value to set for the otherPartyUsername property.
    */
    public function setOtherPartyUsername(?string $value): void {
        $this->otherPartyUsername = $value;
    }

    /**
     * Sets the reference property value. This type specifies the reference type and associated reference ID associated with a message.
     * @param Reference|null $value Value to set for the reference property.
    */
    public function setReference(?Reference $value): void {
        $this->reference = $value;
    }

}
