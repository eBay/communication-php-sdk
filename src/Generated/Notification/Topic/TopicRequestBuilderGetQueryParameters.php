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

namespace EBay\Communication\Generated\Notification\Topic;

/**
 * This method returns a paginated collection of all supported topics, along with the details for the topics. This information includes supported schema versions, formats, and other metadata for the topics.<br><br>Applications can subscribe to any of the topics for a supported schema version and format, limited by the authorization scopes required to subscribe to the topic.<br><br>A topic specifies the type of information to be received and the data types associated with an event. An event occurs in the eBay system, such as when a user requests deletion or revokes access for an application. An event is an instance of an event type (topic).
*/
class TopicRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("continuation_token")
     * @var string|null $continuationToken This string value can be used to return the next page in the result set. The string to use here is returned in the <b>next</b> field of the current page of results.
    */
    public ?string $continuationToken = null;
    
    /**
     * @var string|null $limit The maximum number of notification topics to return per page from the result set.<br><br><b>Min:</b> 10<br><br><b>Max:</b> 100<br><br><b>Default:</b> 20
    */
    public ?string $limit = null;
    
    /**
     * Instantiates a new TopicRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $continuation_token This string value can be used to return the next page in the result set. The string to use here is returned in the <b>next</b> field of the current page of results.
     * @param string|null $limit The maximum number of notification topics to return per page from the result set.<br><br><b>Min:</b> 10<br><br><b>Max:</b> 100<br><br><b>Default:</b> 20
    */
    public function __construct(?string $continuation_token = null, ?string $limit = null) {
        $this->continuationToken = $continuation_token;
        $this->limit = $limit;
    }

}
