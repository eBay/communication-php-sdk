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
 * The type that defines the fields for the <b>respondToFeedback</b> request.
*/
class RespondToFeedbackRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $feedbackId Use this field to provide the unique identifier for the feedback being responded to, used to specify the feedback entry associated with the feedback response. This value can be returned using the <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback"  target="_blank">getFeedback</a> method (<a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.feedbackId"  target="_blank">feedbackId</a> field).
    */
    private ?string $feedbackId = null;
    
    /**
     * @var string|null $recipientUserId Use this field to provide the identifier of the user who provided the original feedback. This value can be returned using the <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback"  target="_blank">getFeedback</a> method (<a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.providerUserDetail.userId"  target="_blank">userId</a> field).<br><br><span class="tablenote"><b>Note:</b> Both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
    */
    private ?string $recipientUserId = null;
    
    /**
     * @var string|null $responseText Use this field to provide the text content of the response. This field is used to provide additional context or address the feedback given by the order partner. No HTML formatting or personal information (such as phone numbers) is permitted.<br><br><b>Maximum length:</b> 500 characters.
    */
    private ?string $responseText = null;
    
    /**
     * @var string|null $responseType Set this enumerated value to describe the type of response being submitted (for example, a <code>REPLY</code> or a <code>FOLLOW_UP</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/api:ResponseTypeEnum'>eBay API documentation</a>
    */
    private ?string $responseType = null;
    
    /**
     * Instantiates a new RespondToFeedbackRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RespondToFeedbackRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RespondToFeedbackRequest {
        return new RespondToFeedbackRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the feedbackId property value. Use this field to provide the unique identifier for the feedback being responded to, used to specify the feedback entry associated with the feedback response. This value can be returned using the <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback"  target="_blank">getFeedback</a> method (<a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.feedbackId"  target="_blank">feedbackId</a> field).
     * @return string|null
    */
    public function getFeedbackId(): ?string {
        return $this->feedbackId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'feedbackId' => fn(ParseNode $n) => $o->setFeedbackId($n->getStringValue()),
            'recipientUserId' => fn(ParseNode $n) => $o->setRecipientUserId($n->getStringValue()),
            'responseText' => fn(ParseNode $n) => $o->setResponseText($n->getStringValue()),
            'responseType' => fn(ParseNode $n) => $o->setResponseType($n->getStringValue()),
        ];
    }

    /**
     * Gets the recipientUserId property value. Use this field to provide the identifier of the user who provided the original feedback. This value can be returned using the <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback"  target="_blank">getFeedback</a> method (<a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.providerUserDetail.userId"  target="_blank">userId</a> field).<br><br><span class="tablenote"><b>Note:</b> Both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     * @return string|null
    */
    public function getRecipientUserId(): ?string {
        return $this->recipientUserId;
    }

    /**
     * Gets the responseText property value. Use this field to provide the text content of the response. This field is used to provide additional context or address the feedback given by the order partner. No HTML formatting or personal information (such as phone numbers) is permitted.<br><br><b>Maximum length:</b> 500 characters.
     * @return string|null
    */
    public function getResponseText(): ?string {
        return $this->responseText;
    }

    /**
     * Gets the responseType property value. Set this enumerated value to describe the type of response being submitted (for example, a <code>REPLY</code> or a <code>FOLLOW_UP</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/api:ResponseTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getResponseType(): ?string {
        return $this->responseType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('feedbackId', $this->getFeedbackId());
        $writer->writeStringValue('recipientUserId', $this->getRecipientUserId());
        $writer->writeStringValue('responseText', $this->getResponseText());
        $writer->writeStringValue('responseType', $this->getResponseType());
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
     * Sets the feedbackId property value. Use this field to provide the unique identifier for the feedback being responded to, used to specify the feedback entry associated with the feedback response. This value can be returned using the <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback"  target="_blank">getFeedback</a> method (<a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.feedbackId"  target="_blank">feedbackId</a> field).
     * @param string|null $value Value to set for the feedbackId property.
    */
    public function setFeedbackId(?string $value): void {
        $this->feedbackId = $value;
    }

    /**
     * Sets the recipientUserId property value. Use this field to provide the identifier of the user who provided the original feedback. This value can be returned using the <a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback"  target="_blank">getFeedback</a> method (<a href="/api-docs/commerce/feedback/resources/feedback/methods/getFeedback#response.feedbackEntries.providerUserDetail.userId"  target="_blank">userId</a> field).<br><br><span class="tablenote"><b>Note:</b> Both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     * @param string|null $value Value to set for the recipientUserId property.
    */
    public function setRecipientUserId(?string $value): void {
        $this->recipientUserId = $value;
    }

    /**
     * Sets the responseText property value. Use this field to provide the text content of the response. This field is used to provide additional context or address the feedback given by the order partner. No HTML formatting or personal information (such as phone numbers) is permitted.<br><br><b>Maximum length:</b> 500 characters.
     * @param string|null $value Value to set for the responseText property.
    */
    public function setResponseText(?string $value): void {
        $this->responseText = $value;
    }

    /**
     * Sets the responseType property value. Set this enumerated value to describe the type of response being submitted (for example, a <code>REPLY</code> or a <code>FOLLOW_UP</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/api:ResponseTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the responseType property.
    */
    public function setResponseType(?string $value): void {
        $this->responseType = $value;
    }

}
