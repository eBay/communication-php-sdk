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
 * This type defines fields for user feedback collection, including acceptable values, a default preselection value, and an early feedback message. It also provides fields to enable the template, and limits and options for freetext character, multi-value rating, and other similar features.
*/
class FeedbackRatingTemplateType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<FeedbackRatingAcceptableValue>|null $acceptableValues This array contains a list of available values for use in a particular rating, and whether the value is enabled. Provided if <b>ratingValueType</b> is <code>RANGE</code> or <code>PREDEFINED</code>.<p>The following is an example of a predefined list:<pre>[<br>  {<br>    "value": "POSITIVE",<br>    "valueLabel": "Positive",<br>    "enabled": true<br>  },<br>  {<br>    "value": "NEUTRAL",<br>    "valueLabel": "Neutral",<br>    "enabled": true<br>  },<br>  {<br>    "value": "NEGATIVE",<br>    "valueLabel": "Negative",<br>    "enabled": true<br>  }</br>]</pre>For other examples, see the <a href="/develop/guides-v2/communications/sell-communications-guide#using-rating-templates"  target="_blank">Using rating templates</a>.
    */
    private ?array $acceptableValues = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $defaultValue The default value preselected for the rating, if set.
    */
    private ?string $defaultValue = null;
    
    /**
     * @var string|null $earlyFeedbackMessage For eligible sellers, a message may be shown requiring a wait period before you can leave neutral or negative feedback.
    */
    private ?string $earlyFeedbackMessage = null;
    
    /**
     * @var bool|null $enabled If returned as <code>true</code>, this boolean indicates that the corresponding feedback rating template is enabled for the user to provide feedback for this line item. This value will generally be <code>true</code> when the user role is a buyer, but <code>false</code> when the user role is a seller because buyers do not have Detailed Seller Ratings (DSRs).
    */
    private ?bool $enabled = null;
    
    /**
     * @var int|null $maximumCharactersAllowed The maximum number of characters allowed to be used for a rating that uses free text. It is only applicable for a rating whose <b>ratingValueType</b> is <code>FREETEXT</code>. <p><b>Maximum: </b>500</p>
    */
    private ?int $maximumCharactersAllowed = null;
    
    /**
     * @var bool|null $multiValueRating If returned as <code>true</code>, multiple values can be specified for the rating.
    */
    private ?bool $multiValueRating = null;
    
    /**
     * @var string|null $ratingKey This enumerated value indicates the type of rating that is tracked for the seller. All of the metadata returned under each node for the <b>ratingTemplates</b> array will apply to this rating type. For example, the value <code>OVERALL_EXPERIENCE</code> indicates the rating is for the overall transaction experience. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum'>eBay API documentation</a>
    */
    private ?string $ratingKey = null;
    
    /**
     * @var string|null $ratingLabel This field provides more details about and/or provides guidance on the corresponding rating type. For example, the rating label of <b>Rate this transaction</b> describes the feedback for the user to enter for an <code>OVERALL_EXPERIENCE</code> <b>ratingKey</b>.
    */
    private ?string $ratingLabel = null;
    
    /**
     * @var string|null $ratingValueType This enumerated value indicates the type of data used to provide the specific feedback rating.<br><p>If set to <code>PREDEFINED</code> or <code>RANGE</code>, is returned here, more information on the supported values will be returned under the <b>acceptableValues</b> array. If <code>FREETEXT</code> is returned here, the maximum number of characters supported can be seen in the <b>maximumCharactersAllowed</b> field.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackRatingValueTypeEnum'>eBay API documentation</a>
    */
    private ?string $ratingValueType = null;
    
    /**
     * @var bool|null $required If returned as <code>true</code>, this rating type is required when leaving feedback.
    */
    private ?bool $required = null;
    
    /**
     * Instantiates a new FeedbackRatingTemplateType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedbackRatingTemplateType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedbackRatingTemplateType {
        return new FeedbackRatingTemplateType();
    }

    /**
     * Gets the acceptableValues property value. This array contains a list of available values for use in a particular rating, and whether the value is enabled. Provided if <b>ratingValueType</b> is <code>RANGE</code> or <code>PREDEFINED</code>.<p>The following is an example of a predefined list:<pre>[<br>  {<br>    "value": "POSITIVE",<br>    "valueLabel": "Positive",<br>    "enabled": true<br>  },<br>  {<br>    "value": "NEUTRAL",<br>    "valueLabel": "Neutral",<br>    "enabled": true<br>  },<br>  {<br>    "value": "NEGATIVE",<br>    "valueLabel": "Negative",<br>    "enabled": true<br>  }</br>]</pre>For other examples, see the <a href="/develop/guides-v2/communications/sell-communications-guide#using-rating-templates"  target="_blank">Using rating templates</a>.
     * @return array<FeedbackRatingAcceptableValue>|null
    */
    public function getAcceptableValues(): ?array {
        return $this->acceptableValues;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultValue property value. The default value preselected for the rating, if set.
     * @return string|null
    */
    public function getDefaultValue(): ?string {
        return $this->defaultValue;
    }

    /**
     * Gets the earlyFeedbackMessage property value. For eligible sellers, a message may be shown requiring a wait period before you can leave neutral or negative feedback.
     * @return string|null
    */
    public function getEarlyFeedbackMessage(): ?string {
        return $this->earlyFeedbackMessage;
    }

    /**
     * Gets the enabled property value. If returned as <code>true</code>, this boolean indicates that the corresponding feedback rating template is enabled for the user to provide feedback for this line item. This value will generally be <code>true</code> when the user role is a buyer, but <code>false</code> when the user role is a seller because buyers do not have Detailed Seller Ratings (DSRs).
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'acceptableValues' => fn(ParseNode $n) => $o->setAcceptableValues($n->getCollectionOfObjectValues([FeedbackRatingAcceptableValue::class, 'createFromDiscriminatorValue'])),
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getStringValue()),
            'earlyFeedbackMessage' => fn(ParseNode $n) => $o->setEarlyFeedbackMessage($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'maximumCharactersAllowed' => fn(ParseNode $n) => $o->setMaximumCharactersAllowed($n->getIntegerValue()),
            'multiValueRating' => fn(ParseNode $n) => $o->setMultiValueRating($n->getBooleanValue()),
            'ratingKey' => fn(ParseNode $n) => $o->setRatingKey($n->getStringValue()),
            'ratingLabel' => fn(ParseNode $n) => $o->setRatingLabel($n->getStringValue()),
            'ratingValueType' => fn(ParseNode $n) => $o->setRatingValueType($n->getStringValue()),
            'required' => fn(ParseNode $n) => $o->setRequired($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the maximumCharactersAllowed property value. The maximum number of characters allowed to be used for a rating that uses free text. It is only applicable for a rating whose <b>ratingValueType</b> is <code>FREETEXT</code>. <p><b>Maximum: </b>500</p>
     * @return int|null
    */
    public function getMaximumCharactersAllowed(): ?int {
        return $this->maximumCharactersAllowed;
    }

    /**
     * Gets the multiValueRating property value. If returned as <code>true</code>, multiple values can be specified for the rating.
     * @return bool|null
    */
    public function getMultiValueRating(): ?bool {
        return $this->multiValueRating;
    }

    /**
     * Gets the ratingKey property value. This enumerated value indicates the type of rating that is tracked for the seller. All of the metadata returned under each node for the <b>ratingTemplates</b> array will apply to this rating type. For example, the value <code>OVERALL_EXPERIENCE</code> indicates the rating is for the overall transaction experience. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getRatingKey(): ?string {
        return $this->ratingKey;
    }

    /**
     * Gets the ratingLabel property value. This field provides more details about and/or provides guidance on the corresponding rating type. For example, the rating label of <b>Rate this transaction</b> describes the feedback for the user to enter for an <code>OVERALL_EXPERIENCE</code> <b>ratingKey</b>.
     * @return string|null
    */
    public function getRatingLabel(): ?string {
        return $this->ratingLabel;
    }

    /**
     * Gets the ratingValueType property value. This enumerated value indicates the type of data used to provide the specific feedback rating.<br><p>If set to <code>PREDEFINED</code> or <code>RANGE</code>, is returned here, more information on the supported values will be returned under the <b>acceptableValues</b> array. If <code>FREETEXT</code> is returned here, the maximum number of characters supported can be seen in the <b>maximumCharactersAllowed</b> field.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackRatingValueTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getRatingValueType(): ?string {
        return $this->ratingValueType;
    }

    /**
     * Gets the required property value. If returned as <code>true</code>, this rating type is required when leaving feedback.
     * @return bool|null
    */
    public function getRequired(): ?bool {
        return $this->required;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('acceptableValues', $this->getAcceptableValues());
        $writer->writeStringValue('defaultValue', $this->getDefaultValue());
        $writer->writeStringValue('earlyFeedbackMessage', $this->getEarlyFeedbackMessage());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeIntegerValue('maximumCharactersAllowed', $this->getMaximumCharactersAllowed());
        $writer->writeBooleanValue('multiValueRating', $this->getMultiValueRating());
        $writer->writeStringValue('ratingKey', $this->getRatingKey());
        $writer->writeStringValue('ratingLabel', $this->getRatingLabel());
        $writer->writeStringValue('ratingValueType', $this->getRatingValueType());
        $writer->writeBooleanValue('required', $this->getRequired());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the acceptableValues property value. This array contains a list of available values for use in a particular rating, and whether the value is enabled. Provided if <b>ratingValueType</b> is <code>RANGE</code> or <code>PREDEFINED</code>.<p>The following is an example of a predefined list:<pre>[<br>  {<br>    "value": "POSITIVE",<br>    "valueLabel": "Positive",<br>    "enabled": true<br>  },<br>  {<br>    "value": "NEUTRAL",<br>    "valueLabel": "Neutral",<br>    "enabled": true<br>  },<br>  {<br>    "value": "NEGATIVE",<br>    "valueLabel": "Negative",<br>    "enabled": true<br>  }</br>]</pre>For other examples, see the <a href="/develop/guides-v2/communications/sell-communications-guide#using-rating-templates"  target="_blank">Using rating templates</a>.
     * @param array<FeedbackRatingAcceptableValue>|null $value Value to set for the acceptableValues property.
    */
    public function setAcceptableValues(?array $value): void {
        $this->acceptableValues = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the defaultValue property value. The default value preselected for the rating, if set.
     * @param string|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?string $value): void {
        $this->defaultValue = $value;
    }

    /**
     * Sets the earlyFeedbackMessage property value. For eligible sellers, a message may be shown requiring a wait period before you can leave neutral or negative feedback.
     * @param string|null $value Value to set for the earlyFeedbackMessage property.
    */
    public function setEarlyFeedbackMessage(?string $value): void {
        $this->earlyFeedbackMessage = $value;
    }

    /**
     * Sets the enabled property value. If returned as <code>true</code>, this boolean indicates that the corresponding feedback rating template is enabled for the user to provide feedback for this line item. This value will generally be <code>true</code> when the user role is a buyer, but <code>false</code> when the user role is a seller because buyers do not have Detailed Seller Ratings (DSRs).
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the maximumCharactersAllowed property value. The maximum number of characters allowed to be used for a rating that uses free text. It is only applicable for a rating whose <b>ratingValueType</b> is <code>FREETEXT</code>. <p><b>Maximum: </b>500</p>
     * @param int|null $value Value to set for the maximumCharactersAllowed property.
    */
    public function setMaximumCharactersAllowed(?int $value): void {
        $this->maximumCharactersAllowed = $value;
    }

    /**
     * Sets the multiValueRating property value. If returned as <code>true</code>, multiple values can be specified for the rating.
     * @param bool|null $value Value to set for the multiValueRating property.
    */
    public function setMultiValueRating(?bool $value): void {
        $this->multiValueRating = $value;
    }

    /**
     * Sets the ratingKey property value. This enumerated value indicates the type of rating that is tracked for the seller. All of the metadata returned under each node for the <b>ratingTemplates</b> array will apply to this rating type. For example, the value <code>OVERALL_EXPERIENCE</code> indicates the rating is for the overall transaction experience. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackRatingTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the ratingKey property.
    */
    public function setRatingKey(?string $value): void {
        $this->ratingKey = $value;
    }

    /**
     * Sets the ratingLabel property value. This field provides more details about and/or provides guidance on the corresponding rating type. For example, the rating label of <b>Rate this transaction</b> describes the feedback for the user to enter for an <code>OVERALL_EXPERIENCE</code> <b>ratingKey</b>.
     * @param string|null $value Value to set for the ratingLabel property.
    */
    public function setRatingLabel(?string $value): void {
        $this->ratingLabel = $value;
    }

    /**
     * Sets the ratingValueType property value. This enumerated value indicates the type of data used to provide the specific feedback rating.<br><p>If set to <code>PREDEFINED</code> or <code>RANGE</code>, is returned here, more information on the supported values will be returned under the <b>acceptableValues</b> array. If <code>FREETEXT</code> is returned here, the maximum number of characters supported can be seen in the <b>maximumCharactersAllowed</b> field.</p> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackRatingValueTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the ratingValueType property.
    */
    public function setRatingValueType(?string $value): void {
        $this->ratingValueType = $value;
    }

    /**
     * Sets the required property value. If returned as <code>true</code>, this rating type is required when leaving feedback.
     * @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value): void {
        $this->required = $value;
    }

}
