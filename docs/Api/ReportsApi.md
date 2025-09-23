# Swagger\Client\ReportsApi

All URIs are relative to *https://api.mintsoft.co.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsCourierDespatchReport**](ReportsApi.md#reportsCourierDespatchReport) | **GET** /api/Reports/CourierDespatchReport | Courier Despatch Report


# **reportsCourierDespatchReport**
> \Swagger\Client\Model\MintsoftReportsCourierDespatchReportLine[] reportsCourierDespatchReport($despatch_date_start, $despatch_date_end, $courier_id, $warehouse_id, $breakdown_by_country)

Courier Despatch Report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$despatch_date_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Despatch Start Date
$despatch_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Despatch End Date
$courier_id = 56; // int | Optional - Filter the results by Courier
$warehouse_id = 56; // int | Optional - Filter the results by Warehouse
$breakdown_by_country = true; // bool | Optional - Breakdown the results on Per Country Basis

try {
    $result = $apiInstance->reportsCourierDespatchReport($despatch_date_start, $despatch_date_end, $courier_id, $warehouse_id, $breakdown_by_country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsCourierDespatchReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **despatch_date_start** | **\DateTime**| Despatch Start Date |
 **despatch_date_end** | **\DateTime**| Despatch End Date |
 **courier_id** | **int**| Optional - Filter the results by Courier | [optional]
 **warehouse_id** | **int**| Optional - Filter the results by Warehouse | [optional]
 **breakdown_by_country** | **bool**| Optional - Breakdown the results on Per Country Basis | [optional]

### Return type

[**\Swagger\Client\Model\MintsoftReportsCourierDespatchReportLine[]**](../Model/ToolkitDataClassesReportsCourierDespatchReportLine.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

