<?php

namespace EBay\Communication\Generated\Notification\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The type that defines the fields for the <b>alertEmail</b> field.
*/
class Config implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $alertEmail This field is used to add or modify an email address that will be used for Notification API alerts associated with the application. <b>getConfig</b> can be used to get the email address currently being used for alerts.
    */
    private ?string $alertEmail = null;
    
    /**
     * Instantiates a new Config and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Config
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Config {
        return new Config();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the alertEmail property value. This field is used to add or modify an email address that will be used for Notification API alerts associated with the application. <b>getConfig</b> can be used to get the email address currently being used for alerts.
     * @return string|null
    */
    public function getAlertEmail(): ?string {
        return $this->alertEmail;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alertEmail' => fn(ParseNode $n) => $o->setAlertEmail($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('alertEmail', $this->getAlertEmail());
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
     * Sets the alertEmail property value. This field is used to add or modify an email address that will be used for Notification API alerts associated with the application. <b>getConfig</b> can be used to get the email address currently being used for alerts.
     * @param string|null $value Value to set for the alertEmail property.
    */
    public function setAlertEmail(?string $value): void {
        $this->alertEmail = $value;
    }

}
