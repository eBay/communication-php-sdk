<?php

namespace EBay\Communication\Generated\Notification\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that describes the details of the topic search response.
*/
class TopicSearchResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $href The path to the call URI that produced the current page of results.
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit The value of the limit parameter submitted in the request, which is the maximum number of items to return per page, from the result set. A result set is the complete set of results returned by the method.<br><br><span class="tablenote"><b>Note:</b> Though this parameter is not required to be submitted in the request, the parameter defaults to <code>20</code> if omitted.</span>
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next The URL to access the next set of results. This field includes a <strong>continuation_token</strong>. No <b>prev</b> field is returned, but this value is persistent during the session so that you can use it to return to the next page.<br><br>This field is not returned if fewer records than specified by the <strong>limit</strong> field are returned.
    */
    private ?string $next = null;
    
    /**
     * @var array<Topic>|null $topics An array of topics that match the specified criteria.
    */
    private ?array $topics = null;
    
    /**
     * @var int|null $total The total number of matches for the search criteria.
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new TopicSearchResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TopicSearchResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TopicSearchResponse {
        return new TopicSearchResponse();
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
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'topics' => fn(ParseNode $n) => $o->setTopics($n->getCollectionOfObjectValues([Topic::class, 'createFromDiscriminatorValue'])),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. The path to the call URI that produced the current page of results.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. The value of the limit parameter submitted in the request, which is the maximum number of items to return per page, from the result set. A result set is the complete set of results returned by the method.<br><br><span class="tablenote"><b>Note:</b> Though this parameter is not required to be submitted in the request, the parameter defaults to <code>20</code> if omitted.</span>
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. The URL to access the next set of results. This field includes a <strong>continuation_token</strong>. No <b>prev</b> field is returned, but this value is persistent during the session so that you can use it to return to the next page.<br><br>This field is not returned if fewer records than specified by the <strong>limit</strong> field are returned.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the topics property value. An array of topics that match the specified criteria.
     * @return array<Topic>|null
    */
    public function getTopics(): ?array {
        return $this->topics;
    }

    /**
     * Gets the total property value. The total number of matches for the search criteria.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('next', $this->getNext());
        $writer->writeCollectionOfObjectValues('topics', $this->getTopics());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the href property value. The path to the call URI that produced the current page of results.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. The value of the limit parameter submitted in the request, which is the maximum number of items to return per page, from the result set. A result set is the complete set of results returned by the method.<br><br><span class="tablenote"><b>Note:</b> Though this parameter is not required to be submitted in the request, the parameter defaults to <code>20</code> if omitted.</span>
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. The URL to access the next set of results. This field includes a <strong>continuation_token</strong>. No <b>prev</b> field is returned, but this value is persistent during the session so that you can use it to return to the next page.<br><br>This field is not returned if fewer records than specified by the <strong>limit</strong> field are returned.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the topics property value. An array of topics that match the specified criteria.
     * @param array<Topic>|null $value Value to set for the topics property.
    */
    public function setTopics(?array $value): void {
        $this->topics = $value;
    }

    /**
     * Sets the total property value. The total number of matches for the search criteria.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
