#!/usr/bin/env bash
set -euo pipefail

echo "Regenerating REST clients via Kiota..."

kiota generate -l php \
  -d specs/commerce_feedback_v1_beta_oas3.yaml \
  -c FeedbackApiClient \
  -n 'EBay\Communication\Generated\Feedback' \
  -o src/Generated/Feedback \
  --ebc --co

kiota generate -l php \
  -d specs/commerce_message_v1_oas3.yaml \
  -c MessageApiClient \
  -n 'EBay\Communication\Generated\Message' \
  -o src/Generated/Message \
  --ebc --co

kiota generate -l php \
  -d specs/commerce_notification_v1_oas3.yaml \
  -c NotificationApiClient \
  -n 'EBay\Communication\Generated\Notification' \
  -o src/Generated/Notification \
  --ebc --co

kiota generate -l php \
  -d specs/sell_negotiation_v1_oas3.yaml \
  -c NegotiationApiClient \
  -n 'EBay\Communication\Generated\Negotiation' \
  -o src/Generated/Negotiation \
  --ebc --co

echo "Done. Run 'composer dump-autoload' if new namespaces were added."
