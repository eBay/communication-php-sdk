# ChangeLog

## 2.0.0 (09/14/2026)

**Breaking changes**
- The following operations changed signature on `NegotiationClient`:
  - `findEligibleItems`: `(?string, ?string, ?string, ?string, ?RequestOptions)` → `(?int, ?int, ?string, ?string, ?RequestOptions)`

## 1.0.0 (09/14/2026)

**Breaking changes**
- The following operations changed signature on `NegotiationClient`:
  - `findEligibleItems`: `(?string, ?string, ?string, ?RequestOptions)` → `(?string, ?string, ?string, ?string, ?RequestOptions)`
  - `sendOfferToInterestedBuyers`: `(CreateOffersRequest, ?string, ?RequestOptions)` → `(CreateOffersRequest, ?string, ?string, ?RequestOptions)`
