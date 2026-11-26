# ChangeLog

## 0.3.0 (11/26/2026)

### Breaking changes

- The Negotiation API moved to the Offers and Leads SDK, where it has the same operations.

- The following clients were removed:
  - `NegotiationClient`
- The following members were removed from `CommunicationClient`:
  - `$negotiation`

### Security

- `KiotaAuthProvider` created with an empty `$allowedHosts` list no longer returns the access token for every host. It now requires the URL's host to be in the list.

### Added

- Local mock servers: a base URL may use plain `http` when its host is a loopback host (`127.0.0.1`, `::1` or `localhost`) that you also pass in `$allowedHosts`, for example `allowedHosts: ['127.0.0.1']`. Every other host still requires `https`. `CommunicationConfiguration::LOOPBACK_HOSTS` lists the loopback hosts.
- `CommunicationConfiguration::untrustedReason()` says why a URL may not receive the access token, and `CommunicationConfiguration::normalizeHost()` normalizes a host the same way the SDK compares hosts.

### Changed

- Updated the `feedback` OpenAPI document to the latest definitions.
- Hosts are compared lowercased and without IPv6 brackets, so `[::1]` and `::1` match.
- A rejected base URL now says whether the scheme or the host is not trusted.

## 0.2.0 (09/14/2026)

### Breaking changes

#### Changed signatures

`NegotiationClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `findEligibleItems` | `(?string $limit, ?string $offset, ?string $accessToken, ?RequestOptions $requestOptions)` | `(?int $limit, ?int $offset, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `sendOfferToInterestedBuyers` | `(CreateOffersRequest $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(CreateOffersRequest $body, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
