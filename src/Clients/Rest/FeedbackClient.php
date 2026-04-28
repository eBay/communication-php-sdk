<?php

namespace EBay\Communication\Clients\Rest;

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
    public function __construct(private readonly FeedbackApiClient $kiota) {}

    /** @param string|null $accessToken Per-call token; overrides config fallback. */
    public function getItemsAwaitingFeedback(?string $accessToken = null): ?AwaitingFeedbackResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->awaiting_feedback()->get()->wait();
    }

    public function getFeedback(?string $accessToken = null): ?GetFeedbackResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->feedback()->get()->wait();
    }

    public function leaveFeedback(LeaveFeedbackRequest $body, ?string $accessToken = null): ?LeaveFeedbackResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->feedback()->post($body)->wait();
    }

    public function getFeedbackRatingSummary(?string $accessToken = null): ?GetFeedbackRatingSummaryResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->feedback_rating_summary()->get()->wait();
    }

    public function respondToFeedback(RespondToFeedbackRequest $body, ?string $accessToken = null): mixed
    {
        TokenContext::set($accessToken);
        return $this->kiota->respond_to_feedback()->post($body)->wait();
    }
}
