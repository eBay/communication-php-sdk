<?php

namespace EBay\Communication\Generated\Notification\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that contains information about the destination.
*/
class Destination implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DeliveryConfig|null $deliveryConfig A type that contains information about the delivery configuration.
    */
    private ?DeliveryConfig $deliveryConfig = null;
    
    /**
     * @var string|null $destinationId The unique identifier for the destination.
    */
    private ?string $destinationId = null;
    
    /**
     * @var string|null $name The name associated with this destination.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $status The status for this destination.<br><br><span class="tablenote"><b>Note:</b> The <b>MARKED_DOWN</b> value is set by eBay systems and cannot be used in a create or update call by applications.</span><br><br><b>Valid values:</b><ul><li><code>ENABLED</code></li><li><code>DISABLED</code></li><li><code>MARKED_DOWN</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:DestinationStatusEnum'>eBay API documentation</a>
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new Destination and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Destination
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Destination {
        return new Destination();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the deliveryConfig property value. A type that contains information about the delivery configuration.
     * @return DeliveryConfig|null
    */
    public function getDeliveryConfig(): ?DeliveryConfig {
        return $this->deliveryConfig;
    }

    /**
     * Gets the destinationId property value. The unique identifier for the destination.
     * @return string|null
    */
    public function getDestinationId(): ?string {
        return $this->destinationId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deliveryConfig' => fn(ParseNode $n) => $o->setDeliveryConfig($n->getObjectValue([DeliveryConfig::class, 'createFromDiscriminatorValue'])),
            'destinationId' => fn(ParseNode $n) => $o->setDestinationId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The name associated with this destination.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the status property value. The status for this destination.<br><br><span class="tablenote"><b>Note:</b> The <b>MARKED_DOWN</b> value is set by eBay systems and cannot be used in a create or update call by applications.</span><br><br><b>Valid values:</b><ul><li><code>ENABLED</code></li><li><code>DISABLED</code></li><li><code>MARKED_DOWN</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:DestinationStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('deliveryConfig', $this->getDeliveryConfig());
        $writer->writeStringValue('destinationId', $this->getDestinationId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('status', $this->getStatus());
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
     * Sets the deliveryConfig property value. A type that contains information about the delivery configuration.
     * @param DeliveryConfig|null $value Value to set for the deliveryConfig property.
    */
    public function setDeliveryConfig(?DeliveryConfig $value): void {
        $this->deliveryConfig = $value;
    }

    /**
     * Sets the destinationId property value. The unique identifier for the destination.
     * @param string|null $value Value to set for the destinationId property.
    */
    public function setDestinationId(?string $value): void {
        $this->destinationId = $value;
    }

    /**
     * Sets the name property value. The name associated with this destination.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the status property value. The status for this destination.<br><br><span class="tablenote"><b>Note:</b> The <b>MARKED_DOWN</b> value is set by eBay systems and cannot be used in a create or update call by applications.</span><br><br><b>Valid values:</b><ul><li><code>ENABLED</code></li><li><code>DISABLED</code></li><li><code>MARKED_DOWN</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/notification/types/api:DestinationStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

}
