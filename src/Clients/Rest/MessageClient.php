<?php

namespace EBay\Communication\Clients\Rest;

use EBay\Communication\Configuration\CommunicationConfiguration;
use EBay\Communication\Configuration\RequestOptions;
use EBay\Communication\Configuration\TokenContext;
use EBay\Communication\Generated\Message\MessageApiClient;
use EBay\Communication\Generated\Message\Models\BulkUpdateConversationsRequest;
use EBay\Communication\Generated\Message\Models\BulkUpdateConversationsResponse;
use EBay\Communication\Generated\Message\Models\GetAllMyConversationsResponse;
use EBay\Communication\Generated\Message\Models\GetMessagesByConversationIdResponse;
use EBay\Communication\Generated\Message\Models\SendMessageRequest;
use EBay\Communication\Generated\Message\Models\SendMessageResponse;
use EBay\Communication\Generated\Message\Models\UpdateConversationRequest;
use EBay\Communication\Generated\Message\Bulk_update_conversation\Bulk_update_conversationRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Message\Conversation\ConversationRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Message\Conversation\Item\WithConversation_ItemRequestBuilderGetRequestConfiguration;
use EBay\Communication\Generated\Message\Send_message\Send_messageRequestBuilderPostRequestConfiguration;
use EBay\Communication\Generated\Message\Update_conversation\Update_conversationRequestBuilderPostRequestConfiguration;

final class MessageClient
{
    public function __construct(
        private readonly MessageApiClient $kiota,
        private readonly CommunicationConfiguration $config,
    ) {}

    /** @return array<string,string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        $headers = $this->config->defaultRequestOptions->headers;
        foreach ($requestOptions?->headers ?? [] as $key => $value) {
            if (!array_key_exists($key, $headers)) {
                $headers[$key] = $value;
            }
        }
        return $headers;
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function bulkUpdateConversation(BulkUpdateConversationsRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?BulkUpdateConversationsResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->bulk_update_conversation()->post($body, new Bulk_update_conversationRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function getConversation(
        string $conversationId,
        ?string $conversationType = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetMessagesByConversationIdResponse {
        TokenContext::set($accessToken);
        return $this->kiota->conversation()->byConversation_id($conversationId)->get(
            new WithConversation_ItemRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: WithConversation_ItemRequestBuilderGetRequestConfiguration::createQueryParameters(
                    conversation_type: $conversationType,
                    limit: $limit,
                    offset: $offset,
                ),
            )
        )->wait();
    }

    public function getConversations(
        ?string $conversationType = null,
        ?string $conversationStatus = null,
        ?string $endTime = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $otherPartyUsername = null,
        ?string $referenceId = null,
        ?string $referenceType = null,
        ?string $startTime = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetAllMyConversationsResponse {
        TokenContext::set($accessToken);
        return $this->kiota->conversation()->get(
            new ConversationRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: ConversationRequestBuilderGetRequestConfiguration::createQueryParameters(
                    conversation_status: $conversationStatus,
                    conversation_type: $conversationType,
                    end_time: $endTime,
                    limit: $limit,
                    offset: $offset,
                    other_party_username: $otherPartyUsername,
                    reference_id: $referenceId,
                    reference_type: $referenceType,
                    start_time: $startTime,
                ),
            )
        )->wait();
    }

    public function sendMessage(SendMessageRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SendMessageResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->send_message()->post($body, new Send_messageRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }

    public function updateConversation(UpdateConversationRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->update_conversation()->post($body, new Update_conversationRequestBuilderPostRequestConfiguration(headers: $this->mergedHeaders($requestOptions)))->wait();
    }
}
