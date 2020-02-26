<?php
/**
 * UserApiInterface
 * PHP version 5.
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
 * The version of the OpenAPI document: v1.0.20
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use OpenAPI\Server\Model\Register;

/**
 * UserApiInterface Interface Doc Comment.
 *
 * @category Interface
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
interface UserApiInterface
{
  /**
   * Sets authentication method pandaAuth.
   *
   * @param string $value value of the pandaAuth authentication method
   */
  public function setpandaAuth($value);

  /**
   * Operation userPost.
   *
   * Register a user
   *
   * @param OpenAPI\Server\Model\Register $register        (required)
   * @param string                        $acceptLanguage  (optional)
   * @param int                           $responseCode    The HTTP response code to return
   * @param array                         $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function userPost(Register $register, string $acceptLanguage = null, &$responseCode, array &$responseHeaders);
}
