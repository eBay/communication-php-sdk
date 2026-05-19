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
 * This type provides fields for an array that includes metrics and distributions for each rating type.
*/
class RatingSummaryByRatingType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<FeedbackMetrics>|null $feedbackMetrics An array of metrics associated with feedback aggregation.
    */
    private ?array $feedbackMetrics = null;
    
    /**
     * @var array<FeedbackRatingValueDistribution>|null $feedbackRatingValueDistribution An array listing the distribution values of the feedback ratings.
    */
    private ?array $feedbackRatingValueDistribution = null;
    
    /**
     * @var Period|null $period This type provides fields for the time period on which the feedback summary is calculated.
    */
    private ?Period $period = null;
    
    /**
     * @var string|null $userRoleType This enumerated value indicates the user's role in the feedback  (<code>BUYER</code> or <code>SELLER</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:UserRoleEnum'>eBay API documentation</a>
    */
    private ?string $userRoleType = null;
    
    /**
     * Instantiates a new RatingSummaryByRatingType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RatingSummaryByRatingType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RatingSummaryByRatingType {
        return new RatingSummaryByRatingType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the feedbackMetrics property value. An array of metrics associated with feedback aggregation.
     * @return array<FeedbackMetrics>|null
    */
    public function getFeedbackMetrics(): ?array {
        return $this->feedbackMetrics;
    }

    /**
     * Gets the feedbackRatingValueDistribution property value. An array listing the distribution values of the feedback ratings.
     * @return array<FeedbackRatingValueDistribution>|null
    */
    public function getFeedbackRatingValueDistribution(): ?array {
        return $this->feedbackRatingValueDistribution;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'feedbackMetrics' => fn(ParseNode $n) => $o->setFeedbackMetrics($n->getCollectionOfObjectValues([FeedbackMetrics::class, 'createFromDiscriminatorValue'])),
            'feedbackRatingValueDistribution' => fn(ParseNode $n) => $o->setFeedbackRatingValueDistribution($n->getCollectionOfObjectValues([FeedbackRatingValueDistribution::class, 'createFromDiscriminatorValue'])),
            'period' => fn(ParseNode $n) => $o->setPeriod($n->getObjectValue([Period::class, 'createFromDiscriminatorValue'])),
            'userRoleType' => fn(ParseNode $n) => $o->setUserRoleType($n->getStringValue()),
        ];
    }

    /**
     * Gets the period property value. This type provides fields for the time period on which the feedback summary is calculated.
     * @return Period|null
    */
    public function getPeriod(): ?Period {
        return $this->period;
    }

    /**
     * Gets the userRoleType property value. This enumerated value indicates the user's role in the feedback  (<code>BUYER</code> or <code>SELLER</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:UserRoleEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getUserRoleType(): ?string {
        return $this->userRoleType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('feedbackMetrics', $this->getFeedbackMetrics());
        $writer->writeCollectionOfObjectValues('feedbackRatingValueDistribution', $this->getFeedbackRatingValueDistribution());
        $writer->writeObjectValue('period', $this->getPeriod());
        $writer->writeStringValue('userRoleType', $this->getUserRoleType());
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
     * Sets the feedbackMetrics property value. An array of metrics associated with feedback aggregation.
     * @param array<FeedbackMetrics>|null $value Value to set for the feedbackMetrics property.
    */
    public function setFeedbackMetrics(?array $value): void {
        $this->feedbackMetrics = $value;
    }

    /**
     * Sets the feedbackRatingValueDistribution property value. An array listing the distribution values of the feedback ratings.
     * @param array<FeedbackRatingValueDistribution>|null $value Value to set for the feedbackRatingValueDistribution property.
    */
    public function setFeedbackRatingValueDistribution(?array $value): void {
        $this->feedbackRatingValueDistribution = $value;
    }

    /**
     * Sets the period property value. This type provides fields for the time period on which the feedback summary is calculated.
     * @param Period|null $value Value to set for the period property.
    */
    public function setPeriod(?Period $value): void {
        $this->period = $value;
    }

    /**
     * Sets the userRoleType property value. This enumerated value indicates the user's role in the feedback  (<code>BUYER</code> or <code>SELLER</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:UserRoleEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the userRoleType property.
    */
    public function setUserRoleType(?string $value): void {
        $this->userRoleType = $value;
    }

}
