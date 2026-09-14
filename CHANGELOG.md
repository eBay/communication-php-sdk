# ChangeLog

## 0.2.0 (09/14/2026)

### Breaking changes

#### Changed signatures

`NegotiationClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `findEligibleItems` | `(?string, ?string, ?string, ?RequestOptions)` | `(?int, ?int, ?string, ?string, ?RequestOptions)` |
| `sendOfferToInterestedBuyers` | `(CreateOffersRequest, ?string, ?RequestOptions)` | `(CreateOffersRequest, ?string, ?string, ?RequestOptions)` |
