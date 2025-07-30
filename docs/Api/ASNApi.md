# Swagger\Client\ASNApi

All URIs are relative to *https://api.mintsoft.co.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aSNBookInASN**](ASNApi.md#aSNBookInASN) | **GET** /api/ASN/{id}/BookIn | Book In ASN - Admin Only
[**aSNBookInASNPartial**](ASNApi.md#aSNBookInASNPartial) | **GET** /api/ASN/{id}/BookInPartial | Book In  Partial ASN - Admin Only
[**aSNConfirmASN**](ASNApi.md#aSNConfirmASN) | **GET** /api/ASN/{id}/Confirm | Confirm ASN
[**aSNCreateASN**](ASNApi.md#aSNCreateASN) | **PUT** /api/ASN | Create new ASN(Advanced Shipping Notice)
[**aSNDeleteASN**](ASNApi.md#aSNDeleteASN) | **DELETE** /api/ASN/{id} | Delete ASN
[**aSNGetASN**](ASNApi.md#aSNGetASN) | **GET** /api/ASN/{id} | Get ASN(Advanced Shipping Notice)
[**aSNGetGoodsInTypes**](ASNApi.md#aSNGetGoodsInTypes) | **GET** /api/ASN/GoodsInTypes | Get Goods In Types
[**aSNGetPaperwork**](ASNApi.md#aSNGetPaperwork) | **GET** /api/ASN/{id}/Paperwork | Get ASN Paperwork
[**aSNGetStatuses**](ASNApi.md#aSNGetStatuses) | **GET** /api/ASN/Statuses | Get ASN Statuses
[**aSNListASNs**](ASNApi.md#aSNListASNs) | **GET** /api/ASN/List | List Of ASN(Advanced Shipping Notice)
[**aSNMarkAwaitingPutAway**](ASNApi.md#aSNMarkAwaitingPutAway) | **GET** /api/ASN/{id}/MarkAwaitingPutAway | Mark ASN as Awiating PutAway - Admin Only
[**aSNMarkPutAwayComplete**](ASNApi.md#aSNMarkPutAwayComplete) | **GET** /api/ASN/{id}/MarkPutAwayComplete | Mark ASN as PutAway Complete - Admin Only
[**aSNPartBook**](ASNApi.md#aSNPartBook) | **GET** /api/ASN/{id}/PartBook | Part Book In ASN - Admin Only
[**aSNReceiveItem**](ASNApi.md#aSNReceiveItem) | **POST** /api/ASN/{id}/Items/Receive | ASN - Receive Items
[**aSNUpdateASN**](ASNApi.md#aSNUpdateASN) | **POST** /api/ASN/{id} | Update ASN Details
[**aSNUploadConnectAction**](ASNApi.md#aSNUploadConnectAction) | **PUT** /api/ASN/{id}/ConnectActions | Register ASN Webhook / ASNConnect Action


# **aSNBookInASN**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult aSNBookInASN($id)

Book In ASN - Admin Only

Book in Items on ASN and mark as complete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the ASN

try {
    $result = $apiInstance->aSNBookInASN($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNBookInASN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the ASN |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNBookInASNPartial**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult aSNBookInASNPartial($id)

Book In  Partial ASN - Admin Only

Partially book in ASN  - Not all Items have arrived

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the ASN

try {
    $result = $apiInstance->aSNBookInASNPartial($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNBookInASNPartial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the ASN |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNConfirmASN**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult aSNConfirmASN($id)

Confirm ASN

Confirm ASN is now ready to be expected in the warehouse

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the ASN

try {
    $result = $apiInstance->aSNConfirmASN($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNConfirmASN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the ASN |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNCreateASN**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult aSNCreateASN($asn)

Create new ASN(Advanced Shipping Notice)

Used to Creating a new ASN i.e. Advising of a Delivery into the Warehouse

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asn = new \Swagger\Client\Model\ToolkitDataClassesStockAPINewASN(); // \Swagger\Client\Model\ToolkitDataClassesStockAPINewASN | ASN Json in the Body of the request

try {
    $result = $apiInstance->aSNCreateASN($asn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNCreateASN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asn** | [**\Swagger\Client\Model\ToolkitDataClassesStockAPINewASN**](../Model/ToolkitDataClassesStockAPINewASN.md)| ASN Json in the Body of the request |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNDeleteASN**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult aSNDeleteASN($id)

Delete ASN

Delete ASN - Cannot be undone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the ASN

try {
    $result = $apiInstance->aSNDeleteASN($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNDeleteASN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the ASN |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNGetASN**
> \Swagger\Client\Model\ToolkitDataClassesStockASN aSNGetASN($id)

Get ASN(Advanced Shipping Notice)

Get back latest details about an Existing ASN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the ASN

try {
    $result = $apiInstance->aSNGetASN($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNGetASN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the ASN |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesStockASN**](../Model/ToolkitDataClassesStockASN.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNGetGoodsInTypes**
> \Swagger\Client\Model\ToolkitDataClassesCommonEnumPair[] aSNGetGoodsInTypes()

Get Goods In Types

Get a list of Possible GoodsInTypes within the system e.g. Pallet, Container

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->aSNGetGoodsInTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNGetGoodsInTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonEnumPair[]**](../Model/ToolkitDataClassesCommonEnumPair.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNGetPaperwork**
> string aSNGetPaperwork($id)

Get ASN Paperwork

Get Paperwork relating to ASN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the ASN

try {
    $result = $apiInstance->aSNGetPaperwork($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNGetPaperwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the ASN |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNGetStatuses**
> \Swagger\Client\Model\ToolkitDataClassesStockASNStatus[] aSNGetStatuses()

Get ASN Statuses

Get a list of Possible ASNStatusIds and Names within the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->aSNGetStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNGetStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesStockASNStatus[]**](../Model/ToolkitDataClassesStockASNStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNListASNs**
> \Swagger\Client\Model\ToolkitDataClassesStockASN[] aSNListASNs($asn_status_id, $client_id, $page_no, $limit, $warehouse_id, $since_last_updated, $booked_in_start_interval, $booked_in_end_interval, $include_asn_items)

List Of ASN(Advanced Shipping Notice)

Get a List of ASNs within the system (ASN Items are excluded from this endpoint)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asn_status_id = "asn_status_id_example"; // string | ASNStatusId can be supplied as a list e.g. 1;2;4 if you want to filter multiple statuses
$client_id = 56; // int | ClientId - Filter by ClientId - 3PL Admin Users Only
$page_no = 56; // int | Page No - Default 1
$limit = 56; // int | Number of Result to be returned - Default 100 - Max 100
$warehouse_id = 56; // int | Filter by WarehouseId
$since_last_updated = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by any ASNs that have been Updated Since supplied Timestamp
$booked_in_start_interval = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by any ASNs that have been booked supplied Timestamp
$booked_in_end_interval = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by any ASNs that have been booked supplied Timestamp
$include_asn_items = true; // bool | Request the ASN items

try {
    $result = $apiInstance->aSNListASNs($asn_status_id, $client_id, $page_no, $limit, $warehouse_id, $since_last_updated, $booked_in_start_interval, $booked_in_end_interval, $include_asn_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNListASNs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asn_status_id** | **string**| ASNStatusId can be supplied as a list e.g. 1;2;4 if you want to filter multiple statuses | [optional]
 **client_id** | **int**| ClientId - Filter by ClientId - 3PL Admin Users Only | [optional]
 **page_no** | **int**| Page No - Default 1 | [optional]
 **limit** | **int**| Number of Result to be returned - Default 100 - Max 100 | [optional]
 **warehouse_id** | **int**| Filter by WarehouseId | [optional]
 **since_last_updated** | **\DateTime**| Filter by any ASNs that have been Updated Since supplied Timestamp | [optional]
 **booked_in_start_interval** | **\DateTime**| Filter by any ASNs that have been booked supplied Timestamp | [optional]
 **booked_in_end_interval** | **\DateTime**| Filter by any ASNs that have been booked supplied Timestamp | [optional]
 **include_asn_items** | **bool**| Request the ASN items | [optional]

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesStockASN[]**](../Model/ToolkitDataClassesStockASN.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNMarkAwaitingPutAway**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult aSNMarkAwaitingPutAway($id)

Mark ASN as Awiating PutAway - Admin Only

Mark an ASN as Awaiting Put Away. Can be set as Put Away complete to Complete the ASN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the ASN

try {
    $result = $apiInstance->aSNMarkAwaitingPutAway($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNMarkAwaitingPutAway: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the ASN |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNMarkPutAwayComplete**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult aSNMarkPutAwayComplete($id)

Mark ASN as PutAway Complete - Admin Only

Mark an ASN already in AwaitingPutAway, as PutAway complete. This will Complete the ASN.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the ASN

try {
    $result = $apiInstance->aSNMarkPutAwayComplete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNMarkPutAwayComplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the ASN |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNPartBook**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult aSNPartBook($id)

Part Book In ASN - Admin Only

Book in Items that have been received already

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the ASN

try {
    $result = $apiInstance->aSNPartBook($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNPartBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the ASN |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNReceiveItem**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult aSNReceiveItem($id, $items)

ASN - Receive Items

Receive Items against a ASN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the ASN
$items = array(new \Swagger\Client\Model\ToolkitDataClassesStockASNItemAllocation()); // \Swagger\Client\Model\ToolkitDataClassesStockASNItemAllocation[] | Json list of the Items being receieved in the body of the request

try {
    $result = $apiInstance->aSNReceiveItem($id, $items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNReceiveItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the ASN |
 **items** | [**\Swagger\Client\Model\ToolkitDataClassesStockASNItemAllocation[]**](../Model/ToolkitDataClassesStockASNItemAllocation.md)| Json list of the Items being receieved in the body of the request |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNUpdateASN**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult aSNUpdateASN($id, $asn)

Update ASN Details

Update ASN Details for an Existing ASN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the ASN
$asn = new \Swagger\Client\Model\ToolkitDataClassesStockAPINewASN(); // \Swagger\Client\Model\ToolkitDataClassesStockAPINewASN | 

try {
    $result = $apiInstance->aSNUpdateASN($id, $asn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNUpdateASN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the ASN |
 **asn** | [**\Swagger\Client\Model\ToolkitDataClassesStockAPINewASN**](../Model/ToolkitDataClassesStockAPINewASN.md)|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aSNUploadConnectAction**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult aSNUploadConnectAction($id, $connect_action)

Register ASN Webhook / ASNConnect Action

Can be used to register a Webhook event so that when ASN is booked in a specified URL can be called with details of the book in

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ASNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the ASN
$connect_action = new \Swagger\Client\Model\ToolkitDataClassesStockAPINewASNConnectAction(); // \Swagger\Client\Model\ToolkitDataClassesStockAPINewASNConnectAction | Connect Action in Body of Result as Json - Type = API, ExtraCode1 = Callback Url,ExtraCode4 = Auth Header Values Complete = false

try {
    $result = $apiInstance->aSNUploadConnectAction($id, $connect_action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ASNApi->aSNUploadConnectAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the ASN |
 **connect_action** | [**\Swagger\Client\Model\ToolkitDataClassesStockAPINewASNConnectAction**](../Model/ToolkitDataClassesStockAPINewASNConnectAction.md)| Connect Action in Body of Result as Json - Type &#x3D; API, ExtraCode1 &#x3D; Callback Url,ExtraCode4 &#x3D; Auth Header Values Complete &#x3D; false |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

