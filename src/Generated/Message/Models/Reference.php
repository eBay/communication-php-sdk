<?php

namespace EBay\Communication\Generated\Message\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type specifies the reference type and associated reference ID associated with a message.
*/
class Reference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $referenceId This value indicates the reference ID associated with the corresponding <b>referenceType</b> value.<br><br>For example, in the case of a <code>LISTING</code> reference type, this value will be the item ID value of the listing.
    */
    private ?string $referenceId = null;
    
    /**
     * @var string|null $referenceType This value indicates the reference type to associate with the conversation.<br><br>The reference type is used to specify what the conversation is in reference to. For example, a value of <code>LISTING</code> specifies that the conversation is associated with a specific listing. The item ID associated with this listing will then be returned in the <b>referenceId</b> field.<br><br>Currently, only <code>LISTING</code> is supported.
    */
    private ?string $referenceType = null;
    
    /**
     * Instantiates a new Reference and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Reference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Reference {
        return new Reference();
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
            'referenceId' => fn(ParseNode $n) => $o->setReferenceId($n->getStringValue()),
            'referenceType' => fn(ParseNode $n) => $o->setReferenceType($n->getStringValue()),
        ];
    }

    /**
     * Gets the referenceId property value. This value indicates the reference ID associated with the corresponding <b>referenceType</b> value.<br><br>For example, in the case of a <code>LISTING</code> reference type, this value will be the item ID value of the listing.
     * @return string|null
    */
    public function getReferenceId(): ?string {
        return $this->referenceId;
    }

    /**
     * Gets the referenceType property value. This value indicates the reference type to associate with the conversation.<br><br>The reference type is used to specify what the conversation is in reference to. For example, a value of <code>LISTING</code> specifies that the conversation is associated with a specific listing. The item ID associated with this listing will then be returned in the <b>referenceId</b> field.<br><br>Currently, only <code>LISTING</code> is supported.
     * @return string|null
    */
    public function getReferenceType(): ?string {
        return $this->referenceType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('referenceId', $this->getReferenceId());
        $writer->writeStringValue('referenceType', $this->getReferenceType());
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
     * Sets the referenceId property value. This value indicates the reference ID associated with the corresponding <b>referenceType</b> value.<br><br>For example, in the case of a <code>LISTING</code> reference type, this value will be the item ID value of the listing.
     * @param string|null $value Value to set for the referenceId property.
    */
    public function setReferenceId(?string $value): void {
        $this->referenceId = $value;
    }

    /**
     * Sets the referenceType property value. This value indicates the reference type to associate with the conversation.<br><br>The reference type is used to specify what the conversation is in reference to. For example, a value of <code>LISTING</code> specifies that the conversation is associated with a specific listing. The item ID associated with this listing will then be returned in the <b>referenceId</b> field.<br><br>Currently, only <code>LISTING</code> is supported.
     * @param string|null $value Value to set for the referenceType property.
    */
    public function setReferenceType(?string $value): void {
        $this->referenceType = $value;
    }

}
