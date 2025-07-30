# Swagger\Client\ReturnApi

All URIs are relative to *https://api.mintsoft.co.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**returnAddReturnItem**](ReturnApi.md#returnAddReturnItem) | **POST** /api/Return/{id}/AddItem | 
[**returnAllocateItemLocation**](ReturnApi.md#returnAllocateItemLocation) | **POST** /api/Return/{id}/AllocateItemLocation | 
[**returnConfirmReturn**](ReturnApi.md#returnConfirmReturn) | **POST** /api/Return/{id}/Confirm | 
[**returnCreateReturn**](ReturnApi.md#returnCreateReturn) | **POST** /api/Return/CreateReturn/{OrderId} | 
[**returnGetReturn**](ReturnApi.md#returnGetReturn) | **GET** /api/Return/{id} | 
[**returnGetReturnItems**](ReturnApi.md#returnGetReturnItems) | **GET** /api/Return/{id}/Items | 
[**returnGetReturnReasons**](ReturnApi.md#returnGetReturnReasons) | **GET** /api/Return/Reasons | 
[**returnGetReturnsOnDate**](ReturnApi.md#returnGetReturnsOnDate) | **GET** /api/Return/SearchByDate | 


# **returnAddReturnItem**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult returnAddReturnItem($id, $item)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$item = new \Swagger\Client\Model\ToolkitDataClassesReturnsAPIReturnItemAPI(); // \Swagger\Client\Model\ToolkitDataClassesReturnsAPIReturnItemAPI | 

try {
    $result = $apiInstance->returnAddReturnItem($id, $item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnAddReturnItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **item** | [**\Swagger\Client\Model\ToolkitDataClassesReturnsAPIReturnItemAPI**](../Model/ToolkitDataClassesReturnsAPIReturnItemAPI.md)|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnAllocateItemLocation**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult returnAllocateItemLocation($id, $returnitem_id, $quantity, $location_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$returnitem_id = 56; // int | 
$quantity = 56; // int | 
$location_id = 56; // int | 

try {
    $result = $apiInstance->returnAllocateItemLocation($id, $returnitem_id, $quantity, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnAllocateItemLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **returnitem_id** | **int**|  |
 **quantity** | **int**|  |
 **location_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnConfirmReturn**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult returnConfirmReturn($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->returnConfirmReturn($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnConfirmReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnCreateReturn**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult returnCreateReturn($order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 56; // int | 

try {
    $result = $apiInstance->returnCreateReturn($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnCreateReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnGetReturn**
> \Swagger\Client\Model\ToolkitDataClassesReturnsReturn returnGetReturn($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->returnGetReturn($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnGetReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesReturnsReturn**](../Model/ToolkitDataClassesReturnsReturn.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnGetReturnItems**
> \Swagger\Client\Model\ToolkitDataClassesReturnsReturnItem[] returnGetReturnItems($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->returnGetReturnItems($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnGetReturnItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesReturnsReturnItem[]**](../Model/ToolkitDataClassesReturnsReturnItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnGetReturnReasons**
> \Swagger\Client\Model\ToolkitDataClassesReturnsReturnReason[] returnGetReturnReasons()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->returnGetReturnReasons();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnGetReturnReasons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesReturnsReturnReason[]**](../Model/ToolkitDataClassesReturnsReturnReason.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnGetReturnsOnDate**
> \Swagger\Client\Model\ToolkitDataClassesReturnsReturn[] returnGetReturnsOnDate($date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->returnGetReturnsOnDate($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnGetReturnsOnDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesReturnsReturn[]**](../Model/ToolkitDataClassesReturnsReturn.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

