# Swagger\Client\OrderApi

All URIs are relative to *https://api.mintsoft.co.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderAddOrderComment**](OrderApi.md#orderAddOrderComment) | **POST** /api/Order/{id}/Comments | 
[**orderAddOrderItem**](OrderApi.md#orderAddOrderItem) | **PUT** /api/Order/{id}/Items | Add new item to the existing order
[**orderAddOrderTag**](OrderApi.md#orderAddOrderTag) | **PUT** /api/Order/{id}/Tag | 
[**orderAllocations**](OrderApi.md#orderAllocations) | **GET** /api/Order/{id}/Allocations | Order Allocations
[**orderBarcodeVerifiedOrderItems**](OrderApi.md#orderBarcodeVerifiedOrderItems) | **GET** /api/Order/{id}/BarcodeVerifiedOrderItems | Order Barcode Verifications
[**orderBillingAddress**](OrderApi.md#orderBillingAddress) | **GET** /api/Order/{id}/BillingAddress | Get Billing Address for Order
[**orderCancelOrder**](OrderApi.md#orderCancelOrder) | **GET** /api/Order/{id}/Cancel | 
[**orderCancelShipment**](OrderApi.md#orderCancelShipment) | **DELETE** /api/Order/{id}/Shipments/CancelShipment | Cancel Shipment - using Courier API Connection
[**orderComments**](OrderApi.md#orderComments) | **GET** /api/Order/{id}/Comments | 
[**orderCreateOrder**](OrderApi.md#orderCreateOrder) | **PUT** /api/Order | Create a New Order
[**orderCreateShipment**](OrderApi.md#orderCreateShipment) | **POST** /api/Order/{id}/Shipments/CreateShipment | Create Shipment - using Courier API Connection
[**orderDeleteOrderItem**](OrderApi.md#orderDeleteOrderItem) | **DELETE** /api/Order/{id}/Items/{ItemId} | Delete Order Item
[**orderDeleteOrderShipment**](OrderApi.md#orderDeleteOrderShipment) | **DELETE** /api/Order/{id}/Shipments/{OrderShipmentId} | 
[**orderDeleteOrderTag**](OrderApi.md#orderDeleteOrderTag) | **DELETE** /api/Order/{id}/Tag | 
[**orderDespatchNote**](OrderApi.md#orderDespatchNote) | **GET** /api/Order/{id}/DespatchNote | 
[**orderDocuments**](OrderApi.md#orderDocuments) | **GET** /api/Order/{id}/Documents | 
[**orderGet**](OrderApi.md#orderGet) | **GET** /api/Order/{id} | 
[**orderGetChannels**](OrderApi.md#orderGetChannels) | **GET** /api/Order/Channels | 
[**orderGetConnectAction**](OrderApi.md#orderGetConnectAction) | **GET** /api/Order/{id}/ConnectActions | 
[**orderGetDocument**](OrderApi.md#orderGetDocument) | **GET** /api/Order/{id}/Documents/{DocumentId} | 
[**orderGetDocumentData**](OrderApi.md#orderGetDocumentData) | **GET** /api/Order/{id}/Documents/{DocumentId}/Data | 
[**orderGetOrderDocumentPaperSizes**](OrderApi.md#orderGetOrderDocumentPaperSizes) | **GET** /api/Order/Documents/PaperSizes | 
[**orderGetOrderDocumentTypes**](OrderApi.md#orderGetOrderDocumentTypes) | **GET** /api/Order/Documents/DocumentTypes | 
[**orderGetOrderShipment**](OrderApi.md#orderGetOrderShipment) | **GET** /api/Order/{id}/Shipments | 
[**orderGetOrderShipmentTrackingEventsStatuses**](OrderApi.md#orderGetOrderShipmentTrackingEventsStatuses) | **GET** /api/Order/Shipments/TrackingEvents/Statuses | Tracking Event - Statuses
[**orderGetOrderStatuses**](OrderApi.md#orderGetOrderStatuses) | **GET** /api/Order/Statuses | 
[**orderItems**](OrderApi.md#orderItems) | **GET** /api/Order/{id}/Items | Get Order Items
[**orderListOrders**](OrderApi.md#orderListOrders) | **GET** /api/Order/List | 
[**orderListTrackingEvents**](OrderApi.md#orderListTrackingEvents) | **GET** /api/Order/Shipments/TrackingEvents/List | Shipment Tracking Events - List
[**orderMarkAwaitingConfirmation**](OrderApi.md#orderMarkAwaitingConfirmation) | **GET** /api/Order/{id}/MarkAwaitingConfirmation | MarkAwaitingConfirmation
[**orderMarkAwaitingPayment**](OrderApi.md#orderMarkAwaitingPayment) | **GET** /api/Order/{id}/MarkAwaitingPayment | MarkAwaitingPayment
[**orderMarkConfirmed**](OrderApi.md#orderMarkConfirmed) | **GET** /api/Order/{id}/MarkConfirmed | MarkConfirmed
[**orderMarkDespatched**](OrderApi.md#orderMarkDespatched) | **GET** /api/Order/{id}/MarkDespatched | MarkDespatched
[**orderMarkDocumentAsPrinted**](OrderApi.md#orderMarkDocumentAsPrinted) | **GET** /api/Order/{id}/Documents/{DocumentId}/MarkPrinted | 
[**orderMarkFraudRisk**](OrderApi.md#orderMarkFraudRisk) | **POST** /api/Order/{id}/MarkFraudRisk | Marks Fraud Risk
[**orderMarkFraudRiskAccepted**](OrderApi.md#orderMarkFraudRiskAccepted) | **POST** /api/Order/{id}/MarkFraudRiskAccepted | Marks Fraud Risk Accepted
[**orderMarkPackAndHold**](OrderApi.md#orderMarkPackAndHold) | **GET** /api/Order/{id}/MarkPackAndHold | MarkPackAndHold
[**orderMarkPaymentReceived**](OrderApi.md#orderMarkPaymentReceived) | **GET** /api/Order/{id}/MarkPaymentReceived | MarkPaymentReceived
[**orderMarkPrinted**](OrderApi.md#orderMarkPrinted) | **GET** /api/Order/{id}/MarkPrinted | MarkPrinted
[**orderMarkReleasePackAndHold**](OrderApi.md#orderMarkReleasePackAndHold) | **GET** /api/Order/{id}/MarkReleasePackAndHold | MarkReleasePackAndHold
[**orderOrderSplit**](OrderApi.md#orderOrderSplit) | **GET** /api/Order/{id}/Splits | 
[**orderQueries**](OrderApi.md#orderQueries) | **GET** /api/Order/{id}/Queries | 
[**orderQueryComments**](OrderApi.md#orderQueryComments) | **GET** /api/Order/{id}/Queries/{QueryId}/Comments | 
[**orderSearchOrder**](OrderApi.md#orderSearchOrder) | **GET** /api/Order/Search | 
[**orderSplitOrderItems**](OrderApi.md#orderSplitOrderItems) | **POST** /api/Order/{id}/SplitOrderItems | SplitOrderItems
[**orderUpdateNumberOfParcels**](OrderApi.md#orderUpdateNumberOfParcels) | **GET** /api/Order/{id}/UpdateNumberOfParcels | Update Number Of Parcels
[**orderUpdateOrder**](OrderApi.md#orderUpdateOrder) | **POST** /api/Order/{id} | Update Order Details
[**orderUpdateOrderItem**](OrderApi.md#orderUpdateOrderItem) | **POST** /api/Order/{id}/Items/{ItemId} | Update Order Item
[**orderUploadConnectAction**](OrderApi.md#orderUploadConnectAction) | **PUT** /api/Order/{id}/ConnectActions | 
[**orderUploadOrderDocument**](OrderApi.md#orderUploadOrderDocument) | **PUT** /api/Order/{id}/Documents | 
[**orderUploadOrderShipment**](OrderApi.md#orderUploadOrderShipment) | **PUT** /api/Order/{id}/Shipments | 


# **orderAddOrderComment**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderAddOrderComment($id, $comment)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$comment = new \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderComment(); // \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderComment | 

try {
    $result = $apiInstance->orderAddOrderComment($id, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderAddOrderComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **comment** | [**\Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderComment**](../Model/ToolkitDataClassesOrdersAPINewOrderComment.md)|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderAddOrderItem**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderAddOrderItem($id, $order_item)

Add new item to the existing order

Add new Order Item - Can be used for adding an new Item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId
$order_item = new \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderItem(); // \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderItem | 

try {
    $result = $apiInstance->orderAddOrderItem($id, $order_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderAddOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |
 **order_item** | [**\Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderItem**](../Model/ToolkitDataClassesOrdersAPINewOrderItem.md)|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderAddOrderTag**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderAddOrderTag($id, $tag)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$tag = "tag_example"; // string | 

try {
    $result = $apiInstance->orderAddOrderTag($id, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderAddOrderTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tag** | **string**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderAllocations**
> \Swagger\Client\Model\ToolkitDataClassesWarehouseProductInLocation[] orderAllocations($id)

Order Allocations

Get a list of the Stock Allocated to an Order including Batch and BB Details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId

try {
    $result = $apiInstance->orderAllocations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderAllocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesWarehouseProductInLocation[]**](../Model/ToolkitDataClassesWarehouseProductInLocation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderBarcodeVerifiedOrderItems**
> \Swagger\Client\Model\ToolkitDataClassesOrdersBarcodeVerifiedOrderItem[] orderBarcodeVerifiedOrderItems($id)

Order Barcode Verifications

Get a list of Barcode Scanning including Batch and Serial Details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId

try {
    $result = $apiInstance->orderBarcodeVerifiedOrderItems($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderBarcodeVerifiedOrderItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersBarcodeVerifiedOrderItem[]**](../Model/ToolkitDataClassesOrdersBarcodeVerifiedOrderItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderBillingAddress**
> \Swagger\Client\Model\ToolkitDataClassesOrdersAddress orderBillingAddress($id)

Get Billing Address for Order

Returns the Billing Address for an OrderID if one is present.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId

try {
    $result = $apiInstance->orderBillingAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderBillingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersAddress**](../Model/ToolkitDataClassesOrdersAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCancelOrder**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderCancelOrder($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->orderCancelOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCancelOrder: ', $e->getMessage(), PHP_EOL;
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

# **orderCancelShipment**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderCancelShipment($id)

Cancel Shipment - using Courier API Connection

Cancel a Courier Shipment using the Courier API Connection. Where supported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId

try {
    $result = $apiInstance->orderCancelShipment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCancelShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderComments**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrderComment[] orderComments($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->orderComments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrderComment[]**](../Model/ToolkitDataClassesOrdersOrderComment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCreateOrder**
> \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderResult[] orderCreateOrder($order)

Create a New Order

Creates a new order in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order = new \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderWithItems(); // \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderWithItems | 

try {
    $result = $apiInstance->orderCreateOrder($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderWithItems**](../Model/ToolkitDataClassesOrdersAPINewOrderWithItems.md)|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderResult[]**](../Model/ToolkitDataClassesOrdersAPINewOrderResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderCreateShipment**
> \Swagger\Client\Model\ToolkitDataClassesShippingShipmentResult orderCreateShipment($id, $courier_service_id, $number_of_parcels)

Create Shipment - using Courier API Connection

Create a Courier Shipment using the Courier API Connection. Will make an API request to the assigned courier relating to the order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId
$courier_service_id = 56; // int | Optional - CourierServiceId if you want to update CourierService before creating a shipment
$number_of_parcels = 56; // int | Optional - NumberOfParcels if you want to update NumberOfParcels field before creating a shipment

try {
    $result = $apiInstance->orderCreateShipment($id, $courier_service_id, $number_of_parcels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCreateShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |
 **courier_service_id** | **int**| Optional - CourierServiceId if you want to update CourierService before creating a shipment | [optional]
 **number_of_parcels** | **int**| Optional - NumberOfParcels if you want to update NumberOfParcels field before creating a shipment | [optional]

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesShippingShipmentResult**](../Model/ToolkitDataClassesShippingShipmentResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderDeleteOrderItem**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderDeleteOrderItem($id, $item_id)

Delete Order Item

Delete Order Item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId
$item_id = 56; // int | OrderItemId

try {
    $result = $apiInstance->orderDeleteOrderItem($id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderDeleteOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |
 **item_id** | **int**| OrderItemId |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderDeleteOrderShipment**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderDeleteOrderShipment($id, $order_shipment_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$order_shipment_id = 56; // int | 

try {
    $result = $apiInstance->orderDeleteOrderShipment($id, $order_shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderDeleteOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **order_shipment_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderDeleteOrderTag**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderDeleteOrderTag($id, $tag)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$tag = "tag_example"; // string | 

try {
    $result = $apiInstance->orderDeleteOrderTag($id, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderDeleteOrderTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **tag** | **string**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderDespatchNote**
> string orderDespatchNote($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->orderDespatchNote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderDespatchNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderDocuments**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrderDocument[] orderDocuments($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->orderDocuments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrderDocument[]**](../Model/ToolkitDataClassesOrdersOrderDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGet**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrder orderGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->orderGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrder**](../Model/ToolkitDataClassesOrdersOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetChannels**
> \Swagger\Client\Model\ToolkitDataClassesChannelsChannel[] orderGetChannels()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->orderGetChannels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesChannelsChannel[]**](../Model/ToolkitDataClassesChannelsChannel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetConnectAction**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrderAwaitingAction[] orderGetConnectAction($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->orderGetConnectAction($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetConnectAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrderAwaitingAction[]**](../Model/ToolkitDataClassesOrdersOrderAwaitingAction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetDocument**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrderDocument orderGetDocument($id, $document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$document_id = 56; // int | 

try {
    $result = $apiInstance->orderGetDocument($id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **document_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrderDocument**](../Model/ToolkitDataClassesOrdersOrderDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetDocumentData**
> string orderGetDocumentData($id, $document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$document_id = 56; // int | 

try {
    $result = $apiInstance->orderGetDocumentData($id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetDocumentData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **document_id** | **int**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetOrderDocumentPaperSizes**
> \Swagger\Client\Model\ToolkitDataClassesCommonEnumPair[] orderGetOrderDocumentPaperSizes()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->orderGetOrderDocumentPaperSizes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetOrderDocumentPaperSizes: ', $e->getMessage(), PHP_EOL;
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

# **orderGetOrderDocumentTypes**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrderDocumentType[] orderGetOrderDocumentTypes()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->orderGetOrderDocumentTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetOrderDocumentTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrderDocumentType[]**](../Model/ToolkitDataClassesOrdersOrderDocumentType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetOrderShipment**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrderShipment[] orderGetOrderShipment($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->orderGetOrderShipment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrderShipment[]**](../Model/ToolkitDataClassesOrdersOrderShipment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetOrderShipmentTrackingEventsStatuses**
> \Swagger\Client\Model\ToolkitDataClassesCommonEnumPair[] orderGetOrderShipmentTrackingEventsStatuses()

Tracking Event - Statuses

A List of all the possible Tracking Event Statuses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->orderGetOrderShipmentTrackingEventsStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetOrderShipmentTrackingEventsStatuses: ', $e->getMessage(), PHP_EOL;
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

# **orderGetOrderStatuses**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrderStatus[] orderGetOrderStatuses()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->orderGetOrderStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetOrderStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrderStatus[]**](../Model/ToolkitDataClassesOrdersOrderStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderItems**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrderItem[] orderItems($id)

Get Order Items

Get All of the Items for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId

try {
    $result = $apiInstance->orderItems($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrderItem[]**](../Model/ToolkitDataClassesOrdersOrderItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderListOrders**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrder[] orderListOrders($order_status_id, $client_id, $channel_id, $courier_service_id, $warehouse_id, $page_no, $limit, $since_date, $since_last_updated, $since_despatch_date, $exclude_tags, $include_tags, $include_order_items, $show_b2_b_only)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_status_id = 56; // int | 
$client_id = 56; // int | 
$channel_id = 56; // int | 
$courier_service_id = 56; // int | 
$warehouse_id = 56; // int | 
$page_no = 56; // int | 
$limit = 56; // int | 
$since_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$since_last_updated = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$since_despatch_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$exclude_tags = "exclude_tags_example"; // string | 
$include_tags = "include_tags_example"; // string | 
$include_order_items = true; // bool | 
$show_b2_b_only = true; // bool | 

try {
    $result = $apiInstance->orderListOrders($order_status_id, $client_id, $channel_id, $courier_service_id, $warehouse_id, $page_no, $limit, $since_date, $since_last_updated, $since_despatch_date, $exclude_tags, $include_tags, $include_order_items, $show_b2_b_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderListOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_status_id** | **int**|  | [optional]
 **client_id** | **int**|  | [optional]
 **channel_id** | **int**|  | [optional]
 **courier_service_id** | **int**|  | [optional]
 **warehouse_id** | **int**|  | [optional]
 **page_no** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **since_date** | **\DateTime**|  | [optional]
 **since_last_updated** | **\DateTime**|  | [optional]
 **since_despatch_date** | **\DateTime**|  | [optional]
 **exclude_tags** | **string**|  | [optional]
 **include_tags** | **string**|  | [optional]
 **include_order_items** | **bool**|  | [optional]
 **show_b2_b_only** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrder[]**](../Model/ToolkitDataClassesOrdersOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderListTrackingEvents**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrderShipmentTrackingEvent[] orderListTrackingEvents($page_no, $limit, $tracking_status_id, $since_last_updated)

Shipment Tracking Events - List

List Shipment Tracking Events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_no = 56; // int | Page No - Default 1
$limit = 56; // int | Number of Results to Return - Default 500 - Max 500
$tracking_status_id = 56; // int | Filter by TrackingStatusId
$since_last_updated = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Tracking Events that have happened Since Supplied Time

try {
    $result = $apiInstance->orderListTrackingEvents($page_no, $limit, $tracking_status_id, $since_last_updated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderListTrackingEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_no** | **int**| Page No - Default 1 | [optional]
 **limit** | **int**| Number of Results to Return - Default 500 - Max 500 | [optional]
 **tracking_status_id** | **int**| Filter by TrackingStatusId | [optional]
 **since_last_updated** | **\DateTime**| Tracking Events that have happened Since Supplied Time | [optional]

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrderShipmentTrackingEvent[]**](../Model/ToolkitDataClassesOrdersOrderShipmentTrackingEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderMarkAwaitingConfirmation**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderMarkAwaitingConfirmation($id)

MarkAwaitingConfirmation

Mark an Order as Awaiting Confirmation - Moves it to a AwaitingConfirmation Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId

try {
    $result = $apiInstance->orderMarkAwaitingConfirmation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderMarkAwaitingConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderMarkAwaitingPayment**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderMarkAwaitingPayment($id)

MarkAwaitingPayment

Mark an Order as Awaiting Payment - Moves it to a AwaitingPayment Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId

try {
    $result = $apiInstance->orderMarkAwaitingPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderMarkAwaitingPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderMarkConfirmed**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderMarkConfirmed($id)

MarkConfirmed

Mark an Order as Confirmed - Moves it to an Order from AwaitingConfirmation Status so it can be processed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId

try {
    $result = $apiInstance->orderMarkConfirmed($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderMarkConfirmed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderMarkDespatched**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderMarkDespatched($id, $tracking_number)

MarkDespatched

Marks an Order as Despatched

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId
$tracking_number = "tracking_number_example"; // string | TrackingNumber

try {
    $result = $apiInstance->orderMarkDespatched($id, $tracking_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderMarkDespatched: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |
 **tracking_number** | **string**| TrackingNumber | [optional]

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderMarkDocumentAsPrinted**
> orderMarkDocumentAsPrinted($id, $document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$document_id = 56; // int | 

try {
    $apiInstance->orderMarkDocumentAsPrinted($id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderMarkDocumentAsPrinted: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **document_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderMarkFraudRisk**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderMarkFraudRisk($id)

Marks Fraud Risk

Marks an order as Fraud

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Order Id

try {
    $result = $apiInstance->orderMarkFraudRisk($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderMarkFraudRisk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Order Id |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderMarkFraudRiskAccepted**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderMarkFraudRiskAccepted($id)

Marks Fraud Risk Accepted

Marks an order as Fraud Accepted

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Order Id

try {
    $result = $apiInstance->orderMarkFraudRiskAccepted($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderMarkFraudRiskAccepted: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Order Id |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderMarkPackAndHold**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderMarkPackAndHold($id, $release_date)

MarkPackAndHold

Mark an Order as Pack And Hold- Moves it to an Order To PackAndHold Status to be released for despatch at a future date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId
$release_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date you want the order released

try {
    $result = $apiInstance->orderMarkPackAndHold($id, $release_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderMarkPackAndHold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |
 **release_date** | **\DateTime**| Date you want the order released |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderMarkPaymentReceived**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderMarkPaymentReceived($id)

MarkPaymentReceived

Mark an Order as Payment Received Payment - Moves it to an Order from AwaitingPayment Status so it can be processed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId

try {
    $result = $apiInstance->orderMarkPaymentReceived($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderMarkPaymentReceived: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderMarkPrinted**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderMarkPrinted($id, $comment)

MarkPrinted

Marks an Order as Printed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId
$comment = "comment_example"; // string | Comment

try {
    $result = $apiInstance->orderMarkPrinted($id, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderMarkPrinted: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |
 **comment** | **string**| Comment | [optional]

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderMarkReleasePackAndHold**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderMarkReleasePackAndHold($id)

MarkReleasePackAndHold

Release an Order as Pack And Hold - Moves it to an Order to it's orginal status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId

try {
    $result = $apiInstance->orderMarkReleasePackAndHold($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderMarkReleasePackAndHold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderOrderSplit**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrderSplit[] orderOrderSplit($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->orderOrderSplit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderOrderSplit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrderSplit[]**](../Model/ToolkitDataClassesOrdersOrderSplit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderQueries**
> \Swagger\Client\Model\ToolkitDataClassesHelpOrderQueriesOrderQuery[] orderQueries($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->orderQueries($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderQueries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesHelpOrderQueriesOrderQuery[]**](../Model/ToolkitDataClassesHelpOrderQueriesOrderQuery.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderQueryComments**
> \Swagger\Client\Model\ToolkitDataClassesHelpOrderQueriesOrderQueryComment[] orderQueryComments($id, $query_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$query_id = 56; // int | 

try {
    $result = $apiInstance->orderQueryComments($id, $query_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderQueryComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **query_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesHelpOrderQueriesOrderQueryComment[]**](../Model/ToolkitDataClassesHelpOrderQueriesOrderQueryComment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderSearchOrder**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrder[] orderSearchOrder($order_number)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_number = "order_number_example"; // string | 

try {
    $result = $apiInstance->orderSearchOrder($order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderSearchOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrder[]**](../Model/ToolkitDataClassesOrdersOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderSplitOrderItems**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderSplitOrderItems($id, $order_items_to_split)

SplitOrderItems

Split given OrderItems from existing order onto a new Order that could be despatched seperately.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId
$order_items_to_split = array(new \Swagger\Client\Model\ToolkitDataClassesOrdersSplitOrderOnOrderItems()); // \Swagger\Client\Model\ToolkitDataClassesOrdersSplitOrderOnOrderItems[] | Order Items to Split onto new order

try {
    $result = $apiInstance->orderSplitOrderItems($id, $order_items_to_split);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderSplitOrderItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |
 **order_items_to_split** | [**\Swagger\Client\Model\ToolkitDataClassesOrdersSplitOrderOnOrderItems[]**](../Model/ToolkitDataClassesOrdersSplitOrderOnOrderItems.md)| Order Items to Split onto new order |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderUpdateNumberOfParcels**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderUpdateNumberOfParcels($id, $number_of_parcels)

Update Number Of Parcels

Updates Number Of Parcels on an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId
$number_of_parcels = 56; // int | NumberOfParcels

try {
    $result = $apiInstance->orderUpdateNumberOfParcels($id, $number_of_parcels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUpdateNumberOfParcels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |
 **number_of_parcels** | **int**| NumberOfParcels |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderUpdateOrder**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderUpdateOrder($id, $order)

Update Order Details

Update Order Details for an Existing Order - Note Will not Update Order Items use speicified methods for them

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$order = new \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrder(); // \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrder | 

try {
    $result = $apiInstance->orderUpdateOrder($id, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUpdateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **order** | [**\Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrder**](../Model/ToolkitDataClassesOrdersAPINewOrder.md)|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderUpdateOrderItem**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderUpdateOrderItem($id, $item_id, $order_item)

Update Order Item

Update Order Item - Can be used for editing the quantity of an Item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | OrderId
$item_id = 56; // int | 
$order_item = new \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderItem(); // \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderItem | 

try {
    $result = $apiInstance->orderUpdateOrderItem($id, $item_id, $order_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUpdateOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| OrderId |
 **item_id** | **int**|  |
 **order_item** | [**\Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderItem**](../Model/ToolkitDataClassesOrdersAPINewOrderItem.md)|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderUploadConnectAction**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderUploadConnectAction($id, $order_shipment)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$order_shipment = new \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderConnectAction(); // \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderConnectAction | 

try {
    $result = $apiInstance->orderUploadConnectAction($id, $order_shipment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUploadConnectAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **order_shipment** | [**\Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderConnectAction**](../Model/ToolkitDataClassesOrdersAPINewOrderConnectAction.md)|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderUploadOrderDocument**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderUploadOrderDocument($id, $order_document, $print_with_order, $document_type_id, $paper_size)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$order_document = new \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderDocument(); // \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderDocument | 
$print_with_order = true; // bool | 
$document_type_id = 56; // int | 
$paper_size = 56; // int | 

try {
    $result = $apiInstance->orderUploadOrderDocument($id, $order_document, $print_with_order, $document_type_id, $paper_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUploadOrderDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **order_document** | [**\Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderDocument**](../Model/ToolkitDataClassesOrdersAPINewOrderDocument.md)|  |
 **print_with_order** | **bool**|  |
 **document_type_id** | **int**|  |
 **paper_size** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderUploadOrderShipment**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult orderUploadOrderShipment($id, $order_shipment)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$order_shipment = new \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderShipment(); // \Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderShipment | 

try {
    $result = $apiInstance->orderUploadOrderShipment($id, $order_shipment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUploadOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **order_shipment** | [**\Swagger\Client\Model\ToolkitDataClassesOrdersAPINewOrderShipment**](../Model/ToolkitDataClassesOrdersAPINewOrderShipment.md)|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

