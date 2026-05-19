#!/usr/bin/env bash

# Copyright 2026 eBay Inc.
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

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

echo "Adding license headers to generated files..."
"$SCRIPT_DIR/add-license-headers.sh" "$SCRIPT_DIR/src/Generated"

echo "Done. Run 'composer dump-autoload' if new namespaces were added."
