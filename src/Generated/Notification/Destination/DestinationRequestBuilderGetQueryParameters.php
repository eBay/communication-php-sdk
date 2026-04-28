<?php

namespace EBay\Communication\Generated\Notification\Destination;

/**
 * This method allows applications to retrieve a paginated collection of destination resources and related details. The details include the destination names, statuses, and configurations, including the endpoints and verification tokens.
*/
class DestinationRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("continuation_token")
     * @var string|null $continuationToken This string value can be used to return the next page in the result set. The string to use here is returned in the <b>next</b> field of the current page of results.
    */
    public ?string $continuationToken = null;
    
    /**
     * @var string|null $limit The maximum number of destinations to return per page from the result set.<br><br><b>Min:</b> 10<br><br><b>Max:</b> 100<br><br><b>Default:</b> 20
    */
    public ?string $limit = null;
    
    /**
     * Instantiates a new DestinationRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $continuation_token This string value can be used to return the next page in the result set. The string to use here is returned in the <b>next</b> field of the current page of results.
     * @param string|null $limit The maximum number of destinations to return per page from the result set.<br><br><b>Min:</b> 10<br><br><b>Max:</b> 100<br><br><b>Default:</b> 20
    */
    public function __construct(?string $continuation_token = null, ?string $limit = null) {
        $this->continuationToken = $continuation_token;
        $this->limit = $limit;
    }

}
