<?php

namespace EBay\Communication\Generated\Notification\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that defines the public key for a unique key ID.
*/
class PublicKey implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $algorithm The algorithm associated with the public key that is returned, such as Elliptic Curve Digital Signature Algorithm (ECDSA).
    */
    private ?string $algorithm = null;
    
    /**
     * @var string|null $digest The digest associated with the public key that is returned, such as Secure Hash Algorithm 1 (SHA1).
    */
    private ?string $digest = null;
    
    /**
     * @var string|null $key The public key that is returned for the specified key ID.<br><br>This value is used to validate the eBay push notification message payload.
    */
    private ?string $key = null;
    
    /**
     * Instantiates a new PublicKey and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PublicKey
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PublicKey {
        return new PublicKey();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the algorithm property value. The algorithm associated with the public key that is returned, such as Elliptic Curve Digital Signature Algorithm (ECDSA).
     * @return string|null
    */
    public function getAlgorithm(): ?string {
        return $this->algorithm;
    }

    /**
     * Gets the digest property value. The digest associated with the public key that is returned, such as Secure Hash Algorithm 1 (SHA1).
     * @return string|null
    */
    public function getDigest(): ?string {
        return $this->digest;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'algorithm' => fn(ParseNode $n) => $o->setAlgorithm($n->getStringValue()),
            'digest' => fn(ParseNode $n) => $o->setDigest($n->getStringValue()),
            'key' => fn(ParseNode $n) => $o->setKey($n->getStringValue()),
        ];
    }

    /**
     * Gets the key property value. The public key that is returned for the specified key ID.<br><br>This value is used to validate the eBay push notification message payload.
     * @return string|null
    */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('algorithm', $this->getAlgorithm());
        $writer->writeStringValue('digest', $this->getDigest());
        $writer->writeStringValue('key', $this->getKey());
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
     * Sets the algorithm property value. The algorithm associated with the public key that is returned, such as Elliptic Curve Digital Signature Algorithm (ECDSA).
     * @param string|null $value Value to set for the algorithm property.
    */
    public function setAlgorithm(?string $value): void {
        $this->algorithm = $value;
    }

    /**
     * Sets the digest property value. The digest associated with the public key that is returned, such as Secure Hash Algorithm 1 (SHA1).
     * @param string|null $value Value to set for the digest property.
    */
    public function setDigest(?string $value): void {
        $this->digest = $value;
    }

    /**
     * Sets the key property value. The public key that is returned for the specified key ID.<br><br>This value is used to validate the eBay push notification message payload.
     * @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value): void {
        $this->key = $value;
    }

}
