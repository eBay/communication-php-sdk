<?php

namespace EBay\Communication\Clients\Rest;

use EBay\Communication\Configuration\CommunicationConfiguration;
use EBay\Communication\Configuration\RequestOptions;
use EBay\Communication\Configuration\TokenContext;
use EBay\Communication\Generated\Feedback\FeedbackApiClient;
use EBay\Communication\Generated\Feedback\Models\AwaitingFeedbackResponse;
use EBay\Communication\Generated\Feedback\Models\GetFeedbackResponse;
use EBay\Communication\Generated\Feedback\Models\GetFeedbackRatingSummaryResponse;
use EBay\Communication\Generated\Feedback\Models\LeaveFeedbackRequest;
use EBay\Communication\Generated\Feedback\Models\LeaveFeedbackResponse;
use EBay\Communication\Generated\Feedback\Models\RespondToFeedbackRequest;

final class FeedbackClient
{
    public function __construct(
        private readonly FeedbackApiClient $kiota,
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

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getItemsAwaitingFeedback(?string $accessToken = null, ?RequestOptions $requestOptions = null): ?AwaitingFeedbackResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->awaiting_feedback()->get(fn($c) => $this->applyHeaders($c->headers, $requestOptions))->wait();
    }

    public function getFeedback(?string $accessToken = null, ?RequestOptions $requestOptions = null): ?GetFeedbackResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->feedback()->get(fn($c) => $this->applyHeaders($c->headers, $requestOptions))->wait();
    }

    public function leaveFeedback(LeaveFeedbackRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?LeaveFeedbackResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->feedback()->post($body, fn($c) => $this->applyHeaders($c->headers, $requestOptions))->wait();
    }

    public function getFeedbackRatingSummary(?string $accessToken = null, ?RequestOptions $requestOptions = null): ?GetFeedbackRatingSummaryResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->feedback_rating_summary()->get(fn($c) => $this->applyHeaders($c->headers, $requestOptions))->wait();
    }

    public function respondToFeedback(RespondToFeedbackRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->respond_to_feedback()->post($body, fn($c) => $this->applyHeaders($c->headers, $requestOptions))->wait();
    }
}
