<?php
/**
 * UploadErrorResponse.
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
 * The version of the OpenAPI document: v1.1.12
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the UploadErrorResponse model.
 *
 * @author  OpenAPI Generator team
 */
class UploadErrorResponse
{
  /**
   * @SerializedName("error")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $error = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->error = $data['error'] ?? null;
  }

  /**
   * Gets error.
   */
  public function getError(): ?string
  {
    return $this->error;
  }

  /**
   * Sets error.
   *
   * @return $this
   */
  public function setError(?string $error = null): self
  {
    $this->error = $error;

    return $this;
  }
}
