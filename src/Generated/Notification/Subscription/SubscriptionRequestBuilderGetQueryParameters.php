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

namespace EBay\Communication\Generated\Notification\Subscription;

/**
 * This method allows applications to retrieve a list of all subscriptions. The list returned is a paginated collection of subscription resources.<br><br>Subscriptions allow applications to express interest in notifications and keep receiving the information relevant to their business.
*/
class SubscriptionRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("continuation_token")
     * @var string|null $continuationToken This string value can be used to return the next page in the result set. The string to use here is returned in the next field of the current page of results.
    */
    public ?string $continuationToken = null;
    
    /**
     * @var string|null $limit The maximum number of subscriptions to return per page from the result set.<br><br><b>Min:</b> 10<br><br><b>Max:</b> 100<br><br><b>Default:</b> 20
    */
    public ?string $limit = null;
    
    /**
     * Instantiates a new SubscriptionRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $continuation_token This string value can be used to return the next page in the result set. The string to use here is returned in the next field of the current page of results.
     * @param string|null $limit The maximum number of subscriptions to return per page from the result set.<br><br><b>Min:</b> 10<br><br><b>Max:</b> 100<br><br><b>Default:</b> 20
    */
    public function __construct(?string $continuation_token = null, ?string $limit = null) {
        $this->continuationToken = $continuation_token;
        $this->limit = $limit;
    }

}
