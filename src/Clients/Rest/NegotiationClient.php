<?php

namespace EBay\Communication\Clients\Rest;

use EBay\Communication\Configuration\CommunicationConfiguration;
use EBay\Communication\Configuration\RequestOptions;
use EBay\Communication\Configuration\TokenContext;
use EBay\Communication\Generated\Negotiation\NegotiationApiClient;
use EBay\Communication\Generated\Negotiation\Models\CreateOffersRequest;
use EBay\Communication\Generated\Negotiation\Models\PagedEligibleItemCollection;
use EBay\Communication\Generated\Negotiation\Models\SendOfferToInterestedBuyersCollectionResponse;
use EBay\Communication\Generated\Negotiation\Find_eligible_items\Find_eligible_itemsRequestBuilderGetRequestConfiguration;

final class NegotiationClient
{
    public function __construct(
        private readonly NegotiationApiClient $kiota,
        private readonly CommunicationConfiguration $config,
    ) {}

    private function applyHeaders(mixed $headers, ?RequestOptions $requestOptions): void
    {
        foreach ($this->config->defaultRequestOptions->headers as $key => $value) {
            $headers->tryAdd($key, $value);
        }
        if ($requestOptions !== null) {
            foreach ($requestOptions->headers as $key => $value) {
                $headers->tryAdd($key, $value);
            }
        }
    }

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
    public function findEligibleItems(
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?PagedEligibleItemCollection {
        TokenContext::set($accessToken);
        return $this->kiota->find_eligible_items()->get(
            new Find_eligible_itemsRequestBuilderGetRequestConfiguration(
                headers: $this->mergedHeaders($requestOptions),
                queryParameters: Find_eligible_itemsRequestBuilderGetRequestConfiguration::createQueryParameters(
                    limit: $limit,
                    offset: $offset,
                ),
            )
        )->wait();
    }

    public function sendOfferToInterestedBuyers(CreateOffersRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?SendOfferToInterestedBuyersCollectionResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->send_offer_to_interested_buyers()->post($body, fn($c) => $this->applyHeaders($c->headers, $requestOptions))->wait();
    }
}
