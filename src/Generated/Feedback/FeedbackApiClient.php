<?php

namespace EBay\Communication\Generated\Feedback;

use EBay\Communication\Generated\Feedback\Awaiting_feedback\Awaiting_feedbackRequestBuilder;
use EBay\Communication\Generated\Feedback\Feedback_rating_summary\Feedback_rating_summaryRequestBuilder;
use EBay\Communication\Generated\Feedback\Feedback\FeedbackRequestBuilder;
use EBay\Communication\Generated\Feedback\Respond_to_feedback\Respond_to_feedbackRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Serialization\Form\FormParseNodeFactory;
use Microsoft\Kiota\Serialization\Form\FormSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Multipart\MultipartSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class FeedbackApiClient extends BaseRequestBuilder 
{
    /**
     * The awaiting_feedback property
    */
    public function awaiting_feedback(): Awaiting_feedbackRequestBuilder {
        return new Awaiting_feedbackRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The feedback property
    */
    public function feedback(): FeedbackRequestBuilder {
        return new FeedbackRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The feedback_rating_summary property
    */
    public function feedback_rating_summary(): Feedback_rating_summaryRequestBuilder {
        return new Feedback_rating_summaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The respond_to_feedback property
    */
    public function respond_to_feedback(): Respond_to_feedbackRequestBuilder {
        return new Respond_to_feedbackRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new FeedbackApiClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}');
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(FormSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(MultipartSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(FormParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://api.ebay.com{basePath}');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

}
