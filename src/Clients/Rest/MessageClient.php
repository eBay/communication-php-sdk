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

namespace EBay\Communication\Clients\Rest;

use EBay\Communication\Configuration\CommunicationConfiguration;
use EBay\Communication\Configuration\KiotaAuthProvider;
use EBay\Communication\Configuration\RequestOptions;
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
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class MessageClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly CommunicationConfiguration $config,
    ) {}

    /** @return array<string,string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions?->headers ?? []
        );
    }

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function bulkUpdateConversation(BulkUpdateConversationsRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?BulkUpdateConversationsResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->bulk_update_conversation()->post($body, new Bulk_update_conversationRequestBuilderPostRequestConfiguration(headers: $headers))->wait()
        );
    }

    public function getConversation(
        string $conversationId,
        ?string $conversationType = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetMessagesByConversationIdResponse {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->conversation()->byConversation_id($conversationId)->get(
                new WithConversation_ItemRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: WithConversation_ItemRequestBuilderGetRequestConfiguration::createQueryParameters(
                        conversation_type: $conversationType,
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
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
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->conversation()->get(
                new ConversationRequestBuilderGetRequestConfiguration(
                    headers: $headers,
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
            )->wait()
        );
    }

    public function sendMessage(SendMessageRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SendMessageResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->send_message()->post($body, new Send_messageRequestBuilderPostRequestConfiguration(headers: $headers))->wait()
        );
    }

    public function updateConversation(UpdateConversationRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->update_conversation()->post($body, new Update_conversationRequestBuilderPostRequestConfiguration(headers: $headers))->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = $accessToken ?? $this->config->accessToken
            ?? throw new \RuntimeException('No access token. Pass $accessToken per-call or set CommunicationConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): MessageApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->messageBaseUrl);
        return new MessageApiClient($adapter);
    }
}
