# Swagger\Client\CourierApi

All URIs are relative to *https://api.mintsoft.co.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**courierGetCourierService**](CourierApi.md#courierGetCourierService) | **GET** /api/Courier/Services/{id} | 
[**courierGetCourierServiceTypes**](CourierApi.md#courierGetCourierServiceTypes) | **GET** /api/Courier/ServiceTypes | 
[**courierGetCourierServices**](CourierApi.md#courierGetCourierServices) | **GET** /api/Courier/Services | 
[**courierGetExternalCourierServiceNames**](CourierApi.md#courierGetExternalCourierServiceNames) | **GET** /api/Courier/Services/{id}/ExternalNames | 


# **courierGetCourierService**
> \Swagger\Client\Model\MintsoftShippingCourierService courierGetCourierService($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CourierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->courierGetCourierService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourierApi->courierGetCourierService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\MintsoftShippingCourierService**](../Model/ToolkitDataClassesShippingCourierService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courierGetCourierServiceTypes**
> \Swagger\Client\Model\MintsoftShippingCourierServiceType[] courierGetCourierServiceTypes()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CourierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->courierGetCourierServiceTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourierApi->courierGetCourierServiceTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MintsoftShippingCourierServiceType[]**](../Model/ToolkitDataClassesShippingCourierServiceType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courierGetCourierServices**
> \Swagger\Client\Model\MintsoftShippingCourierService[] courierGetCourierServices()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CourierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->courierGetCourierServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourierApi->courierGetCourierServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MintsoftShippingCourierService[]**](../Model/ToolkitDataClassesShippingCourierService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courierGetExternalCourierServiceNames**
> \Swagger\Client\Model\MintsoftShippingExternalCourierServiceName[] courierGetExternalCourierServiceNames($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CourierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->courierGetExternalCourierServiceNames($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourierApi->courierGetExternalCourierServiceNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\MintsoftShippingExternalCourierServiceName[]**](../Model/ToolkitDataClassesShippingExternalCourierServiceName.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

