<?php
/**
 * SearchApiInterface.
 *
 * PHP version 8.1.1
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.1.9
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

/**
 * SearchApiInterface Interface Doc Comment.
 *
 * @category Interface
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
interface SearchApiInterface
{
  /**
   * Operation searchGet.
   *
   * Search for projects, users,..
   *
   * @param string $query           (required)
   * @param string $type            (optional, default to 'all')
   * @param int    $limit           (optional, default to 20)
   * @param int    $offset          (optional, default to 0)
   * @param int    &$responseCode   The HTTP Response Code
   * @param array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return ?object
   */
  public function searchGet(string $query, string $type, int $limit, int $offset, int &$responseCode, array &$responseHeaders): ?object;
}
