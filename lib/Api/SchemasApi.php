<?php
/**
 * SchemasApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Meltwater Streaming API v2
 *
 * The Meltwater Streaming API provides the needed resources for Meltwater clients to create & delete REST Hooks and stream Meltwater search results to your specified destination.
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@api.meltwater.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * SchemasApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SchemasApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return SchemasApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getEditorialStreamingJsonSchema
     *
     * Editorial Streaming JSON schema
     *
     * @param string $user_key The &#x60;user_key&#x60; from [developer.meltwater.com](https://developer.meltwater.com/admin/applications/). (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function getEditorialStreamingJsonSchema($user_key)
    {
        list($response) = $this->getEditorialStreamingJsonSchemaWithHttpInfo($user_key);
        return $response;
    }

    /**
     * Operation getEditorialStreamingJsonSchemaWithHttpInfo
     *
     * Editorial Streaming JSON schema
     *
     * @param string $user_key The &#x60;user_key&#x60; from [developer.meltwater.com](https://developer.meltwater.com/admin/applications/). (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEditorialStreamingJsonSchemaWithHttpInfo($user_key)
    {
        // verify the required parameter 'user_key' is set
        if ($user_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_key when calling getEditorialStreamingJsonSchema');
        }
        // parse inputs
        $resourcePath = "/v2/schemas/editorial_streaming.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // header params
        if ($user_key !== null) {
            $headerParams['user-key'] = $this->apiClient->getSerializer()->toHeaderValue($user_key);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2/schemas/editorial_streaming.json'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getSocialStreamingJsonSchema
     *
     * Social Streaming JSON schema
     *
     * @param string $user_key The &#x60;user_key&#x60; from [developer.meltwater.com](https://developer.meltwater.com/admin/applications/). (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function getSocialStreamingJsonSchema($user_key)
    {
        list($response) = $this->getSocialStreamingJsonSchemaWithHttpInfo($user_key);
        return $response;
    }

    /**
     * Operation getSocialStreamingJsonSchemaWithHttpInfo
     *
     * Social Streaming JSON schema
     *
     * @param string $user_key The &#x60;user_key&#x60; from [developer.meltwater.com](https://developer.meltwater.com/admin/applications/). (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSocialStreamingJsonSchemaWithHttpInfo($user_key)
    {
        // verify the required parameter 'user_key' is set
        if ($user_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_key when calling getSocialStreamingJsonSchema');
        }
        // parse inputs
        $resourcePath = "/v2/schemas/social_streaming.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // header params
        if ($user_key !== null) {
            $headerParams['user-key'] = $this->apiClient->getSerializer()->toHeaderValue($user_key);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2/schemas/social_streaming.json'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}