<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\Communication\Generated\Feedback\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FeedbackAggregationTypeEnum extends Enum {
    public const A_V_G = "AVG";
    public const C_O_U_N_T = "COUNT";
    public const U_N_I_Q_U_E__P_R_O_V_I_D_E_R__C_O_U_N_T = "UNIQUE_PROVIDER_COUNT";
    public const P_O_S_I_T_I_V_E__P_E_R_C_E_N_T__E_X_C_L_U_D_I_N_G__N_E_U_T_R_A_L__F_E_E_D_B_A_C_K = "POSITIVE_PERCENT_EXCLUDING_NEUTRAL_FEEDBACK";
}
