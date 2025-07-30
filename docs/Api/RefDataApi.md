# Swagger\Client\RefDataApi

All URIs are relative to *https://api.mintsoft.co.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**refDataCountries**](RefDataApi.md#refDataCountries) | **GET** /api/RefData/Countries | Get Countries
[**refDataCurrencies**](RefDataApi.md#refDataCurrencies) | **GET** /api/RefData/Currencies | Get Currencies
[**refDataPickingTypes**](RefDataApi.md#refDataPickingTypes) | **GET** /api/RefData/PickingTypes | Get Picking Types
[**refDataPricingTypes**](RefDataApi.md#refDataPricingTypes) | **GET** /api/RefData/PriceTypes | Get Product Price Types


# **refDataCountries**
> \Swagger\Client\Model\ToolkitDataClassesCommonCountry[] refDataCountries()

Get Countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RefDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->refDataCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefDataApi->refDataCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCommonCountry[]**](../Model/ToolkitDataClassesCommonCountry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refDataCurrencies**
> \Swagger\Client\Model\ToolkitDataClassesCurrenciesCurrency[] refDataCurrencies()

Get Currencies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RefDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->refDataCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefDataApi->refDataCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesCurrenciesCurrency[]**](../Model/ToolkitDataClassesCurrenciesCurrency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refDataPickingTypes**
> string[] refDataPickingTypes()

Get Picking Types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RefDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->refDataPickingTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefDataApi->refDataPickingTypes: ', $e->getMessage(), PHP_EOL;
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

# **refDataPricingTypes**
> \Swagger\Client\Model\ToolkitDataClassesStockProductPriceType[] refDataPricingTypes()

Get Product Price Types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RefDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->refDataPricingTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefDataApi->refDataPricingTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ToolkitDataClassesStockProductPriceType[]**](../Model/ToolkitDataClassesStockProductPriceType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

