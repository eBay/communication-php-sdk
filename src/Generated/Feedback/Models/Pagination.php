<?php

namespace EBay\Communication\Generated\Feedback\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type provides pagination information for the returned line items.
*/
class Pagination implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $count This value indicates the number of feedback entries on the current response page.
    */
    private ?int $count = null;
    
    /**
     * @var int|null $limit The value of the <b>limit</b> parameter submitted in the request. This is the maximum number of line items, as filtered, awaiting feedback to return per page from the result set. This field indicates the number of line items returned per page of data. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If this is the last or only page of the result set, the page may contain fewer line items than the <b>limit</b> value. </span></p><p>If a <b>limit</b> parameter was not included in the request, this value will default to <code>25</code>, returning up to 25 line items on each page.</p><p><b>Default: </b>25</p>
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next The relative URI for the next page of results starting with the resource name. This URI is returned if there is an additional page of results in the result set.
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset The value of the <b>offset</b> parameter submitted in the request. This field indicates how many results were skipped in the response. If an <b>offset</b> parameter was not included in the request, this value will default to <code>0</code>, returning the first page of results.<p><b>Default: </b>0</p>
    */
    private ?int $offset = null;
    
    /**
     * @var string|null $prev The relative URI for the previous page of results starting with the resource name. This URI is returned if there is a previous page of results in the result set.</p>
    */
    private ?string $prev = null;
    
    /**
     * @var int|null $total The total number of line items available that match the filter criteria. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the total value exceeds the limit value, there are multiple pages of results.</span></p>
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new Pagination and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Pagination
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Pagination {
        return new Pagination();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the count property value. This value indicates the number of feedback entries on the current response page.
     * @return int|null
    */
    public function getCount(): ?int {
        return $this->count;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'count' => fn(ParseNode $n) => $o->setCount($n->getIntegerValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the limit property value. The value of the <b>limit</b> parameter submitted in the request. This is the maximum number of line items, as filtered, awaiting feedback to return per page from the result set. This field indicates the number of line items returned per page of data. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If this is the last or only page of the result set, the page may contain fewer line items than the <b>limit</b> value. </span></p><p>If a <b>limit</b> parameter was not included in the request, this value will default to <code>25</code>, returning up to 25 line items on each page.</p><p><b>Default: </b>25</p>
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. The relative URI for the next page of results starting with the resource name. This URI is returned if there is an additional page of results in the result set.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. The value of the <b>offset</b> parameter submitted in the request. This field indicates how many results were skipped in the response. If an <b>offset</b> parameter was not included in the request, this value will default to <code>0</code>, returning the first page of results.<p><b>Default: </b>0</p>
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the prev property value. The relative URI for the previous page of results starting with the resource name. This URI is returned if there is a previous page of results in the result set.</p>
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the total property value. The total number of line items available that match the filter criteria. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the total value exceeds the limit value, there are multiple pages of results.</span></p>
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
        $writer->writeIntegerValue('count', $this->getCount());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('next', $this->getNext());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeStringValue('prev', $this->getPrev());
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
     * Sets the count property value. This value indicates the number of feedback entries on the current response page.
     * @param int|null $value Value to set for the count property.
    */
    public function setCount(?int $value): void {
        $this->count = $value;
    }

    /**
     * Sets the limit property value. The value of the <b>limit</b> parameter submitted in the request. This is the maximum number of line items, as filtered, awaiting feedback to return per page from the result set. This field indicates the number of line items returned per page of data. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If this is the last or only page of the result set, the page may contain fewer line items than the <b>limit</b> value. </span></p><p>If a <b>limit</b> parameter was not included in the request, this value will default to <code>25</code>, returning up to 25 line items on each page.</p><p><b>Default: </b>25</p>
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. The relative URI for the next page of results starting with the resource name. This URI is returned if there is an additional page of results in the result set.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. The value of the <b>offset</b> parameter submitted in the request. This field indicates how many results were skipped in the response. If an <b>offset</b> parameter was not included in the request, this value will default to <code>0</code>, returning the first page of results.<p><b>Default: </b>0</p>
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the prev property value. The relative URI for the previous page of results starting with the resource name. This URI is returned if there is a previous page of results in the result set.</p>
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the total property value. The total number of line items available that match the filter criteria. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the total value exceeds the limit value, there are multiple pages of results.</span></p>
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
