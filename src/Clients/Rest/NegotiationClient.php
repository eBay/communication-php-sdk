<?php

namespace EBay\Communication\Clients\Rest;

use EBay\Communication\Configuration\TokenContext;
use EBay\Communication\Generated\Negotiation\NegotiationApiClient;
use EBay\Communication\Generated\Negotiation\Models\CreateOffersRequest;
use EBay\Communication\Generated\Negotiation\Models\PagedEligibleItemCollection;
use EBay\Communication\Generated\Negotiation\Models\SendOfferToInterestedBuyersCollectionResponse;

final class NegotiationClient
{
    public function __construct(private readonly NegotiationApiClient $kiota) {}

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function findEligibleItems(?string $accessToken = null): ?PagedEligibleItemCollection
    {
        TokenContext::set($accessToken);
        return $this->kiota->find_eligible_items()->get()->wait();
    }

    public function sendOfferToInterestedBuyers(CreateOffersRequest $body, ?string $accessToken = null): ?SendOfferToInterestedBuyersCollectionResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->send_offer_to_interested_buyers()->post($body)->wait();
    }
}
