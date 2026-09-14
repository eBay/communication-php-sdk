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

namespace EBay\Communication\Generated\Notification\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A type that describes the details of the topic.
*/
class Topic implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $authorizationScopes The authorization scopes required to subscribe to this topic.
    */
    private ?array $authorizationScopes = null;
    
    /**
     * @var ContextEnum|null $context The business context associated with this topic.
    */
    private ?ContextEnum $context = null;
    
    /**
     * @var string|null $description The description of the topic.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $filterable The indicator of whether this topic is filterable or not.
    */
    private ?bool $filterable = null;
    
    /**
     * @var ScopeEnum|null $scope The scope of this topic.
    */
    private ?ScopeEnum $scope = null;
    
    /**
     * @var StatusEnum|null $status The status of this topic.
    */
    private ?StatusEnum $status = null;
    
    /**
     * @var array<PayloadDetail>|null $supportedPayloads The supported payloads for this topic.
    */
    private ?array $supportedPayloads = null;
    
    /**
     * @var string|null $topicId The unique identifier for the topic.
    */
    private ?string $topicId = null;
    
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
     * Gets the authorizationScopes property value. The authorization scopes required to subscribe to this topic.
     * @return array<string>|null
    */
    public function getAuthorizationScopes(): ?array {
        return $this->authorizationScopes;
    }

    /**
     * Gets the context property value. The business context associated with this topic.
     * @return ContextEnum|null
    */
    public function getContext(): ?ContextEnum {
        return $this->context;
    }

    /**
     * Gets the description property value. The description of the topic.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authorizationScopes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAuthorizationScopes($val);
            },
            'context' => fn(ParseNode $n) => $o->setContext($n->getEnumValue(ContextEnum::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'filterable' => fn(ParseNode $n) => $o->setFilterable($n->getBooleanValue()),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getEnumValue(ScopeEnum::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(StatusEnum::class)),
            'supportedPayloads' => fn(ParseNode $n) => $o->setSupportedPayloads($n->getCollectionOfObjectValues([PayloadDetail::class, 'createFromDiscriminatorValue'])),
            'topicId' => fn(ParseNode $n) => $o->setTopicId($n->getStringValue()),
        ];
    }

    /**
     * Gets the filterable property value. The indicator of whether this topic is filterable or not.
     * @return bool|null
    */
    public function getFilterable(): ?bool {
        return $this->filterable;
    }

    /**
     * Gets the scope property value. The scope of this topic.
     * @return ScopeEnum|null
    */
    public function getScope(): ?ScopeEnum {
        return $this->scope;
    }

    /**
     * Gets the status property value. The status of this topic.
     * @return StatusEnum|null
    */
    public function getStatus(): ?StatusEnum {
        return $this->status;
    }

    /**
     * Gets the supportedPayloads property value. The supported payloads for this topic.
     * @return array<PayloadDetail>|null
    */
    public function getSupportedPayloads(): ?array {
        return $this->supportedPayloads;
    }

    /**
     * Gets the topicId property value. The unique identifier for the topic.
     * @return string|null
    */
    public function getTopicId(): ?string {
        return $this->topicId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('authorizationScopes', $this->getAuthorizationScopes());
        $writer->writeEnumValue('context', $this->getContext());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('filterable', $this->getFilterable());
        $writer->writeEnumValue('scope', $this->getScope());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeCollectionOfObjectValues('supportedPayloads', $this->getSupportedPayloads());
        $writer->writeStringValue('topicId', $this->getTopicId());
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
     * Sets the authorizationScopes property value. The authorization scopes required to subscribe to this topic.
     * @param array<string>|null $value Value to set for the authorizationScopes property.
    */
    public function setAuthorizationScopes(?array $value): void {
        $this->authorizationScopes = $value;
    }

    /**
     * Sets the context property value. The business context associated with this topic.
     * @param ContextEnum|null $value Value to set for the context property.
    */
    public function setContext(?ContextEnum $value): void {
        $this->context = $value;
    }

    /**
     * Sets the description property value. The description of the topic.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the filterable property value. The indicator of whether this topic is filterable or not.
     * @param bool|null $value Value to set for the filterable property.
    */
    public function setFilterable(?bool $value): void {
        $this->filterable = $value;
    }

    /**
     * Sets the scope property value. The scope of this topic.
     * @param ScopeEnum|null $value Value to set for the scope property.
    */
    public function setScope(?ScopeEnum $value): void {
        $this->scope = $value;
    }

    /**
     * Sets the status property value. The status of this topic.
     * @param StatusEnum|null $value Value to set for the status property.
    */
    public function setStatus(?StatusEnum $value): void {
        $this->status = $value;
    }

    /**
     * Sets the supportedPayloads property value. The supported payloads for this topic.
     * @param array<PayloadDetail>|null $value Value to set for the supportedPayloads property.
    */
    public function setSupportedPayloads(?array $value): void {
        $this->supportedPayloads = $value;
    }

    /**
     * Sets the topicId property value. The unique identifier for the topic.
     * @param string|null $value Value to set for the topicId property.
    */
    public function setTopicId(?string $value): void {
        $this->topicId = $value;
    }

}
