# Swagger\Client\BatchApi

All URIs are relative to *https://api.mintsoft.co.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchAssignBatchToUser**](BatchApi.md#batchAssignBatchToUser) | **POST** /api/Batch/AssignBatchToUser | Assign Batch To user
[**batchAssignOrderToUser**](BatchApi.md#batchAssignOrderToUser) | **POST** /api/Batch/AssignOrderToUser | Assign Order To user
[**batchCreateBatch**](BatchApi.md#batchCreateBatch) | **POST** /api/Batch | Create Batch
[**batchCreateBatchFromTemplate**](BatchApi.md#batchCreateBatchFromTemplate) | **POST** /api/Batch/CreateBatchFromTemplate | Create Batch from Template
[**batchDeleteBatch**](BatchApi.md#batchDeleteBatch) | **DELETE** /api/Batch/DeleteBatch | Delete Batch
[**batchDespatchBatch**](BatchApi.md#batchDespatchBatch) | **POST** /api/Batch/DespatchBatch | Despatch a completed Batch
[**batchGetBatch**](BatchApi.md#batchGetBatch) | **GET** /api/Batch/{id} | Get Batch by ID
[**batchListBatches**](BatchApi.md#batchListBatches) | **GET** /api/Batch/List | List Batches
[**batchTemplates**](BatchApi.md#batchTemplates) | **GET** /api/Batch/Templates | List available Batch Templates
[**batchUpdateBatchStatus**](BatchApi.md#batchUpdateBatchStatus) | **PUT** /api/Batch/StatusUpdate/{id} | Update Batch Status


# **batchAssignBatchToUser**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult batchAssignBatchToUser($batch_id, $assign_to_user, $picking_type)

Assign Batch To user

Assigns a batch to a User to pick.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_id = 56; // int | ID of Batch you want to assign.
$assign_to_user = "assign_to_user_example"; // string | User to assign the Batch to.
$picking_type = "picking_type_example"; // string | Picking Type to select.

try {
    $result = $apiInstance->batchAssignBatchToUser($batch_id, $assign_to_user, $picking_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchAssignBatchToUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **int**| ID of Batch you want to assign. |
 **assign_to_user** | **string**| User to assign the Batch to. |
 **picking_type** | **string**| Picking Type to select. |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchAssignOrderToUser**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult batchAssignOrderToUser($order_id, $assign_to_user)

Assign Order To user

Assigns a single order to a User to pick.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 56; // int | ID of Order you want to assign.
$assign_to_user = "assign_to_user_example"; // string | User to assign the Order to.

try {
    $result = $apiInstance->batchAssignOrderToUser($order_id, $assign_to_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchAssignOrderToUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| ID of Order you want to assign. |
 **assign_to_user** | **string**| User to assign the Order to. |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchCreateBatch**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult batchCreateBatch($batch)

Create Batch

Used for creating a Batch using a List of OrderIDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch = new \Swagger\Client\Model\MintsoftAPICommonClassesNewBatch(); // \Swagger\Client\Model\MintsoftAPICommonClassesNewBatch | 

try {
    $result = $apiInstance->batchCreateBatch($batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchCreateBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch** | [**\Swagger\Client\Model\MintsoftAPICommonClassesNewBatch**](../Model/MintsoftAPICommonClassesNewBatch.md)|  |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchCreateBatchFromTemplate**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult batchCreateBatchFromTemplate($batch_template_id)

Create Batch from Template

Creates a Batch from the Template specified (Batch preview settings are ignored for this API call).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_template_id = 56; // int | Id of Template to create Batch from

try {
    $result = $apiInstance->batchCreateBatchFromTemplate($batch_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchCreateBatchFromTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_template_id** | **int**| Id of Template to create Batch from |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchDeleteBatch**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult batchDeleteBatch($batch_id)

Delete Batch

Deletes a Batch and unassigns Orders (Orders will NOT be deleted).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_id = 56; // int | Id of Batch to delete

try {
    $result = $apiInstance->batchDeleteBatch($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchDeleteBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **int**| Id of Batch to delete |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchDespatchBatch**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult[] batchDespatchBatch($batch_id)

Despatch a completed Batch

Despatches a batch, as long as all related orders have been picked.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_id = 56; // int | ID of Batch you want to despatch

try {
    $result = $apiInstance->batchDespatchBatch($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchDespatchBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **int**| ID of Batch you want to despatch |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult[]**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchGetBatch**
> \Swagger\Client\Model\ToolkitDataClassesOrdersOrder[] batchGetBatch($id)

Get Batch by ID

Get batch details from ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Batch ID

try {
    $result = $apiInstance->batchGetBatch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchGetBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Batch ID |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersOrder[]**](../Model/ToolkitDataClassesOrdersOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchListBatches**
> \Swagger\Client\Model\ToolkitDataClassesOrdersBatch[] batchListBatches()

List Batches

Get a List Of Batches Back

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->batchListBatches();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchListBatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersBatch[]**](../Model/ToolkitDataClassesOrdersBatch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchTemplates**
> \Swagger\Client\Model\ToolkitDataClassesOrdersBatchTemplate[] batchTemplates()

List available Batch Templates

Returns a list of available Batch Templates (ID and Reference).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->batchTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesOrdersBatchTemplate[]**](../Model/ToolkitDataClassesOrdersBatchTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchUpdateBatchStatus**
> \Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult batchUpdateBatchStatus($id, $order_status)

Update Batch Status

Updates status of an existing batch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Batch ID
$order_status = 56; // int | Order Status ID

try {
    $result = $apiInstance->batchUpdateBatchStatus($id, $order_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchUpdateBatchStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Batch ID |
 **order_status** | **int**| Order Status ID |

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonToolkitResult**](../Model/ToolkitDataClassesCommonToolkitResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

