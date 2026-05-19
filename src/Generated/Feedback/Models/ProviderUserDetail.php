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
 * This type provides the details of the user who provided the feedback of a <b>getFeedback</b> response.
*/
class ProviderUserDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $feedbackScore This integer indicates the feedback score of the feedback provider at the time of providing this specific feedback.
    */
    private ?int $feedbackScore = null;
    
    /**
     * @var string|null $feedbackStar This enumerated value provides the visual star representation of the feedback score (for example, <code>YELLOW_STAR</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackStarTypeEnum'>eBay API documentation</a>
    */
    private ?string $feedbackStar = null;
    
    /**
     * @var string|null $role This enumerated value indicates the user's role in the transaction (<code>BUYER</code> or <code>SELLER</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:UserRoleEnum'>eBay API documentation</a>
    */
    private ?string $role = null;
    
    /**
     * @var array<ProviderUserDetailUserAttributes>|null $userAttributes This array lists additional attributes that relate to the user (such as verification status).
    */
    private ?array $userAttributes = null;
    
    /**
     * @var string|null $userId This field indicates the unique identifier of the user who gave the feedback.<br><br><span class="tablenote"><b>Note:</b> Select developers will not receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new ProviderUserDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProviderUserDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProviderUserDetail {
        return new ProviderUserDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the feedbackScore property value. This integer indicates the feedback score of the feedback provider at the time of providing this specific feedback.
     * @return int|null
    */
    public function getFeedbackScore(): ?int {
        return $this->feedbackScore;
    }

    /**
     * Gets the feedbackStar property value. This enumerated value provides the visual star representation of the feedback score (for example, <code>YELLOW_STAR</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackStarTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getFeedbackStar(): ?string {
        return $this->feedbackStar;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'feedbackScore' => fn(ParseNode $n) => $o->setFeedbackScore($n->getIntegerValue()),
            'feedbackStar' => fn(ParseNode $n) => $o->setFeedbackStar($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getStringValue()),
            'userAttributes' => fn(ParseNode $n) => $o->setUserAttributes($n->getCollectionOfObjectValues([ProviderUserDetailUserAttributes::class, 'createFromDiscriminatorValue'])),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the role property value. This enumerated value indicates the user's role in the transaction (<code>BUYER</code> or <code>SELLER</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:UserRoleEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getRole(): ?string {
        return $this->role;
    }

    /**
     * Gets the userAttributes property value. This array lists additional attributes that relate to the user (such as verification status).
     * @return array<ProviderUserDetailUserAttributes>|null
    */
    public function getUserAttributes(): ?array {
        return $this->userAttributes;
    }

    /**
     * Gets the userId property value. This field indicates the unique identifier of the user who gave the feedback.<br><br><span class="tablenote"><b>Note:</b> Select developers will not receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('feedbackScore', $this->getFeedbackScore());
        $writer->writeStringValue('feedbackStar', $this->getFeedbackStar());
        $writer->writeStringValue('role', $this->getRole());
        $writer->writeCollectionOfObjectValues('userAttributes', $this->getUserAttributes());
        $writer->writeStringValue('userId', $this->getUserId());
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
     * Sets the feedbackScore property value. This integer indicates the feedback score of the feedback provider at the time of providing this specific feedback.
     * @param int|null $value Value to set for the feedbackScore property.
    */
    public function setFeedbackScore(?int $value): void {
        $this->feedbackScore = $value;
    }

    /**
     * Sets the feedbackStar property value. This enumerated value provides the visual star representation of the feedback score (for example, <code>YELLOW_STAR</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:FeedbackStarTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the feedbackStar property.
    */
    public function setFeedbackStar(?string $value): void {
        $this->feedbackStar = $value;
    }

    /**
     * Sets the role property value. This enumerated value indicates the user's role in the transaction (<code>BUYER</code> or <code>SELLER</code>). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/feedback/types/fdb:UserRoleEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the role property.
    */
    public function setRole(?string $value): void {
        $this->role = $value;
    }

    /**
     * Sets the userAttributes property value. This array lists additional attributes that relate to the user (such as verification status).
     * @param array<ProviderUserDetailUserAttributes>|null $value Value to set for the userAttributes property.
    */
    public function setUserAttributes(?array $value): void {
        $this->userAttributes = $value;
    }

    /**
     * Sets the userId property value. This field indicates the unique identifier of the user who gave the feedback.<br><br><span class="tablenote"><b>Note:</b> Select developers will not receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
