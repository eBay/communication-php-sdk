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

namespace EBay\Communication\Generated\Message\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the response payload of the <strong>bulkUpdateConversation</strong> method.
*/
class BulkUpdateConversationsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ConversationsMetadata|null $conversationsMetadata This container returns metadata from the call, such as how many conversations were updated, how many succeeded, and how many failed.
    */
    private ?ConversationsMetadata $conversationsMetadata = null;
    
    /**
     * @var array<ConversationsResponse>|null $conversationsResponse This array returns a list of each conversation specified in the request and if the requested update was successful or failed.
    */
    private ?array $conversationsResponse = null;
    
    /**
     * Instantiates a new BulkUpdateConversationsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkUpdateConversationsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BulkUpdateConversationsResponse {
        return new BulkUpdateConversationsResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the conversationsMetadata property value. This container returns metadata from the call, such as how many conversations were updated, how many succeeded, and how many failed.
     * @return ConversationsMetadata|null
    */
    public function getConversationsMetadata(): ?ConversationsMetadata {
        return $this->conversationsMetadata;
    }

    /**
     * Gets the conversationsResponse property value. This array returns a list of each conversation specified in the request and if the requested update was successful or failed.
     * @return array<ConversationsResponse>|null
    */
    public function getConversationsResponse(): ?array {
        return $this->conversationsResponse;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conversationsMetadata' => fn(ParseNode $n) => $o->setConversationsMetadata($n->getObjectValue([ConversationsMetadata::class, 'createFromDiscriminatorValue'])),
            'conversationsResponse' => fn(ParseNode $n) => $o->setConversationsResponse($n->getCollectionOfObjectValues([ConversationsResponse::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('conversationsMetadata', $this->getConversationsMetadata());
        $writer->writeCollectionOfObjectValues('conversationsResponse', $this->getConversationsResponse());
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
     * Sets the conversationsMetadata property value. This container returns metadata from the call, such as how many conversations were updated, how many succeeded, and how many failed.
     * @param ConversationsMetadata|null $value Value to set for the conversationsMetadata property.
    */
    public function setConversationsMetadata(?ConversationsMetadata $value): void {
        $this->conversationsMetadata = $value;
    }

    /**
     * Sets the conversationsResponse property value. This array returns a list of each conversation specified in the request and if the requested update was successful or failed.
     * @param array<ConversationsResponse>|null $value Value to set for the conversationsResponse property.
    */
    public function setConversationsResponse(?array $value): void {
        $this->conversationsResponse = $value;
    }

}
