# Swagger\Client\WarehouseApi

All URIs are relative to *https://api.mintsoft.co.uk*

| Method                                                                                     | HTTP request                                                   | Description                                                                                                    |
|--------------------------------------------------------------------------------------------|----------------------------------------------------------------|----------------------------------------------------------------------------------------------------------------|
| [**warehouseBulkStockMovement**](WarehouseApi.md#warehouseBulkStockMovement)               | **POST** /api/Warehouse/BulkStockMovement                      |                                                                                                                |
| [**warehouseCancelWarehouseTransfer**](WarehouseApi.md#warehouseCancelWarehouseTransfer)   | **GET** /api/WarehouseTransfer/{id}/Cancel                     | Cancel WarehouseTransfer                                                                                       |
| [**warehouseConfirmWarehouseTransfer**](WarehouseApi.md#warehouseConfirmWarehouseTransfer) | **GET** /api/WarehouseTransfer/{id}/Confirm                    | Confirm WarehouseTransfer                                                                                      |
| [**warehouseCreateWarehouseTransfer**](WarehouseApi.md#warehouseCreateWarehouseTransfer)   | **PUT** /api/WarehouseTransfer                                 | Create new WarehouseTransfer                                                                                   |
| [**warehouseDeleteWarehouseTransfer**](WarehouseApi.md#warehouseDeleteWarehouseTransfer)   | **DELETE** /api/WarehouseTransfer/{id}                         | Delete WarehouseTransfer                                                                                       |
| [**warehouseGetLocation**](WarehouseApi.md#warehouseGetLocation)                           | **GET** /api/Warehouse/{WarehouseId}/Location/{LocationId}     |                                                                                                                |
| [**warehouseGetLocationTypes**](WarehouseApi.md#warehouseGetLocationTypes)                 | **GET** /api/Warehouse/LocationTypes                           |                                                                                                                |
| [**warehouseGetLocations**](WarehouseApi.md#warehouseGetLocations)                         | **GET** /api/Warehouse/{WarehouseId}/Location/All              |                                                                                                                |
| [**warehouseGetStatuses**](WarehouseApi.md#warehouseGetStatuses)                           | **GET** /api/WarehouseTransfer/Statuses                        | Get WarehouseTransfer Statuses                                                                                 |
| [**warehouseGetWarehouseTransfer**](WarehouseApi.md#warehouseGetWarehouseTransfer)         | **GET** /api/WarehouseTransfer/{id}                            | Get WarehouseTransfer                                                                                          |
| [**warehouseGetWarehouseZones**](WarehouseApi.md#warehouseGetWarehouseZones)               | **GET** /api/Warehouse/{id}/Zones                              |                                                                                                                |
| [**warehouseGetWarehouses**](WarehouseApi.md#warehouseGetWarehouses)                       | **GET** /api/Warehouse                                         |                                                                                                                |
| [**warehouseListWarehouseTransfers**](WarehouseApi.md#warehouseListWarehouseTransfers)     | **GET** /api/WarehouseTransfer/List                            |                                                                                                                |
| [**warehouseLookupLocationId**](WarehouseApi.md#warehouseLookupLocationId)                 | **GET** /api/Warehouse/{WarehouseId}/Location/LookupLocationId |                                                                                                                |
| [**warehouseStockMovement**](WarehouseApi.md#warehouseStockMovement)                       | **POST** /api/Warehouse/StockMovement                          |                                                                                                                |
| [**warehouseStockMovements**](WarehouseApi.md#warehouseStockMovements)                     | **GET** /api/Warehouse/{warehouseId}/StockMovements            | Get a List of Stock Movements that have happened in a warehouse e.g. moving stock from one location to another |
| [**warehouseUpdateWarehouseTransfer**](WarehouseApi.md#warehouseUpdateWarehouseTransfer)   | **POST** /api/WarehouseTransfer/{id}                           | Update WarehouseTransfer Details                                                                               |

# **warehouseBulkStockMovement**
> \Swagger\Client\Model\MintsoftCommonToolkitResult[] warehouseBulkStockMovement($action, $requests)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$action = 56; // int | 
$requests = array(new \Swagger\Client\Model\MintsoftWarehouseBookStockRequest()); // \Swagger\Client\Model\MintsoftWarehouseBookStockRequest[] | 

try {
    $result = $apiInstance->warehouseBulkStockMovement($action, $requests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseBulkStockMovement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **action** | **int**|  |
 **requests** | [**\Swagger\Client\Model\MintsoftWarehouseBookStockRequest[]**](../Model/ToolkitDataClassesWarehouseBookStockRequest.md)|  |

### Return type

[**\Swagger\Client\Model\MintsoftCommonToolkitResult[]**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseCancelWarehouseTransfer**
> \Swagger\Client\Model\MintsoftCommonToolkitResult warehouseCancelWarehouseTransfer($id)

Cancel WarehouseTransfer

Cancel WarehouseTransfer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the WarehouseTransfer

try {
    $result = $apiInstance->warehouseCancelWarehouseTransfer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseCancelWarehouseTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the WarehouseTransfer |

### Return type

[**\Swagger\Client\Model\MintsoftCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseConfirmWarehouseTransfer**
> \Swagger\Client\Model\MintsoftCommonToolkitResult warehouseConfirmWarehouseTransfer($id)

Confirm WarehouseTransfer

Confirm WarehouseTransfer is now ready to be expected in the warehouse

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the WarehouseTransfer

try {
    $result = $apiInstance->warehouseConfirmWarehouseTransfer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseConfirmWarehouseTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the WarehouseTransfer |

### Return type

[**\Swagger\Client\Model\MintsoftCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseCreateWarehouseTransfer**
> \Swagger\Client\Model\MintsoftCommonToolkitResult warehouseCreateWarehouseTransfer($warehouse_transfer)

Create new WarehouseTransfer

Used to Creating a new WarehouseTransfer i.e. Advising of a Delivery into the Warehouse

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$warehouse_transfer = new \Swagger\Client\Model\MintsoftWarehouseAPIWarehouseTransfer(); // \Swagger\Client\Model\MintsoftWarehouseAPIWarehouseTransfer | WarehouseTransfer Json in the Body of the request

try {
    $result = $apiInstance->warehouseCreateWarehouseTransfer($warehouse_transfer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseCreateWarehouseTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_transfer** | [**\Swagger\Client\Model\MintsoftWarehouseAPIWarehouseTransfer**](../Model/ToolkitDataClassesWarehouseAPIWarehouseTransfer.md)| WarehouseTransfer Json in the Body of the request |

### Return type

[**\Swagger\Client\Model\MintsoftCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseDeleteWarehouseTransfer**
> \Swagger\Client\Model\MintsoftCommonToolkitResult warehouseDeleteWarehouseTransfer($id)

Delete WarehouseTransfer

Delete WarehouseTransfer - Cannot be undone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the WarehouseTransfer

try {
    $result = $apiInstance->warehouseDeleteWarehouseTransfer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseDeleteWarehouseTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the WarehouseTransfer |

### Return type

[**\Swagger\Client\Model\MintsoftCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseGetLocation**
> \Swagger\Client\Model\MintsoftWarehouseLocation warehouseGetLocation($warehouse_id, $location_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$warehouse_id = 56; // int | 
$location_id = 56; // int | 

try {
    $result = $apiInstance->warehouseGetLocation($warehouse_id, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseGetLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **int**|  |
 **location_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\MintsoftWarehouseLocation**](../Model/ToolkitDataClassesWarehouseLocation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseGetLocationTypes**
> \Swagger\Client\Model\MintsoftWarehouseLocationType[] warehouseGetLocationTypes()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->warehouseGetLocationTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseGetLocationTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MintsoftWarehouseLocationType[]**](../Model/ToolkitDataClassesWarehouseLocationType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseGetLocations**
> \Swagger\Client\Model\MintsoftWarehouseLocation[] warehouseGetLocations($warehouse_id, $include_un_assigned)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$warehouse_id = 56; // int | 
$include_un_assigned = true; // bool | 

try {
    $result = $apiInstance->warehouseGetLocations($warehouse_id, $include_un_assigned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseGetLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **int**|  |
 **include_un_assigned** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\MintsoftWarehouseLocation[]**](../Model/ToolkitDataClassesWarehouseLocation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseGetStatuses**
> string[] warehouseGetStatuses()

Get WarehouseTransfer Statuses

Get a list of Possible WarehouseTransferStatuses within the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->warehouseGetStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseGetStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseGetWarehouseTransfer**
> \Swagger\Client\Model\MintsoftWarehouseWarehouseTransfer warehouseGetWarehouseTransfer($id)

Get WarehouseTransfer

Get back latest details about an Existing WarehouseTransfer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the WarehouseTransfer

try {
    $result = $apiInstance->warehouseGetWarehouseTransfer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseGetWarehouseTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the WarehouseTransfer |

### Return type

[**\Swagger\Client\Model\MintsoftWarehouseWarehouseTransfer**](../Model/ToolkitDataClassesWarehouseWarehouseTransfer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseGetWarehouseZones**
> \Swagger\Client\Model\MintsoftWarehouseZone[] warehouseGetWarehouseZones($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->warehouseGetWarehouseZones($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseGetWarehouseZones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\MintsoftWarehouseZone[]**](../Model/ToolkitDataClassesWarehouseZone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseGetWarehouses**
> \Swagger\Client\Model\MintsoftStockWarehouse[] warehouseGetWarehouses()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->warehouseGetWarehouses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseGetWarehouses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MintsoftStockWarehouse[]**](../Model/ToolkitDataClassesStockWarehouse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseListWarehouseTransfers**
> \Swagger\Client\Model\MintsoftWarehouseToReturnWarehouseTransfer[] warehouseListWarehouseTransfers($include_warehouse_transfer_items, $warehouse_transfer_statuses, $page_no, $limit, $client_id, $source_warehouse_id, $destination_warehouse_id, $since_last_updated)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$include_warehouse_transfer_items = true; // bool | 
$warehouse_transfer_statuses = "warehouse_transfer_statuses_example"; // string | 
$page_no = 56; // int | 
$limit = 56; // int | 
$client_id = 56; // int | 
$source_warehouse_id = 56; // int | 
$destination_warehouse_id = 56; // int | 
$since_last_updated = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->warehouseListWarehouseTransfers($include_warehouse_transfer_items, $warehouse_transfer_statuses, $page_no, $limit, $client_id, $source_warehouse_id, $destination_warehouse_id, $since_last_updated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseListWarehouseTransfers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_warehouse_transfer_items** | **bool**|  | [optional]
 **warehouse_transfer_statuses** | **string**|  | [optional]
 **page_no** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **client_id** | **int**|  | [optional]
 **source_warehouse_id** | **int**|  | [optional]
 **destination_warehouse_id** | **int**|  | [optional]
 **since_last_updated** | **\DateTime**|  | [optional]

### Return type

[**\Swagger\Client\Model\MintsoftWarehouseToReturnWarehouseTransfer[]**](../Model/ToolkitDataClassesWarehouseToReturnWarehouseTransfer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseLookupLocationId**
> \Swagger\Client\Model\MintsoftWarehouseLocation warehouseLookupLocationId($warehouse_id, $location)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$warehouse_id = 56; // int | 
$location = "location_example"; // string | 

try {
    $result = $apiInstance->warehouseLookupLocationId($warehouse_id, $location);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseLookupLocationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **int**|  |
 **location** | **string**|  |

### Return type

[**\Swagger\Client\Model\MintsoftWarehouseLocation**](../Model/ToolkitDataClassesWarehouseLocation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseStockMovement**
> \Swagger\Client\Model\MintsoftCommonToolkitResult warehouseStockMovement($action, $request)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$action = 56; // int | 
$request = new \Swagger\Client\Model\MintsoftWarehouseBookStockRequest(); // \Swagger\Client\Model\MintsoftWarehouseBookStockRequest | 

try {
    $result = $apiInstance->warehouseStockMovement($action, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseStockMovement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **action** | **int**|  |
 **request** | [**\Swagger\Client\Model\MintsoftWarehouseBookStockRequest**](../Model/ToolkitDataClassesWarehouseBookStockRequest.md)|  |

### Return type

[**\Swagger\Client\Model\MintsoftCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseStockMovements**
> \Swagger\Client\Model\MintsoftWarehouseAPIDTOStockMovementDTO[] warehouseStockMovements($warehouse_id, $product_id, $page_no, $limit, $since_date)

Get a List of Stock Movements that have happened in a warehouse e.g. moving stock from one location to another

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$warehouse_id = 56; // int | ID of the warehouse
$product_id = 56; // int | Product ID - Optional
$page_no = 56; // int | Page No - Default 1
$limit = 56; // int | Max number of results to return - Default 100 - Max 100
$since_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | filter to only get results since a certain date - useful last 24 hours etc

try {
    $result = $apiInstance->warehouseStockMovements($warehouse_id, $product_id, $page_no, $limit, $since_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseStockMovements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **int**| ID of the warehouse |
 **product_id** | **int**| Product ID - Optional | [optional]
 **page_no** | **int**| Page No - Default 1 | [optional]
 **limit** | **int**| Max number of results to return - Default 100 - Max 100 | [optional]
 **since_date** | **\DateTime**| filter to only get results since a certain date - useful last 24 hours etc | [optional]

### Return type

[**\Swagger\Client\Model\MintsoftWarehouseAPIDTOStockMovementDTO[]**](../Model/ToolkitDataClassesWarehouseAPIDTOStockMovementDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseUpdateWarehouseTransfer**
> \Swagger\Client\Model\MintsoftCommonToolkitResult warehouseUpdateWarehouseTransfer($id, $warehouse_transfer)

Update WarehouseTransfer Details

Update WarehouseTransfer Details for an Existing WarehouseTransfer (Excluding Items)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the WarehouseTransfer
$warehouse_transfer = new \Swagger\Client\Model\MintsoftWarehouseAPIWarehouseTransfer(); // \Swagger\Client\Model\MintsoftWarehouseAPIWarehouseTransfer | 

try {
    $result = $apiInstance->warehouseUpdateWarehouseTransfer($id, $warehouse_transfer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->warehouseUpdateWarehouseTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the WarehouseTransfer |
 **warehouse_transfer** | [**\Swagger\Client\Model\MintsoftWarehouseAPIWarehouseTransfer**](../Model/ToolkitDataClassesWarehouseAPIWarehouseTransfer.md)|  |

### Return type

[**\Swagger\Client\Model\MintsoftCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

