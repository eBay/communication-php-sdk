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
 * This type provides attributes for returned feedback entries.
*/
class FeedbackDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $automatedFeedback If the returned value is <code>true</code>, feedback was generated and added automatically by eBay. If a seller has a feedback score 10 or less, eBay automatically leaves feedback. The buyer can choose to override the eBay feedback and leave feedback of their own. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Detailed Seller Ratings (DSRs) are not provided by eBay, only a predefined comment and a positive rating.</span></p>
    */
    private ?bool $automatedFeedback = null;
    
    /**
     * @var FeedbackRatingValuesEnum|null $commentType This enumerated value indicates the type of feedback: <code>POSITIVE</code>, <code>NEUTRAL</code>, <code>NEGATIVE</code>. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Sellers can only leave positive feedback for buyers.</span></p>
    */
    private ?FeedbackRatingValuesEnum $commentType = null;
    
    /**
     * @var bool|null $eligibleForRevision This boolean indicates whether the feedback is eligible for revision. If returned as <code>true</code>, it means the feedback can be modified. Feedback that is older than 30 days or has already been revised once cannot be erased or further revised.
    */
    private ?bool $eligibleForRevision = null;
    
    /**
     * @var Comment|null $feedbackComment This container provides the feedback comment left by a user when submitting feedback for a seller or buyer.
    */
    private ?Comment $feedbackComment = null;
    
    /**
     * @var string|null $feedbackEnteredDate The timestamp when the feedback was submitted.
    */
    private ?string $feedbackEnteredDate = null;
    
    /**
     * @var FeedbackEnteredPeriod|null $feedbackEnteredPeriod This container represents the duration since feedback was entered, expressed as a numeric value and a unit of time in days.
    */
    private ?FeedbackEnteredPeriod $feedbackEnteredPeriod = null;
    
    /**
     * @var string|null $feedbackId The unique identifier of the feedback entry.
    */
    private ?string $feedbackId = null;
    
    /**
     * @var array<FeedbackRating>|null $feedbackRatings This array contains a list of ratings attached to feedback.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This array only applies to buyers feedback for sellers (sellers can only give positive feedback to buyers).</span></p>
    */
    private ?array $feedbackRatings = null;
    
    /**
     * @var int|null $feedbackScore The feedback receiver's feedback score after receiving this specific feedback.
    */
    private ?int $feedbackScore = null;
    
    /**
     * @var FeedbackStateEnum|null $feedbackState This enumerated value indicates the current state of the feedback entry (for example, <code>ENTERED</code>).
    */
    private ?FeedbackStateEnum $feedbackState = null;
    
    /**
     * @var Comment|null $followupComment This container provides the details of any follow-up comment left. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>A buyer leaves follow-up comments and a seller leaves reply comments.</span></p>
    */
    private ?Comment $followupComment = null;
    
    /**
     * @var bool|null $hasImages If returned as <code>true</code>, this boolean indicates that the feedback entry has one or more images attached. If <code>false</code>, there are no images attached.
    */
    private ?bool $hasImages = null;
    
    /**
     * @var array<Image>|null $images This array contains the list of attached images.
    */
    private ?array $images = null;
    
    /**
     * @var OrderLineItemSummary|null $orderLineItemSummary This container provides a summary of the line item associated with the feedback entry. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Certain fields within this container are returned only when the request uses the <strong>Authorization code grant flow</strong> (user access token) and the <strong>user_id</strong> matches the authenticated user. These fields are not returned when accessing a different <strong>user_id</strong> or when using the <strong>Client credentials grant flow</strong> (application access token). See <a href="#h3-oauth-scope">OAuth scope</a> for details on the flows and required permissions.</span></p>
    */
    private ?OrderLineItemSummary $orderLineItemSummary = null;
    
    /**
     * @var ProviderUserDetail|null $providerUserDetail This container details the attributes of the user who provided the feedback.
    */
    private ?ProviderUserDetail $providerUserDetail = null;
    
    /**
     * @var bool|null $repliedBeforeFollowup If returned as <code>true</code>, this boolean indicates the feedback reply was given by the seller before the follow-up comment was given by the buyer.
    */
    private ?bool $repliedBeforeFollowup = null;
    
    /**
     * @var Comment|null $replyComment This container provides the details of any reply to the feedback.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>A buyer leaves follow-up comments and a seller leaves reply comments.</span></p>
    */
    private ?Comment $replyComment = null;
    
    /**
     * @var array<Topic>|null $topics This array provides descriptions of AI-generated insights related to a feedback entry for the specified <strong>filter</strong> topic. The feedback provided is considered relevant to the requested <strong>topic</strong>. For example, when using the request parameter filter of <code>topics:product-satisfaction</code>, the returned array might be: <p><pre>{<br>  "coarseTopic" : "product-satisfaction",<br>  "highlightedTexts" : [<br>    "This machine is amazing",<br>    "Very happy with this purchase"<br>    ],<br>  "sentiment" : "Positive"<br>}</pre></p><p>If no topics exist for that feedback, an empty array is returned.</p>
    */
    private ?array $topics = null;
    
    /**
     * Instantiates a new FeedbackDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedbackDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedbackDetail {
        return new FeedbackDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the automatedFeedback property value. If the returned value is <code>true</code>, feedback was generated and added automatically by eBay. If a seller has a feedback score 10 or less, eBay automatically leaves feedback. The buyer can choose to override the eBay feedback and leave feedback of their own. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Detailed Seller Ratings (DSRs) are not provided by eBay, only a predefined comment and a positive rating.</span></p>
     * @return bool|null
    */
    public function getAutomatedFeedback(): ?bool {
        return $this->automatedFeedback;
    }

    /**
     * Gets the commentType property value. This enumerated value indicates the type of feedback: <code>POSITIVE</code>, <code>NEUTRAL</code>, <code>NEGATIVE</code>. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Sellers can only leave positive feedback for buyers.</span></p>
     * @return FeedbackRatingValuesEnum|null
    */
    public function getCommentType(): ?FeedbackRatingValuesEnum {
        return $this->commentType;
    }

    /**
     * Gets the eligibleForRevision property value. This boolean indicates whether the feedback is eligible for revision. If returned as <code>true</code>, it means the feedback can be modified. Feedback that is older than 30 days or has already been revised once cannot be erased or further revised.
     * @return bool|null
    */
    public function getEligibleForRevision(): ?bool {
        return $this->eligibleForRevision;
    }

    /**
     * Gets the feedbackComment property value. This container provides the feedback comment left by a user when submitting feedback for a seller or buyer.
     * @return Comment|null
    */
    public function getFeedbackComment(): ?Comment {
        return $this->feedbackComment;
    }

    /**
     * Gets the feedbackEnteredDate property value. The timestamp when the feedback was submitted.
     * @return string|null
    */
    public function getFeedbackEnteredDate(): ?string {
        return $this->feedbackEnteredDate;
    }

    /**
     * Gets the feedbackEnteredPeriod property value. This container represents the duration since feedback was entered, expressed as a numeric value and a unit of time in days.
     * @return FeedbackEnteredPeriod|null
    */
    public function getFeedbackEnteredPeriod(): ?FeedbackEnteredPeriod {
        return $this->feedbackEnteredPeriod;
    }

    /**
     * Gets the feedbackId property value. The unique identifier of the feedback entry.
     * @return string|null
    */
    public function getFeedbackId(): ?string {
        return $this->feedbackId;
    }

    /**
     * Gets the feedbackRatings property value. This array contains a list of ratings attached to feedback.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This array only applies to buyers feedback for sellers (sellers can only give positive feedback to buyers).</span></p>
     * @return array<FeedbackRating>|null
    */
    public function getFeedbackRatings(): ?array {
        return $this->feedbackRatings;
    }

    /**
     * Gets the feedbackScore property value. The feedback receiver's feedback score after receiving this specific feedback.
     * @return int|null
    */
    public function getFeedbackScore(): ?int {
        return $this->feedbackScore;
    }

    /**
     * Gets the feedbackState property value. This enumerated value indicates the current state of the feedback entry (for example, <code>ENTERED</code>).
     * @return FeedbackStateEnum|null
    */
    public function getFeedbackState(): ?FeedbackStateEnum {
        return $this->feedbackState;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'automatedFeedback' => fn(ParseNode $n) => $o->setAutomatedFeedback($n->getBooleanValue()),
            'commentType' => fn(ParseNode $n) => $o->setCommentType($n->getEnumValue(FeedbackRatingValuesEnum::class)),
            'eligibleForRevision' => fn(ParseNode $n) => $o->setEligibleForRevision($n->getBooleanValue()),
            'feedbackComment' => fn(ParseNode $n) => $o->setFeedbackComment($n->getObjectValue([Comment::class, 'createFromDiscriminatorValue'])),
            'feedbackEnteredDate' => fn(ParseNode $n) => $o->setFeedbackEnteredDate($n->getStringValue()),
            'feedbackEnteredPeriod' => fn(ParseNode $n) => $o->setFeedbackEnteredPeriod($n->getObjectValue([FeedbackEnteredPeriod::class, 'createFromDiscriminatorValue'])),
            'feedbackId' => fn(ParseNode $n) => $o->setFeedbackId($n->getStringValue()),
            'feedbackRatings' => fn(ParseNode $n) => $o->setFeedbackRatings($n->getCollectionOfObjectValues([FeedbackRating::class, 'createFromDiscriminatorValue'])),
            'feedbackScore' => fn(ParseNode $n) => $o->setFeedbackScore($n->getIntegerValue()),
            'feedbackState' => fn(ParseNode $n) => $o->setFeedbackState($n->getEnumValue(FeedbackStateEnum::class)),
            'followupComment' => fn(ParseNode $n) => $o->setFollowupComment($n->getObjectValue([Comment::class, 'createFromDiscriminatorValue'])),
            'hasImages' => fn(ParseNode $n) => $o->setHasImages($n->getBooleanValue()),
            'images' => fn(ParseNode $n) => $o->setImages($n->getCollectionOfObjectValues([Image::class, 'createFromDiscriminatorValue'])),
            'orderLineItemSummary' => fn(ParseNode $n) => $o->setOrderLineItemSummary($n->getObjectValue([OrderLineItemSummary::class, 'createFromDiscriminatorValue'])),
            'providerUserDetail' => fn(ParseNode $n) => $o->setProviderUserDetail($n->getObjectValue([ProviderUserDetail::class, 'createFromDiscriminatorValue'])),
            'repliedBeforeFollowup' => fn(ParseNode $n) => $o->setRepliedBeforeFollowup($n->getBooleanValue()),
            'replyComment' => fn(ParseNode $n) => $o->setReplyComment($n->getObjectValue([Comment::class, 'createFromDiscriminatorValue'])),
            'topics' => fn(ParseNode $n) => $o->setTopics($n->getCollectionOfObjectValues([Topic::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the followupComment property value. This container provides the details of any follow-up comment left. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>A buyer leaves follow-up comments and a seller leaves reply comments.</span></p>
     * @return Comment|null
    */
    public function getFollowupComment(): ?Comment {
        return $this->followupComment;
    }

    /**
     * Gets the hasImages property value. If returned as <code>true</code>, this boolean indicates that the feedback entry has one or more images attached. If <code>false</code>, there are no images attached.
     * @return bool|null
    */
    public function getHasImages(): ?bool {
        return $this->hasImages;
    }

    /**
     * Gets the images property value. This array contains the list of attached images.
     * @return array<Image>|null
    */
    public function getImages(): ?array {
        return $this->images;
    }

    /**
     * Gets the orderLineItemSummary property value. This container provides a summary of the line item associated with the feedback entry. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Certain fields within this container are returned only when the request uses the <strong>Authorization code grant flow</strong> (user access token) and the <strong>user_id</strong> matches the authenticated user. These fields are not returned when accessing a different <strong>user_id</strong> or when using the <strong>Client credentials grant flow</strong> (application access token). See <a href="#h3-oauth-scope">OAuth scope</a> for details on the flows and required permissions.</span></p>
     * @return OrderLineItemSummary|null
    */
    public function getOrderLineItemSummary(): ?OrderLineItemSummary {
        return $this->orderLineItemSummary;
    }

    /**
     * Gets the providerUserDetail property value. This container details the attributes of the user who provided the feedback.
     * @return ProviderUserDetail|null
    */
    public function getProviderUserDetail(): ?ProviderUserDetail {
        return $this->providerUserDetail;
    }

    /**
     * Gets the repliedBeforeFollowup property value. If returned as <code>true</code>, this boolean indicates the feedback reply was given by the seller before the follow-up comment was given by the buyer.
     * @return bool|null
    */
    public function getRepliedBeforeFollowup(): ?bool {
        return $this->repliedBeforeFollowup;
    }

    /**
     * Gets the replyComment property value. This container provides the details of any reply to the feedback.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>A buyer leaves follow-up comments and a seller leaves reply comments.</span></p>
     * @return Comment|null
    */
    public function getReplyComment(): ?Comment {
        return $this->replyComment;
    }

    /**
     * Gets the topics property value. This array provides descriptions of AI-generated insights related to a feedback entry for the specified <strong>filter</strong> topic. The feedback provided is considered relevant to the requested <strong>topic</strong>. For example, when using the request parameter filter of <code>topics:product-satisfaction</code>, the returned array might be: <p><pre>{<br>  "coarseTopic" : "product-satisfaction",<br>  "highlightedTexts" : [<br>    "This machine is amazing",<br>    "Very happy with this purchase"<br>    ],<br>  "sentiment" : "Positive"<br>}</pre></p><p>If no topics exist for that feedback, an empty array is returned.</p>
     * @return array<Topic>|null
    */
    public function getTopics(): ?array {
        return $this->topics;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('automatedFeedback', $this->getAutomatedFeedback());
        $writer->writeEnumValue('commentType', $this->getCommentType());
        $writer->writeBooleanValue('eligibleForRevision', $this->getEligibleForRevision());
        $writer->writeObjectValue('feedbackComment', $this->getFeedbackComment());
        $writer->writeStringValue('feedbackEnteredDate', $this->getFeedbackEnteredDate());
        $writer->writeObjectValue('feedbackEnteredPeriod', $this->getFeedbackEnteredPeriod());
        $writer->writeStringValue('feedbackId', $this->getFeedbackId());
        $writer->writeCollectionOfObjectValues('feedbackRatings', $this->getFeedbackRatings());
        $writer->writeIntegerValue('feedbackScore', $this->getFeedbackScore());
        $writer->writeEnumValue('feedbackState', $this->getFeedbackState());
        $writer->writeObjectValue('followupComment', $this->getFollowupComment());
        $writer->writeBooleanValue('hasImages', $this->getHasImages());
        $writer->writeCollectionOfObjectValues('images', $this->getImages());
        $writer->writeObjectValue('orderLineItemSummary', $this->getOrderLineItemSummary());
        $writer->writeObjectValue('providerUserDetail', $this->getProviderUserDetail());
        $writer->writeBooleanValue('repliedBeforeFollowup', $this->getRepliedBeforeFollowup());
        $writer->writeObjectValue('replyComment', $this->getReplyComment());
        $writer->writeCollectionOfObjectValues('topics', $this->getTopics());
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
     * Sets the automatedFeedback property value. If the returned value is <code>true</code>, feedback was generated and added automatically by eBay. If a seller has a feedback score 10 or less, eBay automatically leaves feedback. The buyer can choose to override the eBay feedback and leave feedback of their own. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Detailed Seller Ratings (DSRs) are not provided by eBay, only a predefined comment and a positive rating.</span></p>
     * @param bool|null $value Value to set for the automatedFeedback property.
    */
    public function setAutomatedFeedback(?bool $value): void {
        $this->automatedFeedback = $value;
    }

    /**
     * Sets the commentType property value. This enumerated value indicates the type of feedback: <code>POSITIVE</code>, <code>NEUTRAL</code>, <code>NEGATIVE</code>. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Sellers can only leave positive feedback for buyers.</span></p>
     * @param FeedbackRatingValuesEnum|null $value Value to set for the commentType property.
    */
    public function setCommentType(?FeedbackRatingValuesEnum $value): void {
        $this->commentType = $value;
    }

    /**
     * Sets the eligibleForRevision property value. This boolean indicates whether the feedback is eligible for revision. If returned as <code>true</code>, it means the feedback can be modified. Feedback that is older than 30 days or has already been revised once cannot be erased or further revised.
     * @param bool|null $value Value to set for the eligibleForRevision property.
    */
    public function setEligibleForRevision(?bool $value): void {
        $this->eligibleForRevision = $value;
    }

    /**
     * Sets the feedbackComment property value. This container provides the feedback comment left by a user when submitting feedback for a seller or buyer.
     * @param Comment|null $value Value to set for the feedbackComment property.
    */
    public function setFeedbackComment(?Comment $value): void {
        $this->feedbackComment = $value;
    }

    /**
     * Sets the feedbackEnteredDate property value. The timestamp when the feedback was submitted.
     * @param string|null $value Value to set for the feedbackEnteredDate property.
    */
    public function setFeedbackEnteredDate(?string $value): void {
        $this->feedbackEnteredDate = $value;
    }

    /**
     * Sets the feedbackEnteredPeriod property value. This container represents the duration since feedback was entered, expressed as a numeric value and a unit of time in days.
     * @param FeedbackEnteredPeriod|null $value Value to set for the feedbackEnteredPeriod property.
    */
    public function setFeedbackEnteredPeriod(?FeedbackEnteredPeriod $value): void {
        $this->feedbackEnteredPeriod = $value;
    }

    /**
     * Sets the feedbackId property value. The unique identifier of the feedback entry.
     * @param string|null $value Value to set for the feedbackId property.
    */
    public function setFeedbackId(?string $value): void {
        $this->feedbackId = $value;
    }

    /**
     * Sets the feedbackRatings property value. This array contains a list of ratings attached to feedback.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This array only applies to buyers feedback for sellers (sellers can only give positive feedback to buyers).</span></p>
     * @param array<FeedbackRating>|null $value Value to set for the feedbackRatings property.
    */
    public function setFeedbackRatings(?array $value): void {
        $this->feedbackRatings = $value;
    }

    /**
     * Sets the feedbackScore property value. The feedback receiver's feedback score after receiving this specific feedback.
     * @param int|null $value Value to set for the feedbackScore property.
    */
    public function setFeedbackScore(?int $value): void {
        $this->feedbackScore = $value;
    }

    /**
     * Sets the feedbackState property value. This enumerated value indicates the current state of the feedback entry (for example, <code>ENTERED</code>).
     * @param FeedbackStateEnum|null $value Value to set for the feedbackState property.
    */
    public function setFeedbackState(?FeedbackStateEnum $value): void {
        $this->feedbackState = $value;
    }

    /**
     * Sets the followupComment property value. This container provides the details of any follow-up comment left. <br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>A buyer leaves follow-up comments and a seller leaves reply comments.</span></p>
     * @param Comment|null $value Value to set for the followupComment property.
    */
    public function setFollowupComment(?Comment $value): void {
        $this->followupComment = $value;
    }

    /**
     * Sets the hasImages property value. If returned as <code>true</code>, this boolean indicates that the feedback entry has one or more images attached. If <code>false</code>, there are no images attached.
     * @param bool|null $value Value to set for the hasImages property.
    */
    public function setHasImages(?bool $value): void {
        $this->hasImages = $value;
    }

    /**
     * Sets the images property value. This array contains the list of attached images.
     * @param array<Image>|null $value Value to set for the images property.
    */
    public function setImages(?array $value): void {
        $this->images = $value;
    }

    /**
     * Sets the orderLineItemSummary property value. This container provides a summary of the line item associated with the feedback entry. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Certain fields within this container are returned only when the request uses the <strong>Authorization code grant flow</strong> (user access token) and the <strong>user_id</strong> matches the authenticated user. These fields are not returned when accessing a different <strong>user_id</strong> or when using the <strong>Client credentials grant flow</strong> (application access token). See <a href="#h3-oauth-scope">OAuth scope</a> for details on the flows and required permissions.</span></p>
     * @param OrderLineItemSummary|null $value Value to set for the orderLineItemSummary property.
    */
    public function setOrderLineItemSummary(?OrderLineItemSummary $value): void {
        $this->orderLineItemSummary = $value;
    }

    /**
     * Sets the providerUserDetail property value. This container details the attributes of the user who provided the feedback.
     * @param ProviderUserDetail|null $value Value to set for the providerUserDetail property.
    */
    public function setProviderUserDetail(?ProviderUserDetail $value): void {
        $this->providerUserDetail = $value;
    }

    /**
     * Sets the repliedBeforeFollowup property value. If returned as <code>true</code>, this boolean indicates the feedback reply was given by the seller before the follow-up comment was given by the buyer.
     * @param bool|null $value Value to set for the repliedBeforeFollowup property.
    */
    public function setRepliedBeforeFollowup(?bool $value): void {
        $this->repliedBeforeFollowup = $value;
    }

    /**
     * Sets the replyComment property value. This container provides the details of any reply to the feedback.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>A buyer leaves follow-up comments and a seller leaves reply comments.</span></p>
     * @param Comment|null $value Value to set for the replyComment property.
    */
    public function setReplyComment(?Comment $value): void {
        $this->replyComment = $value;
    }

    /**
     * Sets the topics property value. This array provides descriptions of AI-generated insights related to a feedback entry for the specified <strong>filter</strong> topic. The feedback provided is considered relevant to the requested <strong>topic</strong>. For example, when using the request parameter filter of <code>topics:product-satisfaction</code>, the returned array might be: <p><pre>{<br>  "coarseTopic" : "product-satisfaction",<br>  "highlightedTexts" : [<br>    "This machine is amazing",<br>    "Very happy with this purchase"<br>    ],<br>  "sentiment" : "Positive"<br>}</pre></p><p>If no topics exist for that feedback, an empty array is returned.</p>
     * @param array<Topic>|null $value Value to set for the topics property.
    */
    public function setTopics(?array $value): void {
        $this->topics = $value;
    }

}
