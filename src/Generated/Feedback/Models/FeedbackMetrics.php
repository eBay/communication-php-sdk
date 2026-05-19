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

namespace EBay\Communication\Generated\Feedback\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type provides fields for the array of metrics associated with feedback aggregation.
*/
class FeedbackMetrics implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $metricName This enumerated value specifies the type of feedback aggregation. For example, <code>AVG</code> would indicate the feedback returned represents the average value of the feedback. See <b>metricValue</b> for the value of the returned feedback. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackAggregationTypeEnum'>eBay API documentation</a>
    */
    private ?string $metricName = null;
    
    /**
     * @var float|null $metricValue The decimal value of the specified metric. For example, 55.8 would represent a value associated with the <b>metricName</b> (see <b>metricName</b> for interpretation and units).
    */
    private ?float $metricValue = null;
    
    /**
     * Instantiates a new FeedbackMetrics and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedbackMetrics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedbackMetrics {
        return new FeedbackMetrics();
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
            'metricName' => fn(ParseNode $n) => $o->setMetricName($n->getStringValue()),
            'metricValue' => fn(ParseNode $n) => $o->setMetricValue($n->getFloatValue()),
        ];
    }

    /**
     * Gets the metricName property value. This enumerated value specifies the type of feedback aggregation. For example, <code>AVG</code> would indicate the feedback returned represents the average value of the feedback. See <b>metricValue</b> for the value of the returned feedback. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackAggregationTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMetricName(): ?string {
        return $this->metricName;
    }

    /**
     * Gets the metricValue property value. The decimal value of the specified metric. For example, 55.8 would represent a value associated with the <b>metricName</b> (see <b>metricName</b> for interpretation and units).
     * @return float|null
    */
    public function getMetricValue(): ?float {
        return $this->metricValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('metricName', $this->getMetricName());
        $writer->writeFloatValue('metricValue', $this->getMetricValue());
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
     * Sets the metricName property value. This enumerated value specifies the type of feedback aggregation. For example, <code>AVG</code> would indicate the feedback returned represents the average value of the feedback. See <b>metricValue</b> for the value of the returned feedback. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackAggregationTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the metricName property.
    */
    public function setMetricName(?string $value): void {
        $this->metricName = $value;
    }

    /**
     * Sets the metricValue property value. The decimal value of the specified metric. For example, 55.8 would represent a value associated with the <b>metricName</b> (see <b>metricName</b> for interpretation and units).
     * @param float|null $value Value to set for the metricValue property.
    */
    public function setMetricValue(?float $value): void {
        $this->metricValue = $value;
    }

}
