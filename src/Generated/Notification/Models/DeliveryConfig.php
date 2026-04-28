<?php

namespace EBay\Communication\Generated\Notification\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that contains information about the delivery configuration.
*/
class DeliveryConfig implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $endpoint The endpoint for this destination.<br><br><span class="tablenote"><b>Note:</b> The provided endpoint URL should use the HTTPS protocol, and it should not contain an internal IP address or <code>localhost</code> in its path.</span>
    */
    private ?string $endpoint = null;
    
    /**
     * @var string|null $verificationToken The verification token associated with this endpoint.<br><br><span class="tablenote"><b>Note:</b> The provided verification token must be between 32 and 80 characters. Allowed characters include alphanumeric characters, underscores (<code>_</code>), and hyphens (<code>-</code>); no other characters are allowed.</span>
    */
    private ?string $verificationToken = null;
    
    /**
     * Instantiates a new DeliveryConfig and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeliveryConfig
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeliveryConfig {
        return new DeliveryConfig();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the endpoint property value. The endpoint for this destination.<br><br><span class="tablenote"><b>Note:</b> The provided endpoint URL should use the HTTPS protocol, and it should not contain an internal IP address or <code>localhost</code> in its path.</span>
     * @return string|null
    */
    public function getEndpoint(): ?string {
        return $this->endpoint;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endpoint' => fn(ParseNode $n) => $o->setEndpoint($n->getStringValue()),
            'verificationToken' => fn(ParseNode $n) => $o->setVerificationToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the verificationToken property value. The verification token associated with this endpoint.<br><br><span class="tablenote"><b>Note:</b> The provided verification token must be between 32 and 80 characters. Allowed characters include alphanumeric characters, underscores (<code>_</code>), and hyphens (<code>-</code>); no other characters are allowed.</span>
     * @return string|null
    */
    public function getVerificationToken(): ?string {
        return $this->verificationToken;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('endpoint', $this->getEndpoint());
        $writer->writeStringValue('verificationToken', $this->getVerificationToken());
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
     * Sets the endpoint property value. The endpoint for this destination.<br><br><span class="tablenote"><b>Note:</b> The provided endpoint URL should use the HTTPS protocol, and it should not contain an internal IP address or <code>localhost</code> in its path.</span>
     * @param string|null $value Value to set for the endpoint property.
    */
    public function setEndpoint(?string $value): void {
        $this->endpoint = $value;
    }

    /**
     * Sets the verificationToken property value. The verification token associated with this endpoint.<br><br><span class="tablenote"><b>Note:</b> The provided verification token must be between 32 and 80 characters. Allowed characters include alphanumeric characters, underscores (<code>_</code>), and hyphens (<code>-</code>); no other characters are allowed.</span>
     * @param string|null $value Value to set for the verificationToken property.
    */
    public function setVerificationToken(?string $value): void {
        $this->verificationToken = $value;
    }

}
