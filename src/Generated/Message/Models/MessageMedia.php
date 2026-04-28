<?php

namespace EBay\Communication\Generated\Message\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type specifies the type of message media sent when sending a message.
*/
class MessageMedia implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $mediaName The name of the media attached to the message.
    */
    private ?string $mediaName = null;
    
    /**
     * @var string|null $mediaType The type of media attached to the message.<br><br><b>Valid values:</b><ul><li><code>IMAGE</code></li><li><code>PDF</code></li><li><code>DOC</code></li><li><code>TXT</code></li></ul>
    */
    private ?string $mediaType = null;
    
    /**
     * @var string|null $mediaUrl The URL of the self-hosted media attached to the message. URLs must use the "HTTPS" protocol.
    */
    private ?string $mediaUrl = null;
    
    /**
     * Instantiates a new MessageMedia and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageMedia
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessageMedia {
        return new MessageMedia();
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
            'mediaName' => fn(ParseNode $n) => $o->setMediaName($n->getStringValue()),
            'mediaType' => fn(ParseNode $n) => $o->setMediaType($n->getStringValue()),
            'mediaUrl' => fn(ParseNode $n) => $o->setMediaUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the mediaName property value. The name of the media attached to the message.
     * @return string|null
    */
    public function getMediaName(): ?string {
        return $this->mediaName;
    }

    /**
     * Gets the mediaType property value. The type of media attached to the message.<br><br><b>Valid values:</b><ul><li><code>IMAGE</code></li><li><code>PDF</code></li><li><code>DOC</code></li><li><code>TXT</code></li></ul>
     * @return string|null
    */
    public function getMediaType(): ?string {
        return $this->mediaType;
    }

    /**
     * Gets the mediaUrl property value. The URL of the self-hosted media attached to the message. URLs must use the "HTTPS" protocol.
     * @return string|null
    */
    public function getMediaUrl(): ?string {
        return $this->mediaUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('mediaName', $this->getMediaName());
        $writer->writeStringValue('mediaType', $this->getMediaType());
        $writer->writeStringValue('mediaUrl', $this->getMediaUrl());
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
     * Sets the mediaName property value. The name of the media attached to the message.
     * @param string|null $value Value to set for the mediaName property.
    */
    public function setMediaName(?string $value): void {
        $this->mediaName = $value;
    }

    /**
     * Sets the mediaType property value. The type of media attached to the message.<br><br><b>Valid values:</b><ul><li><code>IMAGE</code></li><li><code>PDF</code></li><li><code>DOC</code></li><li><code>TXT</code></li></ul>
     * @param string|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?string $value): void {
        $this->mediaType = $value;
    }

    /**
     * Sets the mediaUrl property value. The URL of the self-hosted media attached to the message. URLs must use the "HTTPS" protocol.
     * @param string|null $value Value to set for the mediaUrl property.
    */
    public function setMediaUrl(?string $value): void {
        $this->mediaUrl = $value;
    }

}
