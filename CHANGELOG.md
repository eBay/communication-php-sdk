# ChangeLog

## 0.2.0 (09/14/2026)

### Breaking changes

#### Changed signatures

`NegotiationClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `findEligibleItems` | `(?string $limit, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?int $limit, ?int $offset, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `sendOfferToInterestedBuyers` | `(CreateOffersRequest $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(CreateOffersRequest $body, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
