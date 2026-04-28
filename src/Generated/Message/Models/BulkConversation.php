<?php

namespace EBay\Communication\Generated\Message\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type specifies the conversations to be updated.
*/
class BulkConversation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $conversationId This field indicates the unique identifier of the conversation that is to be updated.<br><br>Use the <a href="/api-docs/commerce/message/resources/conversation/methods/getConversations" target="_blank">getConversations</a> method to retrieve conversation ID values.
    */
    private ?string $conversationId = null;
    
    /**
     * @var string|null $conversationStatus This field indicates the status for which to update the associated conversation.<br><br><b>Valid values:</b><ul><li><code>ACTIVE</code></li><li><code>ARCHIVE</code></li><li><code>DELETE</code></li><li><code>READ</code></li><li><code>UNREAD</code></li></ul>
    */
    private ?string $conversationStatus = null;
    
    /**
     * @var string|null $conversationType This field specifies the existing type of the conversation that is to be updated.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This value <b>cannot</b> be updated using this method, but is required for each conversation being updated.</p></div><br><b>Valid values:</b><ul><li><code>FROM_MEMBERS</code></li><li><code>FROM_EBAY</code></li></ul>
    */
    private ?string $conversationType = null;
    
    /**
     * Instantiates a new BulkConversation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkConversation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BulkConversation {
        return new BulkConversation();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the conversationId property value. This field indicates the unique identifier of the conversation that is to be updated.<br><br>Use the <a href="/api-docs/commerce/message/resources/conversation/methods/getConversations" target="_blank">getConversations</a> method to retrieve conversation ID values.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->conversationId;
    }

    /**
     * Gets the conversationStatus property value. This field indicates the status for which to update the associated conversation.<br><br><b>Valid values:</b><ul><li><code>ACTIVE</code></li><li><code>ARCHIVE</code></li><li><code>DELETE</code></li><li><code>READ</code></li><li><code>UNREAD</code></li></ul>
     * @return string|null
    */
    public function getConversationStatus(): ?string {
        return $this->conversationStatus;
    }

    /**
     * Gets the conversationType property value. This field specifies the existing type of the conversation that is to be updated.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This value <b>cannot</b> be updated using this method, but is required for each conversation being updated.</p></div><br><b>Valid values:</b><ul><li><code>FROM_MEMBERS</code></li><li><code>FROM_EBAY</code></li></ul>
     * @return string|null
    */
    public function getConversationType(): ?string {
        return $this->conversationType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'conversationStatus' => fn(ParseNode $n) => $o->setConversationStatus($n->getStringValue()),
            'conversationType' => fn(ParseNode $n) => $o->setConversationType($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeStringValue('conversationStatus', $this->getConversationStatus());
        $writer->writeStringValue('conversationType', $this->getConversationType());
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
     * Sets the conversationId property value. This field indicates the unique identifier of the conversation that is to be updated.<br><br>Use the <a href="/api-docs/commerce/message/resources/conversation/methods/getConversations" target="_blank">getConversations</a> method to retrieve conversation ID values.
     * @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the conversationStatus property value. This field indicates the status for which to update the associated conversation.<br><br><b>Valid values:</b><ul><li><code>ACTIVE</code></li><li><code>ARCHIVE</code></li><li><code>DELETE</code></li><li><code>READ</code></li><li><code>UNREAD</code></li></ul>
     * @param string|null $value Value to set for the conversationStatus property.
    */
    public function setConversationStatus(?string $value): void {
        $this->conversationStatus = $value;
    }

    /**
     * Sets the conversationType property value. This field specifies the existing type of the conversation that is to be updated.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> This value <b>cannot</b> be updated using this method, but is required for each conversation being updated.</p></div><br><b>Valid values:</b><ul><li><code>FROM_MEMBERS</code></li><li><code>FROM_EBAY</code></li></ul>
     * @param string|null $value Value to set for the conversationType property.
    */
    public function setConversationType(?string $value): void {
        $this->conversationType = $value;
    }

}
