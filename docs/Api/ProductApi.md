# Swagger\Client\ProductApi

All URIs are relative to *https://api.mintsoft.co.uk*

| Method                                                                                                                   | HTTP request                                              | Description                                                                     |
|--------------------------------------------------------------------------------------------------------------------------|-----------------------------------------------------------|---------------------------------------------------------------------------------|
| [**productAddAddAlt**](ProductApi.md#productAddAddAlt)                                                                   | **POST** /api/Product/{id}/AltCodes                       | Add Alt Code                                                                    |
| [**productBulkAddCartons**](ProductApi.md#productBulkAddCartons)                                                         | **POST** /api/Product/{id}/Cartons                        | Bulk Add Cartons                                                                |
| [**productBulkOnHandStockUpdate**](ProductApi.md#productBulkOnHandStockUpdate)                                           | **POST** /api/Product/BulkOnHandStockUpdate               | Bulk On Hand Stock Update                                                       |
| [**productCreateBundle**](ProductApi.md#productCreateBundle)                                                             | **PUT** /api/Product/Bundle                               | Create New Bundle                                                               |
| [**productCreateProduct**](ProductApi.md#productCreateProduct)                                                           | **PUT** /api/Product                                      | Create New Product                                                              |
| [**productCreateSupplier**](ProductApi.md#productCreateSupplier)                                                         | **PUT** /api/Product/Suppliers                            | Create New Product Supplier                                                     |
| [**productDeleteCarton**](ProductApi.md#productDeleteCarton)                                                             | **DELETE** /api/Product/{id}/Carton/{cartonId}            | Delete Carton                                                                   |
| [**productDeleteProduct**](ProductApi.md#productDeleteProduct)                                                           | **DELETE** /api/Product/{id}                              | Delete a Product                                                                |
| [**productDeleteProductPrices**](ProductApi.md#productDeleteProductPrices)                                               | **DELETE** /api/Product/ProductPrices                     | Delete Product Prices                                                           |
| [**productGet**](ProductApi.md#productGet)                                                                               | **GET** /api/Product/{id}                                 | Get Product                                                                     |
| [**productGetAltCodes**](ProductApi.md#productGetAltCodes)                                                               | **GET** /api/Product/{id}/AltCodes                        | Get Alt Codes                                                                   |
| [**productGetBundle**](ProductApi.md#productGetBundle)                                                                   | **GET** /api/Product/{id}/Bundle                          | Get Bundle                                                                      |
| [**productGetCartons**](ProductApi.md#productGetCartons)                                                                 | **GET** /api/Product/{id}/Cartons                         | Get Cartons                                                                     |
| [**productGetInventory**](ProductApi.md#productGetInventory)                                                             | **GET** /api/Product/{id}/Inventory                       | Get Inventory Records                                                           |
| [**productGetInventoryPreOrderBreakdown**](ProductApi.md#productGetInventoryPreOrderBreakdown)                           | **GET** /api/Product/{id}/Inventory/PreOrderBreakdown     | Get an Inventory Pre Order Breakdown for a specified Product and WarehouseId    |
| [**productGetInventoryPreOrderBreakdownAllWarehouses**](ProductApi.md#productGetInventoryPreOrderBreakdownAllWarehouses) | **GET** /api/Product/{id}/Inventory/PreOrderBreakdown/All | Get an Inventory Pre Order Breakdown for a specified Product and All Warehouses |
| [**productGetProductChanges**](ProductApi.md#productGetProductChanges)                                                   | **GET** /api/Product/UpdatedSince                         | Products Updated Since                                                          |
| [**productGetStockFlow**](ProductApi.md#productGetStockFlow)                                                             | **GET** /api/Product/{id}/StockFlow                       | Get Stock Flow Records                                                          |
| [**productGetStockFlowFiltered**](ProductApi.md#productGetStockFlowFiltered)                                             | **GET** /api/Product/{id}/StockFlow/Filtered              | Get Stock Flow Records - Filtered                                               |
| [**productGetStockLevels**](ProductApi.md#productGetStockLevels)                                                         | **GET** /api/Product/StockLevels                          | Get Stock Levels                                                                |
| [**productGetStockLevelsUpdatedSince**](ProductApi.md#productGetStockLevelsUpdatedSince)                                 | **GET** /api/Product/StockLevels/UpdatedSince             | Products StockLevels Updated Since                                              |
| [**productListProducts**](ProductApi.md#productListProducts)                                                             | **GET** /api/Product/List                                 |                                                                                 |
| [**productListSuppliers**](ProductApi.md#productListSuppliers)                                                           | **GET** /api/Product/Suppliers                            | List Product Suppliers                                                          |
| [**productLookupProductId**](ProductApi.md#productLookupProductId)                                                       | **GET** /api/Product/LookupProductId                      | Lookup Product Id                                                               |
| [**productSearchBarcode**](ProductApi.md#productSearchBarcode)                                                           | **GET** /api/Product/SearchBarcode                        | Search Product Barcode                                                          |
| [**productSearchProducts**](ProductApi.md#productSearchProducts)                                                         | **GET** /api/Product/Search                               | Product Search by SKU/Name                                                      |
| [**productStockLevelsByWarehouse**](ProductApi.md#productStockLevelsByWarehouse)                                         | **GET** /api/Product/StockLevelsByWarehouse               | Get Stock Levels By Warehouse                                                   |
| [**productUpdateProduct**](ProductApi.md#productUpdateProduct)                                                           | **POST** /api/Product                                     | Update Product                                                                  |
| [**productUpdateProductPrices**](ProductApi.md#productUpdateProductPrices)                                               | **PUT** /api/Product/ProductPrices                        | Add or Update Product Prices                                                    |

# **productAddAddAlt**
> productAddAddAlt($id, $sku, $connect_mapping_type)

Add Alt Code

Add an AltCode against a Product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Product ID
$sku = "sku_example"; // string | The Alternative SKU you want to add
$connect_mapping_type = "connect_mapping_type_example"; // string | The Type e.g. Amazon, Ebay, API etc

try {
    $apiInstance->productAddAddAlt($id, $sku, $connect_mapping_type);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productAddAddAlt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |
 **sku** | **string**| The Alternative SKU you want to add |
 **connect_mapping_type** | **string**| The Type e.g. Amazon, Ebay, API etc |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productBulkAddCartons**
> productBulkAddCartons($id, $cartons)

Bulk Add Cartons

Add Cartons against a Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Product ID
$cartons = array(new \Swagger\Client\Model\MintsoftStockProductContainer()); // \Swagger\Client\Model\MintsoftStockProductContainer[] | Array of Cartons for product

try {
    $apiInstance->productBulkAddCartons($id, $cartons);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productBulkAddCartons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |
 **cartons** | [**\Swagger\Client\Model\MintsoftStockProductContainer[]**](../Model/ToolkitDataClassesStockProductContainer.md)| Array of Cartons for product |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productBulkOnHandStockUpdate**
> \Swagger\Client\Model\MintsoftProductsAPIBulkStockUpdateResult[] productBulkOnHandStockUpdate($records, $client_id)

Bulk On Hand Stock Update

Update OnHand Stock Level to Provided Level and return results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$records = array(new \Swagger\Client\Model\MintsoftStockAPIBulkOnHandStockUpdate()); // \Swagger\Client\Model\MintsoftStockAPIBulkOnHandStockUpdate[] | Update Requests
$client_id = 56; // int | Client ID

try {
    $result = $apiInstance->productBulkOnHandStockUpdate($records, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productBulkOnHandStockUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **records** | [**\Swagger\Client\Model\MintsoftStockAPIBulkOnHandStockUpdate[]**](../Model/ToolkitDataClassesStockAPIBulkOnHandStockUpdate.md)| Update Requests |
 **client_id** | **int**| Client ID | [optional]

### Return type

[**\Swagger\Client\Model\MintsoftProductsAPIBulkStockUpdateResult[]**](../Model/ToolkitDataClassesProductsAPIBulkStockUpdateResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productCreateBundle**
> productCreateBundle($bundle)

Create New Bundle

Create a new Bundle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bundle = new \Swagger\Client\Model\MintsoftStockAPIBundle(); // \Swagger\Client\Model\MintsoftStockAPIBundle | Bundle

try {
    $apiInstance->productCreateBundle($bundle);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreateBundle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle** | [**\Swagger\Client\Model\MintsoftStockAPIBundle**](../Model/ToolkitDataClassesStockAPIBundle.md)| Bundle |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productCreateProduct**
> productCreateProduct($product)

Create New Product

Create a new Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product = new \Swagger\Client\Model\MintsoftStockProduct(); // \Swagger\Client\Model\MintsoftStockProduct | Product ID

try {
    $apiInstance->productCreateProduct($product);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | [**\Swagger\Client\Model\MintsoftStockProduct**](../Model/ToolkitDataClassesStockProduct.md)| Product ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productCreateSupplier**
> \Swagger\Client\Model\MintsoftCommonToolkitResult productCreateSupplier($product_supplier)

Create New Product Supplier

Create a New Product Supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_supplier = new \Swagger\Client\Model\MintsoftStockProductSupplier(); // \Swagger\Client\Model\MintsoftStockProductSupplier | ProductSupplier

try {
    $result = $apiInstance->productCreateSupplier($product_supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreateSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_supplier** | [**\Swagger\Client\Model\MintsoftStockProductSupplier**](../Model/ToolkitDataClassesStockProductSupplier.md)| ProductSupplier |

### Return type

[**\Swagger\Client\Model\MintsoftCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productDeleteCarton**
> productDeleteCarton($id, $carton_id)

Delete Carton

Delete Carton against a Product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Product ID
$carton_id = 56; // int | ID of Carton to delete

try {
    $apiInstance->productDeleteCarton($id, $carton_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productDeleteCarton: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |
 **carton_id** | **int**| ID of Carton to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productDeleteProduct**
> productDeleteProduct($id)

Delete a Product

Deletes a product - Product cannot be associated to other entities such as Order, ASN, Bundles etc

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Product Id

try {
    $apiInstance->productDeleteProduct($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productDeleteProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product Id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productDeleteProductPrices**
> productDeleteProductPrices($prices)

Delete Product Prices

Deletes an Existing Product Price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$prices = array(new \Swagger\Client\Model\MintsoftProductsAPINewProductPrice()); // \Swagger\Client\Model\MintsoftProductsAPINewProductPrice[] | Product Prices

try {
    $apiInstance->productDeleteProductPrices($prices);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productDeleteProductPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prices** | [**\Swagger\Client\Model\MintsoftProductsAPINewProductPrice[]**](../Model/ToolkitDataClassesProductsAPINewProductPrice.md)| Product Prices |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGet**
> productGet($id)

Get Product

Get Details about Bundle and Items in the Bundle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Product ID

try {
    $apiInstance->productGet($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetAltCodes**
> productGetAltCodes($id)

Get Alt Codes

Get Alternative Codes for a ProductID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Product ID

try {
    $apiInstance->productGetAltCodes($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetAltCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetBundle**
> productGetBundle($id)

Get Bundle

Get Details about Bundle and Items in the Bundle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Product ID

try {
    $apiInstance->productGetBundle($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetBundle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetCartons**
> productGetCartons($id)

Get Cartons

Get Cartons for a ProductID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Product ID

try {
    $apiInstance->productGetCartons($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetCartons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetInventory**
> productGetInventory($id, $breakdown)

Get Inventory Records

Get Inventory Records relating to a ProductId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Product ID
$breakdown = true; // bool | Include a Breakdown of that StockHolding by Batch, Serial, BestBefore etc

try {
    $apiInstance->productGetInventory($id, $breakdown);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |
 **breakdown** | **bool**| Include a Breakdown of that StockHolding by Batch, Serial, BestBefore etc | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetInventoryPreOrderBreakdown**
> productGetInventoryPreOrderBreakdown($id, $warehouse_id)

Get an Inventory Pre Order Breakdown for a specified Product and WarehouseId

Gets InventoryPreOrderBreakdown

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Product ID
$warehouse_id = 56; // int | WarehouseId ID

try {
    $apiInstance->productGetInventoryPreOrderBreakdown($id, $warehouse_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetInventoryPreOrderBreakdown: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |
 **warehouse_id** | **int**| WarehouseId ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetInventoryPreOrderBreakdownAllWarehouses**
> productGetInventoryPreOrderBreakdownAllWarehouses($id)

Get an Inventory Pre Order Breakdown for a specified Product and All Warehouses

Gets InventoryPreOrderBreakdown

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Product ID

try {
    $apiInstance->productGetInventoryPreOrderBreakdownAllWarehouses($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetInventoryPreOrderBreakdownAllWarehouses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetProductChanges**
> productGetProductChanges($from_date)

Products Updated Since

Gets a List of ProductsIds that have been updated since the FromDate supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The Date

try {
    $apiInstance->productGetProductChanges($from_date);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetProductChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**| The Date |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetStockFlow**
> productGetStockFlow($id, $from_date, $to_date, $include_details)

Get Stock Flow Records

Get StockFlow Items by SKU, and Date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Product ID
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From Date e.g. 2011-10-05T22:26:12-04:00
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To Date e.g. 2011-10-05T22:26:12-04:00
$include_details = true; // bool | Include StockFlowDetails

try {
    $apiInstance->productGetStockFlow($id, $from_date, $to_date, $include_details);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetStockFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |
 **from_date** | **\DateTime**| From Date e.g. 2011-10-05T22:26:12-04:00 |
 **to_date** | **\DateTime**| To Date e.g. 2011-10-05T22:26:12-04:00 |
 **include_details** | **bool**| Include StockFlowDetails | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetStockFlowFiltered**
> productGetStockFlowFiltered($from_date, $to_date, $id, $sku, $warehouse_id, $types, $include_orders, $include_returns, $include_details)

Get Stock Flow Records - Filtered

Get StockFlow Items by SKU, and Date, WarehouseId, Types etc

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | From Date e.g. 2011-10-05T22:26:12-04:00
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | To Date e.g. 2011-10-05T22:26:12-04:00
$id = 56; // int | Product ID - Can be 0 if Supplying SKU
$sku = "sku_example"; // string | Product SKU - Optional
$warehouse_id = 56; // int | WarehouseId e.g. 3
$types = "types_example"; // string | Types of Flows to show e.g. ALL,IN, OUT, ALLOCATE, UNALLOCATE,TRANSFER, SCRAP - Multiple can be ; list e.g. IN;OUT
$include_orders = true; // bool | Include Flows that relate to Orders
$include_returns = true; // bool | Include Flows that relate to Returns
$include_details = true; // bool | Include StockFlowDetails

try {
    $apiInstance->productGetStockFlowFiltered($from_date, $to_date, $id, $sku, $warehouse_id, $types, $include_orders, $include_returns, $include_details);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetStockFlowFiltered: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**| From Date e.g. 2011-10-05T22:26:12-04:00 |
 **to_date** | **\DateTime**| To Date e.g. 2011-10-05T22:26:12-04:00 |
 **id** | **int**| Product ID - Can be 0 if Supplying SKU |
 **sku** | **string**| Product SKU - Optional | [optional]
 **warehouse_id** | **int**| WarehouseId e.g. 3 | [optional]
 **types** | **string**| Types of Flows to show e.g. ALL,IN, OUT, ALLOCATE, UNALLOCATE,TRANSFER, SCRAP - Multiple can be ; list e.g. IN;OUT | [optional]
 **include_orders** | **bool**| Include Flows that relate to Orders | [optional]
 **include_returns** | **bool**| Include Flows that relate to Returns | [optional]
 **include_details** | **bool**| Include StockFlowDetails | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetStockLevels**
> productGetStockLevels($warehouse_id, $breakdown, $product_id, $sku, $include_subclients)

Get Stock Levels

Get Stock Levels of Products in Warehouse

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$warehouse_id = 56; // int | WarehouseId that you want to get stock levels for (i.e 3 for warehouse 3, 0 for all warehouses together, blank for all warehouses one by one)
$breakdown = true; // bool | Include a Breakdown of that StockHolding by Batch, Serial, BestBefore etc
$product_id = 56; // int | Product Id - Optional.
$sku = "sku_example"; // string | Product SKU - Optional
$include_subclients = true; // bool | Include results for sub clients if user is master client (this feature is currently disabled for most users)

try {
    $apiInstance->productGetStockLevels($warehouse_id, $breakdown, $product_id, $sku, $include_subclients);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetStockLevels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **int**| WarehouseId that you want to get stock levels for (i.e 3 for warehouse 3, 0 for all warehouses together, blank for all warehouses one by one) | [optional]
 **breakdown** | **bool**| Include a Breakdown of that StockHolding by Batch, Serial, BestBefore etc | [optional]
 **product_id** | **int**| Product Id - Optional. | [optional]
 **sku** | **string**| Product SKU - Optional | [optional]
 **include_subclients** | **bool**| Include results for sub clients if user is master client (this feature is currently disabled for most users) | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetStockLevelsUpdatedSince**
> productGetStockLevelsUpdatedSince($from_date)

Products StockLevels Updated Since

Gets a List of ProductsIds that whose StockLevels have changed since the FromDate supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The Date

try {
    $apiInstance->productGetStockLevelsUpdatedSince($from_date);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetStockLevelsUpdatedSince: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**| The Date |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productListProducts**
> \Swagger\Client\Model\MintsoftStockProduct[] productListProducts($page_no, $limit, $client_id, $since_last_updated)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_no = 56; // int | 
$limit = 56; // int | 
$client_id = 56; // int | 
$since_last_updated = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->productListProducts($page_no, $limit, $client_id, $since_last_updated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productListProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_no** | **int**|  | [optional]
 **limit** | **int**|  | [optional]
 **client_id** | **int**|  | [optional]
 **since_last_updated** | **\DateTime**|  | [optional]

### Return type

[**\Swagger\Client\Model\MintsoftStockProduct[]**](../Model/ToolkitDataClassesStockProduct.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productListSuppliers**
> \Swagger\Client\Model\MintsoftStockProductSupplier[] productListSuppliers($client_id, $page_no, $limit)

List Product Suppliers

Get paged list of Product Suppliers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 56; // int | Filter by Client Id - Admin User Only
$page_no = 56; // int | Page No - Default 1
$limit = 56; // int | Number of Results to Return - Default 100 - Max 100

try {
    $result = $apiInstance->productListSuppliers($client_id, $page_no, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productListSuppliers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Filter by Client Id - Admin User Only | [optional]
 **page_no** | **int**| Page No - Default 1 | [optional]
 **limit** | **int**| Number of Results to Return - Default 100 - Max 100 | [optional]

### Return type

[**\Swagger\Client\Model\MintsoftStockProductSupplier[]**](../Model/ToolkitDataClassesStockProductSupplier.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productLookupProductId**
> productLookupProductId($sku, $connect_mapping_type, $client_id)

Lookup Product Id

Lookup ProductId using SKU or Alt Code SKU

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | SKU to search
$connect_mapping_type = "connect_mapping_type_example"; // string | Can be left blank if not searching Alt SKUs. e.g. Amazon, Ebay etc
$client_id = 56; // int | Default 0 - Only needs to be supplied by Admin or Client Master Users

try {
    $apiInstance->productLookupProductId($sku, $connect_mapping_type, $client_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productLookupProductId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| SKU to search |
 **connect_mapping_type** | **string**| Can be left blank if not searching Alt SKUs. e.g. Amazon, Ebay etc | [optional]
 **client_id** | **int**| Default 0 - Only needs to be supplied by Admin or Client Master Users | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSearchBarcode**
> productSearchBarcode($barcode)

Search Product Barcode

Attempts to find a Product based on the barcode

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$barcode = "barcode_example"; // string | Product Barcode can be SKU, EAN, UPC based

try {
    $apiInstance->productSearchBarcode($barcode);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productSearchBarcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **barcode** | **string**| Product Barcode can be SKU, EAN, UPC based |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSearchProducts**
> productSearchProducts($search, $include_bundles, $include_discontinued)

Product Search by SKU/Name

Returns a list of products by searching on SKU and Name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = "search_example"; // string | Text to Search
$include_bundles = true; // bool | Include Bundles in the search
$include_discontinued = true; // bool | Include products that have been discontinued in the search

try {
    $apiInstance->productSearchProducts($search, $include_bundles, $include_discontinued);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productSearchProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Text to Search |
 **include_bundles** | **bool**| Include Bundles in the search | [optional]
 **include_discontinued** | **bool**| Include products that have been discontinued in the search | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productStockLevelsByWarehouse**
> productStockLevelsByWarehouse($warehouse_id, $last_updated_since)

Get Stock Levels By Warehouse

Get Stock Levels By Warehouse - Raw Stock Levels - Bundles not supported. Based on Inventory so you'll only get results where inventory record exists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$warehouse_id = 56; // int | WarehouseId that you want to get stock levels for (i.e 3 for warehouse 3)
$last_updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter list by LastUpdated time supplied so you only get one's that have changed since the supplied datetime

try {
    $apiInstance->productStockLevelsByWarehouse($warehouse_id, $last_updated_since);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productStockLevelsByWarehouse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warehouse_id** | **int**| WarehouseId that you want to get stock levels for (i.e 3 for warehouse 3) |
 **last_updated_since** | **\DateTime**| Filter list by LastUpdated time supplied so you only get one&#39;s that have changed since the supplied datetime |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productUpdateProduct**
> productUpdateProduct($product)

Update Product

Updates an Existing Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product = new \Swagger\Client\Model\MintsoftStockProduct(); // \Swagger\Client\Model\MintsoftStockProduct | Product

try {
    $apiInstance->productUpdateProduct($product);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | [**\Swagger\Client\Model\MintsoftStockProduct**](../Model/ToolkitDataClassesStockProduct.md)| Product |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productUpdateProductPrices**
> productUpdateProductPrices($prices)

Add or Update Product Prices

Adds new Product Prices (Limit of 1 Concurrent Request per Mintsoft Customer)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$prices = array(new \Swagger\Client\Model\MintsoftProductsAPINewProductPrice()); // \Swagger\Client\Model\MintsoftProductsAPINewProductPrice[] | Prices

try {
    $apiInstance->productUpdateProductPrices($prices);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdateProductPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prices** | [**\Swagger\Client\Model\MintsoftProductsAPINewProductPrice[]**](../Model/ToolkitDataClassesProductsAPINewProductPrice.md)| Prices |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

