<?php
/**
 * OauthApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * The Meltwater API
 *
 * The Meltwater API provides the needed resources for Meltwater clients to create & delete REST Hooks and stream Meltwater search results to your specified destination.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@api.meltwater.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * OauthApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OauthApi
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
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.meltwater.io');
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
     * @return OauthApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createToken
     *
     * Create an access token
     *
     * @param string $user_key The &#x60;user_key&#x60; from [developer.meltwater.io](https://developer.meltwater.io/admin/applications/). (required)
     * @param string $authorization &#x60;client_id:client_secret&#x60;  Basic Auth (RFC2617) credentials. Must contain the realm &#x60;Basic&#x60; followed by a Base64-encoded &#x60;client_id&#x60;:&#x60;client_secret&#x60; pair.   #### Example:      Basic aAlfbb1haWxDSXhhDXxxZWKJAyZXQ&#x3D; (required)
     * @param string $grant_type OAuth2 grant type, use &#x60;client_credentials&#x60; (required)
     * @param string $scope OAuth2 scope, use &#x60;search&#x60; (required)
     * @return \Swagger\Client\Model\OAuth2Token
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createToken($user_key, $authorization, $grant_type, $scope)
    {
        list($response) = $this->createTokenWithHttpInfo($user_key, $authorization, $grant_type, $scope);
        return $response;
    }

    /**
     * Operation createTokenWithHttpInfo
     *
     * Create an access token
     *
     * @param string $user_key The &#x60;user_key&#x60; from [developer.meltwater.io](https://developer.meltwater.io/admin/applications/). (required)
     * @param string $authorization &#x60;client_id:client_secret&#x60;  Basic Auth (RFC2617) credentials. Must contain the realm &#x60;Basic&#x60; followed by a Base64-encoded &#x60;client_id&#x60;:&#x60;client_secret&#x60; pair.   #### Example:      Basic aAlfbb1haWxDSXhhDXxxZWKJAyZXQ&#x3D; (required)
     * @param string $grant_type OAuth2 grant type, use &#x60;client_credentials&#x60; (required)
     * @param string $scope OAuth2 scope, use &#x60;search&#x60; (required)
     * @return Array of \Swagger\Client\Model\OAuth2Token, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createTokenWithHttpInfo($user_key, $authorization, $grant_type, $scope)
    {
        // verify the required parameter 'user_key' is set
        if ($user_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_key when calling createToken');
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling createToken');
        }
        // verify the required parameter 'grant_type' is set
        if ($grant_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $grant_type when calling createToken');
        }
        // verify the required parameter 'scope' is set
        if ($scope === null) {
            throw new \InvalidArgumentException('Missing the required parameter $scope when calling createToken');
        }
        // parse inputs
        $resourcePath = "/oauth2/token";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // header params
        if ($user_key !== null) {
            $headerParams['user-key'] = $this->apiClient->getSerializer()->toHeaderValue($user_key);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = $this->apiClient->getSerializer()->toFormValue($grant_type);
        }
        // form params
        if ($scope !== null) {
            $formParams['scope'] = $this->apiClient->getSerializer()->toFormValue($scope);
        }
        
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\OAuth2Token',
                '/oauth2/token'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\OAuth2Token', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\OAuth2Token', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
