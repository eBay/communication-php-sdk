# ChangeLog

## 1.0.0 (09/14/2026)

**Breaking changes**
- The following operations changed signature on `NegotiationClient`:
  - `findEligibleItems`: `(?string, ?string, ?string, ?RequestOptions)` → `(?string, ?string, ?string, ?string, ?RequestOptions)`
  - `sendOfferToInterestedBuyers`: `(CreateOffersRequest, ?string, ?RequestOptions)` → `(CreateOffersRequest, ?string, ?string, ?RequestOptions)`
