# OpenAPI\Server\Api\ProjectsApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectIdCatrobatGet**](ProjectsApiInterface.md#projectIdCatrobatGet) | **GET** /project/{id}/catrobat | Download the .catrobat (&#x3D;zip) file of a project
[**projectIdDelete**](ProjectsApiInterface.md#projectIdDelete) | **DELETE** /project/{id} | Delete a project
[**projectIdGet**](ProjectsApiInterface.md#projectIdGet) | **GET** /project/{id} | Get the information of a project
[**projectIdPut**](ProjectsApiInterface.md#projectIdPut) | **PUT** /project/{id} | Update details of a project
[**projectIdRecommendationsGet**](ProjectsApiInterface.md#projectIdRecommendationsGet) | **GET** /project/{id}/recommendations | Get recommended projects related to the specific project
[**projectIdReportPost**](ProjectsApiInterface.md#projectIdReportPost) | **POST** /project/{id}/report | Report a project -- StatusCode: 501 - Not yet implemented
[**projectsCategoriesGet**](ProjectsApiInterface.md#projectsCategoriesGet) | **GET** /projects/categories | Get default number of projects per category (Most downloaded etc.)
[**projectsExtensionsGet**](ProjectsApiInterface.md#projectsExtensionsGet) | **GET** /projects/extensions | Get all possible project extensions. Extensions are automatically added to projects based on their bricks.
[**projectsFeaturedGet**](ProjectsApiInterface.md#projectsFeaturedGet) | **GET** /projects/featured | Get the currently featured projects
[**projectsGet**](ProjectsApiInterface.md#projectsGet) | **GET** /projects | Get projects
[**projectsPost**](ProjectsApiInterface.md#projectsPost) | **POST** /projects | Upload a catrobat project
[**projectsSearchGet**](ProjectsApiInterface.md#projectsSearchGet) | **GET** /projects/search | Search for projects associated with a keywords
[**projectsTagsGet**](ProjectsApiInterface.md#projectsTagsGet) | **GET** /projects/tags | Get all possible project tags. Some Tags will only be availabe during events.
[**projectsUserGet**](ProjectsApiInterface.md#projectsUserGet) | **GET** /projects/user | Get the projects of the logged in user
[**projectsUserIdGet**](ProjectsApiInterface.md#projectsUserIdGet) | **GET** /projects/user/{id} | Get the public projects of a given user


## Service Declaration
```yaml
# config/services.yml
services:
    # ...
    Acme\MyBundle\Api\ProjectsApi:
        tags:
            - { name: "open_api_server.api", api: "projects" }
    # ...
```

## **projectIdCatrobatGet**
> UploadedFile projectIdCatrobatGet($id)

Download the .catrobat (=zip) file of a project

If the request is made by an authenticated user, further internal actions are triggered. (Download counter, ...)

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectIdCatrobatGet
     */
    public function projectIdCatrobatGet(string $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**UploadedFile**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectIdDelete**
> projectIdDelete($id)

Delete a project

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectIdDelete
     */
    public function projectIdDelete(string $id, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectIdGet**
> OpenAPI\Server\Model\ProjectResponse projectIdGet($id)

Get the information of a project

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectIdGet
     */
    public function projectIdGet(string $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**OpenAPI\Server\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectIdPut**
> array projectIdPut($id, $update_project_request, $accept_language)

Update details of a project

Update one of your projects. All attributes are optional. For example you can update only the description. Or you can update multiple attributes at once.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectIdPut
     */
    public function projectIdPut(string $id, UpdateProjectRequest $update_project_request, string $accept_language, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **update_project_request** | [**OpenAPI\Server\Model\UpdateProjectRequest**](../Model/UpdateProjectRequest.md)|  |
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]

### Return type

**array**

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectIdRecommendationsGet**
> OpenAPI\Server\Model\ProjectResponse projectIdRecommendationsGet($id, $category, $accept_language, $max_version, $limit, $offset, $attributes, $flavor)

Get recommended projects related to the specific project

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectIdRecommendationsGet
     */
    public function projectIdRecommendationsGet(string $id, string $category, string $accept_language, string $max_version, int $limit, int $offset, string $attributes, string $flavor, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **category** | **string**| * &#x60;similar&#x60; - Get similar projects to the specific project  * &#x60;also_downloaded&#x60; - Get projects that users who downloaded the specific project also downloaded  * &#x60;more_from_user&#x60; - Get more projects from the owner of the specific project |
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional] [default to &#39;&#39;]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **attributes** | **string**|  | [optional] [default to &#39;&#39;]
 **flavor** | **string**|  | [optional] [default to &#39;&#39;]

### Return type

[**OpenAPI\Server\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectIdReportPost**
> projectIdReportPost($id, $project_report_request)

Report a project -- StatusCode: 501 - Not yet implemented

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectIdReportPost
     */
    public function projectIdReportPost(string $id, ProjectReportRequest $project_report_request, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **project_report_request** | [**OpenAPI\Server\Model\ProjectReportRequest**](../Model/ProjectReportRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsCategoriesGet**
> OpenAPI\Server\Model\ProjectsCategory projectsCategoriesGet($max_version, $flavor, $accept_language)

Get default number of projects per category (Most downloaded etc.)

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsCategoriesGet
     */
    public function projectsCategoriesGet(string $max_version, string $flavor, string $accept_language, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional] [default to &#39;&#39;]
 **flavor** | **string**|  | [optional] [default to &#39;&#39;]
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]

### Return type

[**OpenAPI\Server\Model\ProjectsCategory**](../Model/ProjectsCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsExtensionsGet**
> OpenAPI\Server\Model\ExtensionResponse projectsExtensionsGet($accept_language)

Get all possible project extensions. Extensions are automatically added to projects based on their bricks.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsExtensionsGet
     */
    public function projectsExtensionsGet(string $accept_language, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]

### Return type

[**OpenAPI\Server\Model\ExtensionResponse**](../Model/ExtensionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsFeaturedGet**
> OpenAPI\Server\Model\FeaturedProjectResponse projectsFeaturedGet($platform, $max_version, $limit, $offset, $attributes, $flavor)

Get the currently featured projects

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsFeaturedGet
     */
    public function projectsFeaturedGet(string $platform, string $max_version, int $limit, int $offset, string $attributes, string $flavor, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  | [optional] [default to &#39;&#39;]
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional] [default to &#39;&#39;]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **attributes** | **string**|  | [optional] [default to &#39;&#39;]
 **flavor** | **string**|  | [optional] [default to &#39;&#39;]

### Return type

[**OpenAPI\Server\Model\FeaturedProjectResponse**](../Model/FeaturedProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsGet**
> OpenAPI\Server\Model\ProjectResponse projectsGet($category, $accept_language, $max_version, $limit, $offset, $attributes, $flavor)

Get projects

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsGet
     */
    public function projectsGet(string $category, string $accept_language, string $max_version, int $limit, int $offset, string $attributes, string $flavor, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**|  |
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional] [default to &#39;&#39;]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **attributes** | **string**|  | [optional] [default to &#39;&#39;]
 **flavor** | **string**|  | [optional] [default to &#39;&#39;]

### Return type

[**OpenAPI\Server\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsPost**
> array projectsPost($checksum, $file, $accept_language, $flavor, $private)

Upload a catrobat project

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsPost
     */
    public function projectsPost(string $checksum, UploadedFile $file, string $accept_language, string $flavor, bool $private, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checksum** | **string**| Checksum of the *.catrobat file |
 **file** | **UploadedFile****UploadedFile**| The *.catrobat project file |
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]
 **flavor** | **string**| The flavor of this project | [optional] [default to &#39;pocketcode&#39;]
 **private** | **bool**| Indicates whether a program should be private | [optional] [default to false]

### Return type

**array**

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsSearchGet**
> OpenAPI\Server\Model\ProjectResponse projectsSearchGet($query, $max_version, $limit, $offset, $attributes, $flavor)

Search for projects associated with a keywords

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsSearchGet
     */
    public function projectsSearchGet(string $query, string $max_version, int $limit, int $offset, string $attributes, string $flavor, int &$responseCode, array &$responseHeaders): array|object|null
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
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional] [default to &#39;&#39;]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **attributes** | **string**|  | [optional] [default to &#39;&#39;]
 **flavor** | **string**|  | [optional] [default to &#39;&#39;]

### Return type

[**OpenAPI\Server\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsTagsGet**
> OpenAPI\Server\Model\TagResponse projectsTagsGet($accept_language)

Get all possible project tags. Some Tags will only be availabe during events.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsTagsGet
     */
    public function projectsTagsGet(string $accept_language, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]

### Return type

[**OpenAPI\Server\Model\TagResponse**](../Model/TagResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsUserGet**
> OpenAPI\Server\Model\ProjectResponse projectsUserGet($max_version, $limit, $offset, $attributes, $flavor)

Get the projects of the logged in user

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsUserGet
     */
    public function projectsUserGet(string $max_version, int $limit, int $offset, string $attributes, string $flavor, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional] [default to &#39;&#39;]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **attributes** | **string**|  | [optional] [default to &#39;&#39;]
 **flavor** | **string**|  | [optional] [default to &#39;&#39;]

### Return type

[**OpenAPI\Server\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsUserIdGet**
> OpenAPI\Server\Model\ProjectResponse projectsUserIdGet($id, $max_version, $limit, $offset, $attributes, $flavor)

Get the public projects of a given user

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsUserIdGet
     */
    public function projectsUserIdGet(string $id, string $max_version, int $limit, int $offset, string $attributes, string $flavor, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional] [default to &#39;&#39;]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **attributes** | **string**|  | [optional] [default to &#39;&#39;]
 **flavor** | **string**|  | [optional] [default to &#39;&#39;]

### Return type

[**OpenAPI\Server\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

