<?php

namespace EBay\Communication\Generated\Message\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response payload of the <b>sendMessage</b> method.
*/
class SendMessageResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $createdDate The date, in ISO 8601 format, the message was sent.
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
     * @var array<MessageMedia>|null $messageMedia This array will be returned if the user attached one or more images or documents to the message.
    */
    private ?array $messageMedia = null;
    
    /**
     * @var bool|null $readStatus The read status of the message.<br><br>If returned as <code>true</code>, the message has been read by the recipient.
    */
    private ?bool $readStatus = null;
    
    /**
     * @var string|null $recipientUserName The eBay username of the recipient.
    */
    private ?string $recipientUserName = null;
    
    /**
     * @var string|null $senderUserName The eBay username of the sender.
    */
    private ?string $senderUserName = null;
    
    /**
     * @var string|null $subject The subject line of the message.
    */
    private ?string $subject = null;
    
    /**
     * Instantiates a new SendMessageResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendMessageResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendMessageResponse {
        return new SendMessageResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdDate property value. The date, in ISO 8601 format, the message was sent.
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
            'recipientUserName' => fn(ParseNode $n) => $o->setRecipientUserName($n->getStringValue()),
            'senderUserName' => fn(ParseNode $n) => $o->setSenderUserName($n->getStringValue()),
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
     * Gets the messageMedia property value. This array will be returned if the user attached one or more images or documents to the message.
     * @return array<MessageMedia>|null
    */
    public function getMessageMedia(): ?array {
        return $this->messageMedia;
    }

    /**
     * Gets the readStatus property value. The read status of the message.<br><br>If returned as <code>true</code>, the message has been read by the recipient.
     * @return bool|null
    */
    public function getReadStatus(): ?bool {
        return $this->readStatus;
    }

    /**
     * Gets the recipientUserName property value. The eBay username of the recipient.
     * @return string|null
    */
    public function getRecipientUserName(): ?string {
        return $this->recipientUserName;
    }

    /**
     * Gets the senderUserName property value. The eBay username of the sender.
     * @return string|null
    */
    public function getSenderUserName(): ?string {
        return $this->senderUserName;
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
        $writer->writeStringValue('recipientUserName', $this->getRecipientUserName());
        $writer->writeStringValue('senderUserName', $this->getSenderUserName());
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
     * Sets the createdDate property value. The date, in ISO 8601 format, the message was sent.
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
     * Sets the messageMedia property value. This array will be returned if the user attached one or more images or documents to the message.
     * @param array<MessageMedia>|null $value Value to set for the messageMedia property.
    */
    public function setMessageMedia(?array $value): void {
        $this->messageMedia = $value;
    }

    /**
     * Sets the readStatus property value. The read status of the message.<br><br>If returned as <code>true</code>, the message has been read by the recipient.
     * @param bool|null $value Value to set for the readStatus property.
    */
    public function setReadStatus(?bool $value): void {
        $this->readStatus = $value;
    }

    /**
     * Sets the recipientUserName property value. The eBay username of the recipient.
     * @param string|null $value Value to set for the recipientUserName property.
    */
    public function setRecipientUserName(?string $value): void {
        $this->recipientUserName = $value;
    }

    /**
     * Sets the senderUserName property value. The eBay username of the sender.
     * @param string|null $value Value to set for the senderUserName property.
    */
    public function setSenderUserName(?string $value): void {
        $this->senderUserName = $value;
    }

    /**
     * Sets the subject property value. The subject line of the message.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->subject = $value;
    }

}
