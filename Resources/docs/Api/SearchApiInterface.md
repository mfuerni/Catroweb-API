# OpenAPI\Server\Api\SearchApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchGet**](SearchApiInterface.md#searchGet) | **GET** /search | Search for projects, users,..


## Service Declaration
```yaml
# config/services.yml
services:
    # ...
    Acme\MyBundle\Api\SearchApi:
        tags:
            - { name: "open_api_server.api", api: "search" }
    # ...
```

## **searchGet**
> OpenAPI\Server\Model\SearchResponse searchGet($query, $type, $limit, $offset)

Search for projects, users,..

The default is to search in all categories.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SearchApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\SearchApiInterface;

class SearchApi implements SearchApiInterface
{

    // ...

    /**
     * Implementation of SearchApiInterface#searchGet
     */
    public function searchGet(string $query, string $type, int $limit, int $offset, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**|  |
 **type** | **string**|  | [optional] [default to &#39;all&#39;]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**OpenAPI\Server\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

