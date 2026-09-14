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

class UserAttributeEnum extends Enum {
    public const U_S_E_R__V_E_R_I_F_I_E_D = "USER_VERIFIED";
    public const U_S_E_R__R_E_G_I_S_T_E_R_E_D = "USER_REGISTERED";
    public const U_S_E_R__S_A_M_E__A_S__S_I_G_N_E_D__I_N__U_S_E_R = "USER_SAME_AS_SIGNED_IN_USER";
    public const U_S_E_R__P_R_O_F_I_L_E__P_R_I_V_A_T_E = "USER_PROFILE_PRIVATE";
}
