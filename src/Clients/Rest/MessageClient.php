<?php

namespace EBay\Communication\Clients\Rest;

use EBay\Communication\Configuration\TokenContext;
use EBay\Communication\Generated\Message\MessageApiClient;
use EBay\Communication\Generated\Message\Models\BulkUpdateConversationsRequest;
use EBay\Communication\Generated\Message\Models\BulkUpdateConversationsResponse;
use EBay\Communication\Generated\Message\Models\GetAllMyConversationsResponse;
use EBay\Communication\Generated\Message\Models\GetMessagesByConversationIdResponse;
use EBay\Communication\Generated\Message\Models\SendMessageRequest;
use EBay\Communication\Generated\Message\Models\SendMessageResponse;
use EBay\Communication\Generated\Message\Models\UpdateConversationRequest;

final class MessageClient
{
    public function __construct(private readonly MessageApiClient $kiota) {}

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function bulkUpdateConversation(BulkUpdateConversationsRequest $body, ?string $accessToken = null): ?BulkUpdateConversationsResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_update_conversation()->post($body)->wait();
    }

    public function getConversation(string $conversationId, ?string $accessToken = null): ?GetMessagesByConversationIdResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->conversation()->byConversation_id($conversationId)->get()->wait();
    }

    public function getConversations(?string $accessToken = null): ?GetAllMyConversationsResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->conversation()->get()->wait();
    }

    public function sendMessage(SendMessageRequest $body, ?string $accessToken = null): ?SendMessageResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->send_message()->post($body)->wait();
    }

    public function updateConversation(UpdateConversationRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->update_conversation()->post($body)->wait();
    }
}
