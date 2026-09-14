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
 * This type provides the details of the feedback comment left by the user.
*/
class Comment implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CommentCommentPeriod|null $commentPeriod This container indicates the timing of a feedback comment based on when it was left. It is only returned if a comment was provided. Possible values are 30 days, 90 days, 180 days, 365 days, or 5 years: <br><ul><li>Less than 30 days: 30 DAY</li> <li>Over 30 but less than 90 days: 90 DAY</li> <li>Over 90 but less than 180 days: 180 DAY</li> <li>Over 180 but less than 365 days: 365 DAY</li> <li>More than 365 days: 5 YEAR</li></ul>
    */
    private ?CommentCommentPeriod $commentPeriod = null;
    
    /**
     * @var string|null $commentText The text of the feedback comment, follow-up, or reply. HTML formatting and personal information (for example, phone numbers) are not allowed. This field is returned if a comment was provided for the feedback entry. If the comment was removed due to eBay policy, this field will contain '<code>--</code>' and the <strong>commentTextRemovedPerPolicy</strong> field will return <code>true</code>.
    */
    private ?string $commentText = null;
    
    /**
     * @var bool|null $commentTextRemovedPerPolicy If <code>true</code>, this boolean indicates the feedback follow-up or reply comment text was removed per eBay policy.  This field is only returned when a <strong>followupComment</strong> container is returned.
    */
    private ?bool $commentTextRemovedPerPolicy = null;
    
    /**
     * @var FeedbackCommentStateEnum|null $state This enumerated value indicates the state of the feedback (for example, <code>ENTERED</code>). This can be the state of the feedback comment, the follow-up comment, or the reply comment.
    */
    private ?FeedbackCommentStateEnum $state = null;
    
    /**
     * Instantiates a new Comment and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Comment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Comment {
        return new Comment();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the commentPeriod property value. This container indicates the timing of a feedback comment based on when it was left. It is only returned if a comment was provided. Possible values are 30 days, 90 days, 180 days, 365 days, or 5 years: <br><ul><li>Less than 30 days: 30 DAY</li> <li>Over 30 but less than 90 days: 90 DAY</li> <li>Over 90 but less than 180 days: 180 DAY</li> <li>Over 180 but less than 365 days: 365 DAY</li> <li>More than 365 days: 5 YEAR</li></ul>
     * @return CommentCommentPeriod|null
    */
    public function getCommentPeriod(): ?CommentCommentPeriod {
        return $this->commentPeriod;
    }

    /**
     * Gets the commentText property value. The text of the feedback comment, follow-up, or reply. HTML formatting and personal information (for example, phone numbers) are not allowed. This field is returned if a comment was provided for the feedback entry. If the comment was removed due to eBay policy, this field will contain '<code>--</code>' and the <strong>commentTextRemovedPerPolicy</strong> field will return <code>true</code>.
     * @return string|null
    */
    public function getCommentText(): ?string {
        return $this->commentText;
    }

    /**
     * Gets the commentTextRemovedPerPolicy property value. If <code>true</code>, this boolean indicates the feedback follow-up or reply comment text was removed per eBay policy.  This field is only returned when a <strong>followupComment</strong> container is returned.
     * @return bool|null
    */
    public function getCommentTextRemovedPerPolicy(): ?bool {
        return $this->commentTextRemovedPerPolicy;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'commentPeriod' => fn(ParseNode $n) => $o->setCommentPeriod($n->getObjectValue([CommentCommentPeriod::class, 'createFromDiscriminatorValue'])),
            'commentText' => fn(ParseNode $n) => $o->setCommentText($n->getStringValue()),
            'commentTextRemovedPerPolicy' => fn(ParseNode $n) => $o->setCommentTextRemovedPerPolicy($n->getBooleanValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(FeedbackCommentStateEnum::class)),
        ];
    }

    /**
     * Gets the state property value. This enumerated value indicates the state of the feedback (for example, <code>ENTERED</code>). This can be the state of the feedback comment, the follow-up comment, or the reply comment.
     * @return FeedbackCommentStateEnum|null
    */
    public function getState(): ?FeedbackCommentStateEnum {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('commentPeriod', $this->getCommentPeriod());
        $writer->writeStringValue('commentText', $this->getCommentText());
        $writer->writeBooleanValue('commentTextRemovedPerPolicy', $this->getCommentTextRemovedPerPolicy());
        $writer->writeEnumValue('state', $this->getState());
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
     * Sets the commentPeriod property value. This container indicates the timing of a feedback comment based on when it was left. It is only returned if a comment was provided. Possible values are 30 days, 90 days, 180 days, 365 days, or 5 years: <br><ul><li>Less than 30 days: 30 DAY</li> <li>Over 30 but less than 90 days: 90 DAY</li> <li>Over 90 but less than 180 days: 180 DAY</li> <li>Over 180 but less than 365 days: 365 DAY</li> <li>More than 365 days: 5 YEAR</li></ul>
     * @param CommentCommentPeriod|null $value Value to set for the commentPeriod property.
    */
    public function setCommentPeriod(?CommentCommentPeriod $value): void {
        $this->commentPeriod = $value;
    }

    /**
     * Sets the commentText property value. The text of the feedback comment, follow-up, or reply. HTML formatting and personal information (for example, phone numbers) are not allowed. This field is returned if a comment was provided for the feedback entry. If the comment was removed due to eBay policy, this field will contain '<code>--</code>' and the <strong>commentTextRemovedPerPolicy</strong> field will return <code>true</code>.
     * @param string|null $value Value to set for the commentText property.
    */
    public function setCommentText(?string $value): void {
        $this->commentText = $value;
    }

    /**
     * Sets the commentTextRemovedPerPolicy property value. If <code>true</code>, this boolean indicates the feedback follow-up or reply comment text was removed per eBay policy.  This field is only returned when a <strong>followupComment</strong> container is returned.
     * @param bool|null $value Value to set for the commentTextRemovedPerPolicy property.
    */
    public function setCommentTextRemovedPerPolicy(?bool $value): void {
        $this->commentTextRemovedPerPolicy = $value;
    }

    /**
     * Sets the state property value. This enumerated value indicates the state of the feedback (for example, <code>ENTERED</code>). This can be the state of the feedback comment, the follow-up comment, or the reply comment.
     * @param FeedbackCommentStateEnum|null $value Value to set for the state property.
    */
    public function setState(?FeedbackCommentStateEnum $value): void {
        $this->state = $value;
    }

}
