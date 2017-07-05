# SwaggerClient-php
The Meltwater Streaming API provides the needed resources for Meltwater clients to create & delete REST Hooks and stream Meltwater search results to your specified destination.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0.0
- Package version: 2.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ClientsApi();
$user_key = "user_key_example"; // string | The `user_key` from [developer.meltwater.com](https://developer.meltwater.com/admin/applications/).
$authorization = "authorization_example"; // string | `email`:`password`    Basic Auth (RFC2617) credentials. Must contain the realm `Basic` followed by a  Base64-encoded `email`:`password` pair using your Meltwater credentials.    #### Example:        Basic bXlfZW1haWxAZXhhbXJzZWNyZXQ=

try {
    $result = $api_instance->createClientCredentials($user_key, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->createClientCredentials: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.meltwater.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ClientsApi* | [**createClientCredentials**](docs/Api/ClientsApi.md#createclientcredentials) | **POST** /v2/clients | Register new client
*ClientsApi* | [**deleteClientCredentials**](docs/Api/ClientsApi.md#deleteclientcredentials) | **DELETE** /v2/clients/{client_id} | Delete client.
*HooksApi* | [**createHook**](docs/Api/HooksApi.md#createhook) | **POST** /v2/hooks | Creates a hook for one of your predefined searches.
*HooksApi* | [**deleteHook**](docs/Api/HooksApi.md#deletehook) | **DELETE** /v2/hooks/{hook_id} | Delete an existing hook.
*HooksApi* | [**getAllHooks**](docs/Api/HooksApi.md#getallhooks) | **GET** /v2/hooks | List all hooks.
*Oauth2Api* | [**createToken**](docs/Api/Oauth2Api.md#createtoken) | **POST** /oauth2/token | Create an access token
*SchemasApi* | [**getEditorialStreamingJsonSchema**](docs/Api/SchemasApi.md#geteditorialstreamingjsonschema) | **GET** /v2/schemas/editorial_streaming.json | Editorial Streaming JSON schema
*SchemasApi* | [**getSocialStreamingJsonSchema**](docs/Api/SchemasApi.md#getsocialstreamingjsonschema) | **GET** /v2/schemas/social_streaming.json | Social Streaming JSON schema
*SearchesApi* | [**getAllSearches**](docs/Api/SearchesApi.md#getallsearches) | **GET** /v2/searches | List your saved searches.
*Swagger_docApi* | [**getCompleteSwaggerSpec**](docs/Api/Swagger_docApi.md#getcompleteswaggerspec) | **GET** /v2/swagger_doc | Meltwater API Swagger Spec


## Documentation For Models

 - [ClientCredentials](docs/Model/ClientCredentials.md)
 - [Error](docs/Model/Error.md)
 - [ErrorsCollection](docs/Model/ErrorsCollection.md)
 - [Hook](docs/Model/Hook.md)
 - [HooksCollection](docs/Model/HooksCollection.md)
 - [OAuth2Token](docs/Model/OAuth2Token.md)
 - [PostV2Hooks](docs/Model/PostV2Hooks.md)
 - [Search](docs/Model/Search.md)
 - [SearchesCollection](docs/Model/SearchesCollection.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author

support@api.meltwater.com


