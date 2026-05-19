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
 * This type provides fields that descrbes timing associated with the comment.
*/
class CommentCommentPeriod implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $unit Unit of time for the <b>value</b>. Supported values: <code>DAY</code>, or <code>YEAR</code>.
    */
    private ?string $unit = null;
    
    /**
     * @var int|null $value Value of the time period expressed in the period contained in the <b>unit</b>. Supported values: <code>30</code>, <code>60</code>, or <code>365</code>. <p>See the <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.feedbackComment.commentPeriod">commentPeriod</a> container for more information.</p>
    */
    private ?int $value = null;
    
    /**
     * Instantiates a new CommentCommentPeriod and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CommentCommentPeriod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CommentCommentPeriod {
        return new CommentCommentPeriod();
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
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the unit property value. Unit of time for the <b>value</b>. Supported values: <code>DAY</code>, or <code>YEAR</code>.
     * @return string|null
    */
    public function getUnit(): ?string {
        return $this->unit;
    }

    /**
     * Gets the value property value. Value of the time period expressed in the period contained in the <b>unit</b>. Supported values: <code>30</code>, <code>60</code>, or <code>365</code>. <p>See the <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.feedbackComment.commentPeriod">commentPeriod</a> container for more information.</p>
     * @return int|null
    */
    public function getValue(): ?int {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('unit', $this->getUnit());
        $writer->writeIntegerValue('value', $this->getValue());
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
     * Sets the unit property value. Unit of time for the <b>value</b>. Supported values: <code>DAY</code>, or <code>YEAR</code>.
     * @param string|null $value Value to set for the unit property.
    */
    public function setUnit(?string $value): void {
        $this->unit = $value;
    }

    /**
     * Sets the value property value. Value of the time period expressed in the period contained in the <b>unit</b>. Supported values: <code>30</code>, <code>60</code>, or <code>365</code>. <p>See the <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.feedbackComment.commentPeriod">commentPeriod</a> container for more information.</p>
     * @param int|null $value Value to set for the value property.
    */
    public function setValue(?int $value): void {
        $this->value = $value;
    }

}
