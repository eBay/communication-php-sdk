<?php

namespace EBay\Communication\Generated\Notification\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateSubscriptionFilterRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CreateSubscriptionFilterRequest_filterSchema|null $filterSchema The content of a subscription filter as a valid <a href="https://json-schema.org " target="_blank">JSON Schema Core document</a> (version 2020-12 or later). The <strong>filterSchema</strong> provided must describe the subscription's notification payload such that it supplies valid criteria to filter the subscription's notifications.<br><br><span class="tablenote"><b>Note:</b> Not all topics can have filters applied to them. Use <a href="/api-docs/commerce/notification/resources/topic/methods/getTopic">getTopic</a> and <a href="/api-docs/commerce/notification/resources/topic/methods/getTopics">getTopics</a> requests to determine if a specific topic is filterable. Filterable topics have the boolean <b>filterable</b> returned as <code>true</code> in the response.</span><br><span class="tablenote"><b>Note:</b> If the JSON supplied as a subscription filter specifies a field that does not exist in the notifications for a topic, or if the topic is not filterable, the filter will be rejected and become <strong>DISABLED</strong>. If it is valid, however, the filter will move from <strong>PENDING</strong> status to <strong>ENABLED</strong> status.</span><br>Initially, when the <b>createSubscriptionFilter</b> request has been made, if the request has a valid JSON body a <b>201&nbsp;Created</b> is returned. After that, the validation of the <b>filterSchema</b> happens. See <a href="/api-docs/commerce/notification/overview.html#create-filter" target="_blank">Creating a subscription filter for a topic</a> for additional information.
    */
    private ?CreateSubscriptionFilterRequest_filterSchema $filterSchema = null;
    
    /**
     * Instantiates a new CreateSubscriptionFilterRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateSubscriptionFilterRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateSubscriptionFilterRequest {
        return new CreateSubscriptionFilterRequest();
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
            'filterSchema' => fn(ParseNode $n) => $o->setFilterSchema($n->getObjectValue([CreateSubscriptionFilterRequest_filterSchema::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the filterSchema property value. The content of a subscription filter as a valid <a href="https://json-schema.org " target="_blank">JSON Schema Core document</a> (version 2020-12 or later). The <strong>filterSchema</strong> provided must describe the subscription's notification payload such that it supplies valid criteria to filter the subscription's notifications.<br><br><span class="tablenote"><b>Note:</b> Not all topics can have filters applied to them. Use <a href="/api-docs/commerce/notification/resources/topic/methods/getTopic">getTopic</a> and <a href="/api-docs/commerce/notification/resources/topic/methods/getTopics">getTopics</a> requests to determine if a specific topic is filterable. Filterable topics have the boolean <b>filterable</b> returned as <code>true</code> in the response.</span><br><span class="tablenote"><b>Note:</b> If the JSON supplied as a subscription filter specifies a field that does not exist in the notifications for a topic, or if the topic is not filterable, the filter will be rejected and become <strong>DISABLED</strong>. If it is valid, however, the filter will move from <strong>PENDING</strong> status to <strong>ENABLED</strong> status.</span><br>Initially, when the <b>createSubscriptionFilter</b> request has been made, if the request has a valid JSON body a <b>201&nbsp;Created</b> is returned. After that, the validation of the <b>filterSchema</b> happens. See <a href="/api-docs/commerce/notification/overview.html#create-filter" target="_blank">Creating a subscription filter for a topic</a> for additional information.
     * @return CreateSubscriptionFilterRequest_filterSchema|null
    */
    public function getFilterSchema(): ?CreateSubscriptionFilterRequest_filterSchema {
        return $this->filterSchema;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('filterSchema', $this->getFilterSchema());
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
     * Sets the filterSchema property value. The content of a subscription filter as a valid <a href="https://json-schema.org " target="_blank">JSON Schema Core document</a> (version 2020-12 or later). The <strong>filterSchema</strong> provided must describe the subscription's notification payload such that it supplies valid criteria to filter the subscription's notifications.<br><br><span class="tablenote"><b>Note:</b> Not all topics can have filters applied to them. Use <a href="/api-docs/commerce/notification/resources/topic/methods/getTopic">getTopic</a> and <a href="/api-docs/commerce/notification/resources/topic/methods/getTopics">getTopics</a> requests to determine if a specific topic is filterable. Filterable topics have the boolean <b>filterable</b> returned as <code>true</code> in the response.</span><br><span class="tablenote"><b>Note:</b> If the JSON supplied as a subscription filter specifies a field that does not exist in the notifications for a topic, or if the topic is not filterable, the filter will be rejected and become <strong>DISABLED</strong>. If it is valid, however, the filter will move from <strong>PENDING</strong> status to <strong>ENABLED</strong> status.</span><br>Initially, when the <b>createSubscriptionFilter</b> request has been made, if the request has a valid JSON body a <b>201&nbsp;Created</b> is returned. After that, the validation of the <b>filterSchema</b> happens. See <a href="/api-docs/commerce/notification/overview.html#create-filter" target="_blank">Creating a subscription filter for a topic</a> for additional information.
     * @param CreateSubscriptionFilterRequest_filterSchema|null $value Value to set for the filterSchema property.
    */
    public function setFilterSchema(?CreateSubscriptionFilterRequest_filterSchema $value): void {
        $this->filterSchema = $value;
    }

}
