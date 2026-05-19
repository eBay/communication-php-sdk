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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type provides subject-based fields derived from feedback.
*/
class Topic implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $coarseTopic The main topic (or category) detected in the comment. See the available <b>topics</b> in <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#uri.filter">filter</a>.
    */
    private ?string $coarseTopic = null;
    
    /**
     * @var string|null $fineTopic <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Fine topics are not currently  supported.</span></p>A more specific detail or subtopic related to the coarse topic. 
    */
    private ?string $fineTopic = null;
    
    /**
     * @var array<string>|null $highlightedTexts This array lists any text snippets, phrases, or examples, from the feedback that supports the detected topic.
    */
    private ?array $highlightedTexts = null;
    
    /**
     * @var string|null $sentiment This field indicates a classification of the feedback, whether the feedback is <code>Positive</code>, <code>Negative</code>, or <code>Neutral</code>.
    */
    private ?string $sentiment = null;
    
    /**
     * Instantiates a new Topic and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Topic
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Topic {
        return new Topic();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the coarseTopic property value. The main topic (or category) detected in the comment. See the available <b>topics</b> in <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#uri.filter">filter</a>.
     * @return string|null
    */
    public function getCoarseTopic(): ?string {
        return $this->coarseTopic;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'coarseTopic' => fn(ParseNode $n) => $o->setCoarseTopic($n->getStringValue()),
            'fineTopic' => fn(ParseNode $n) => $o->setFineTopic($n->getStringValue()),
            'highlightedTexts' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setHighlightedTexts($val);
            },
            'sentiment' => fn(ParseNode $n) => $o->setSentiment($n->getStringValue()),
        ];
    }

    /**
     * Gets the fineTopic property value. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Fine topics are not currently  supported.</span></p>A more specific detail or subtopic related to the coarse topic. 
     * @return string|null
    */
    public function getFineTopic(): ?string {
        return $this->fineTopic;
    }

    /**
     * Gets the highlightedTexts property value. This array lists any text snippets, phrases, or examples, from the feedback that supports the detected topic.
     * @return array<string>|null
    */
    public function getHighlightedTexts(): ?array {
        return $this->highlightedTexts;
    }

    /**
     * Gets the sentiment property value. This field indicates a classification of the feedback, whether the feedback is <code>Positive</code>, <code>Negative</code>, or <code>Neutral</code>.
     * @return string|null
    */
    public function getSentiment(): ?string {
        return $this->sentiment;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('coarseTopic', $this->getCoarseTopic());
        $writer->writeStringValue('fineTopic', $this->getFineTopic());
        $writer->writeCollectionOfPrimitiveValues('highlightedTexts', $this->getHighlightedTexts());
        $writer->writeStringValue('sentiment', $this->getSentiment());
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
     * Sets the coarseTopic property value. The main topic (or category) detected in the comment. See the available <b>topics</b> in <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#uri.filter">filter</a>.
     * @param string|null $value Value to set for the coarseTopic property.
    */
    public function setCoarseTopic(?string $value): void {
        $this->coarseTopic = $value;
    }

    /**
     * Sets the fineTopic property value. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Fine topics are not currently  supported.</span></p>A more specific detail or subtopic related to the coarse topic. 
     * @param string|null $value Value to set for the fineTopic property.
    */
    public function setFineTopic(?string $value): void {
        $this->fineTopic = $value;
    }

    /**
     * Sets the highlightedTexts property value. This array lists any text snippets, phrases, or examples, from the feedback that supports the detected topic.
     * @param array<string>|null $value Value to set for the highlightedTexts property.
    */
    public function setHighlightedTexts(?array $value): void {
        $this->highlightedTexts = $value;
    }

    /**
     * Sets the sentiment property value. This field indicates a classification of the feedback, whether the feedback is <code>Positive</code>, <code>Negative</code>, or <code>Neutral</code>.
     * @param string|null $value Value to set for the sentiment property.
    */
    public function setSentiment(?string $value): void {
        $this->sentiment = $value;
    }

}
