# Swagger\Client\AuthApi

All URIs are relative to *https://api.mintsoft.co.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authPost**](AuthApi.md#authPost) | **POST** /api/Auth | Authenticate to get an API Key.


# **authPost**
> authPost($request)

Authenticate to get an API Key.

The API key is used for authentication of all other API calls. API keys last 24 hours.  After that point you'll start receiving 401 unauthorized responses and will need to  renew the API key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\MintsoftAPICommonClassesMintsoftAuthRequest(); // \Swagger\Client\Model\MintsoftAPICommonClassesMintsoftAuthRequest | 

try {
    $apiInstance->authPost($request);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\MintsoftAPICommonClassesMintsoftAuthRequest**](../Model/MintsoftAPICommonClassesMintsoftAuthRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

