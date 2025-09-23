# Swagger\Client\ClientApi

All URIs are relative to *https://api.mintsoft.co.uk*

| Method                                                    | HTTP request                    | Description              |
|-----------------------------------------------------------|---------------------------------|--------------------------|
| [**clientAddSubClient**](ClientApi.md#clientAddSubClient) | **POST** /api/Client/SubClients | Add SubClient            |
| [**clientGet**](ClientApi.md#clientGet)                   | **GET** /api/Client             | Get Clients              |
| [**clientSubClients**](ClientApi.md#clientSubClients)     | **GET** /api/Client/SubClients  | Get a list of SubClients |

# **clientAddSubClient**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult clientAddSubClient($client)

Add SubClient

Adds a New SubClient - Available to MasterClient users only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client = new \Swagger\Client\Model\MintsoftClientsAPIAddSubClient(); // \Swagger\Client\Model\ToolkitDataClassesClientsAPIAddSubClient | 

try {
    $result = $apiInstance->clientAddSubClient($client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientAddSubClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client** | [**\Swagger\Client\Model\ToolkitDataClassesClientsAPIAddSubClient**](../Model/ToolkitDataClassesClientsAPIAddSubClient.md)|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGet**
> clientGet($page_no, $limit, $since_last_updated)

Get Clients

Get list of Clients - Available to Admin users only

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_no = 56; // int | Page Number
$limit = 56; // int | Number per page (max 100)
$since_last_updated = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Updated Since

try {
    $apiInstance->clientGet($page_no, $limit, $since_last_updated);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_no** | **int**| Page Number | [optional]
 **limit** | **int**| Number per page (max 100) | [optional]
 **since_last_updated** | **\DateTime**| Updated Since | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientSubClients**
> \Swagger\Client\Model\ToolkitDataClassesClientsAPISubClient[] clientSubClients()

Get a list of SubClients

Get list of SubClients - Available to MasterClient users only

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->clientSubClients();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientSubClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesClientsAPISubClient[]**](../Model/ToolkitDataClassesClientsAPISubClient.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

