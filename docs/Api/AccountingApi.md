# Swagger\Client\AccountingApi

All URIs are relative to *https://api.mintsoft.co.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountingAddAdditionalInvoiceItem**](AccountingApi.md#accountingAddAdditionalInvoiceItem) | **POST** /api/Account/Invoice/AddAdditionalInvoiceItem | Add an additional invoice item.
[**accountingAddCourierCost**](AccountingApi.md#accountingAddCourierCost) | **POST** /api/Accounting/AddCourierCost | Add Courier Cost to InvoiceItem
[**accountingGetInvoiceCollections**](AccountingApi.md#accountingGetInvoiceCollections) | **GET** /api/Accounting/Invoice/{id}/Collections | 
[**accountingGetInvoiceGenerics**](AccountingApi.md#accountingGetInvoiceGenerics) | **GET** /api/Accounting/Invoice/{id}/Other | 
[**accountingGetInvoiceGoodsIn**](AccountingApi.md#accountingGetInvoiceGoodsIn) | **GET** /api/Accounting/Invoice/{id}/GoodsIn | 
[**accountingGetInvoiceItemForOrder**](AccountingApi.md#accountingGetInvoiceItemForOrder) | **GET** /api/Accounting/Invoice/Orders/{OrderId} | 
[**accountingGetInvoiceItemTypes**](AccountingApi.md#accountingGetInvoiceItemTypes) | **GET** /api/Account/Invoice/InvoiceItemTypes | Get additional invoice item types.
[**accountingGetInvoiceOrders**](AccountingApi.md#accountingGetInvoiceOrders) | **GET** /api/Accounting/Invoice/{id}/Orders | 
[**accountingGetInvoiceReturns**](AccountingApi.md#accountingGetInvoiceReturns) | **GET** /api/Accounting/Invoice/{id}/Returns | 
[**accountingGetInvoices**](AccountingApi.md#accountingGetInvoices) | **GET** /api/Accounting/Invoice/{id} | 
[**accountingGetInvoicesAll**](AccountingApi.md#accountingGetInvoicesAll) | **GET** /api/Accounting/Invoice/All | 
[**accountingGetUnconfirmedInvoiceStorageCosts**](AccountingApi.md#accountingGetUnconfirmedInvoiceStorageCosts) | **GET** /api/Account/Invoice/GetUnconfirmedInvoiceStorageCosts | Get unconfirmed invoice storage costs.
[**accountingGetUnconfirmedInvoiceSummary**](AccountingApi.md#accountingGetUnconfirmedInvoiceSummary) | **GET** /api/Account/Invoice/GetUnconfirmedInvoiceSummary | Get unconfirmed invoice summary.
[**accountingListInvoices**](AccountingApi.md#accountingListInvoices) | **GET** /api/Accounting/Invoice/List | 


# **accountingAddAdditionalInvoiceItem**
> \Swagger\Client\Model\MintsoftCommonToolkitResult accountingAddAdditionalInvoiceItem($client_id, $type, $amount, $invoice_date, $comment, $warehouse_id)

Add an additional invoice item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 56; // int | Client's ID to add additional invoice item to
$type = "type_example"; // string | Invoice item type
$amount = 1.2; // double | Cost, or rate * quantity
$invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Invoice dates to apply additional invoice item: yyyy-MM-dd
$comment = "comment_example"; // string | Optional - Add a comment
$warehouse_id = 56; // int | Warehouse ID to add additional invoice item to

try {
    $result = $apiInstance->accountingAddAdditionalInvoiceItem($client_id, $type, $amount, $invoice_date, $comment, $warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingAddAdditionalInvoiceItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client&#39;s ID to add additional invoice item to |
 **type** | **string**| Invoice item type |
 **amount** | **double**| Cost, or rate * quantity |
 **invoice_date** | **\DateTime**| Invoice dates to apply additional invoice item: yyyy-MM-dd |
 **comment** | **string**| Optional - Add a comment | [optional]
 **warehouse_id** | **int**| Warehouse ID to add additional invoice item to | [optional]

### Return type

[**\Swagger\Client\Model\MintsoftCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingAddCourierCost**
> \Swagger\Client\Model\MintsoftCommonToolkitResult accountingAddCourierCost($request)

Add Courier Cost to InvoiceItem

Used to add Courier Cost to an InvoiceItem that has failed due to no pricing available

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\MintsoftAPICommonClassesAccountingAddCourierCostRequest(); // \Swagger\Client\Model\MintsoftAPICommonClassesAccountingAddCourierCostRequest | AddCourierCostRequest Json in the Body of the request - Either need to Supply OrderId, OrderNumber and ClientShortName or Tracking Number to locate a unique order

try {
    $result = $apiInstance->accountingAddCourierCost($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingAddCourierCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\MintsoftAPICommonClassesAccountingAddCourierCostRequest**](../Model/MintsoftAPICommonClassesAccountingAddCourierCostRequest.md)| AddCourierCostRequest Json in the Body of the request - Either need to Supply OrderId, OrderNumber and ClientShortName or Tracking Number to locate a unique order |

### Return type

[**\Swagger\Client\Model\MintsoftCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingGetInvoiceCollections**
> \Swagger\Client\Model\MintsoftAccountCollectionInvoiceItem[] accountingGetInvoiceCollections($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->accountingGetInvoiceCollections($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingGetInvoiceCollections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\MintsoftAccountCollectionInvoiceItem[]**](../Model/ToolkitDataClassesAccountCollectionInvoiceItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingGetInvoiceGenerics**
> \Swagger\Client\Model\MintsoftAccountGenericInvoiceItem[] accountingGetInvoiceGenerics($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->accountingGetInvoiceGenerics($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingGetInvoiceGenerics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\MintsoftAccountGenericInvoiceItem[]**](../Model/ToolkitDataClassesAccountGenericInvoiceItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingGetInvoiceGoodsIn**
> \Swagger\Client\Model\MintsoftAccountGoodsInInvoiceItem[] accountingGetInvoiceGoodsIn($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->accountingGetInvoiceGoodsIn($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingGetInvoiceGoodsIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\MintsoftAccountGoodsInInvoiceItem[]**](../Model/ToolkitDataClassesAccountGoodsInInvoiceItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingGetInvoiceItemForOrder**
> \Swagger\Client\Model\MintsoftAccountInvoiceItem accountingGetInvoiceItemForOrder($order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 56; // int | 

try {
    $result = $apiInstance->accountingGetInvoiceItemForOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingGetInvoiceItemForOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\MintsoftAccountInvoiceItem**](../Model/ToolkitDataClassesAccountInvoiceItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingGetInvoiceItemTypes**
> \Swagger\Client\Model\MintsoftAccountInvoiceItemType[] accountingGetInvoiceItemTypes()

Get additional invoice item types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accountingGetInvoiceItemTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingGetInvoiceItemTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MintsoftAccountInvoiceItemType[]**](../Model/ToolkitDataClassesAccountInvoiceItemType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingGetInvoiceOrders**
> \Swagger\Client\Model\MintsoftAccountInvoiceItem[] accountingGetInvoiceOrders($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->accountingGetInvoiceOrders($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingGetInvoiceOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\MintsoftAccountInvoiceItem[]**](../Model/ToolkitDataClassesAccountInvoiceItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingGetInvoiceReturns**
> \Swagger\Client\Model\MintsoftAccountReturnInvoiceItem[] accountingGetInvoiceReturns($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->accountingGetInvoiceReturns($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingGetInvoiceReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\MintsoftAccountReturnInvoiceItem[]**](../Model/ToolkitDataClassesAccountReturnInvoiceItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingGetInvoices**
> \Swagger\Client\Model\MintsoftAccountConfirmedInvoiceSummary accountingGetInvoices($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->accountingGetInvoices($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingGetInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\MintsoftAccountConfirmedInvoiceSummary**](../Model/ToolkitDataClassesAccountConfirmedInvoiceSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingGetInvoicesAll**
> \Swagger\Client\Model\MintsoftAccountConfirmedInvoiceSummary[] accountingGetInvoicesAll()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accountingGetInvoicesAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingGetInvoicesAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MintsoftAccountConfirmedInvoiceSummary[]**](../Model/ToolkitDataClassesAccountConfirmedInvoiceSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingGetUnconfirmedInvoiceStorageCosts**
> \Swagger\Client\Model\MintsoftAccountStorageInvoiceItem[] accountingGetUnconfirmedInvoiceStorageCosts($client_id, $from_date, $to_date, $page_no, $limit)

Get unconfirmed invoice storage costs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 56; // int | Client's ID
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date: yyyy-MM-dd
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date: yyyy-MM-dd
$page_no = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->accountingGetUnconfirmedInvoiceStorageCosts($client_id, $from_date, $to_date, $page_no, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingGetUnconfirmedInvoiceStorageCosts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client&#39;s ID |
 **from_date** | **\DateTime**| From date: yyyy-MM-dd |
 **to_date** | **\DateTime**| To date: yyyy-MM-dd |
 **page_no** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\MintsoftAccountStorageInvoiceItem[]**](../Model/ToolkitDataClassesAccountStorageInvoiceItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingGetUnconfirmedInvoiceSummary**
> \Swagger\Client\Model\MintsoftAccountInvoiceSummary accountingGetUnconfirmedInvoiceSummary($client_id, $from_date, $to_date)

Get unconfirmed invoice summary.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 56; // int | Client's ID
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From date: yyyy-MM-dd
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To date: yyyy-MM-dd

try {
    $result = $apiInstance->accountingGetUnconfirmedInvoiceSummary($client_id, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingGetUnconfirmedInvoiceSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client&#39;s ID |
 **from_date** | **\DateTime**| From date: yyyy-MM-dd |
 **to_date** | **\DateTime**| To date: yyyy-MM-dd |

### Return type

[**\Swagger\Client\Model\MintsoftAccountInvoiceSummary**](../Model/ToolkitDataClassesAccountInvoiceSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingListInvoices**
> \Swagger\Client\Model\MintsoftAccountConfirmedInvoiceSummary[] accountingListInvoices($client_id, $page_no, $limit, $since_date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 56; // int | 
$page_no = 56; // int | 
$limit = 56; // int | 
$since_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->accountingListInvoices($client_id, $page_no, $limit, $since_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->accountingListInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**|  | [optional]
 **page_no** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **since_date** | **\DateTime**|  | [optional]

### Return type

[**\Swagger\Client\Model\MintsoftAccountConfirmedInvoiceSummary[]**](../Model/ToolkitDataClassesAccountConfirmedInvoiceSummary.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

