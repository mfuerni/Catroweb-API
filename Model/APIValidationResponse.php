<?php
/**
 * APIValidationResponse.
 *
 * PHP version 5
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
 * The version of the OpenAPI document: v1.0.13
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
 * Class representing the APIValidationResponse model.
 *
 * @author  OpenAPI Generator team
 */
class APIValidationResponse
{
  /**
   * @var string|null
   * @SerializedName("email")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $email;

  /**
   * @var string|null
   * @SerializedName("username")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $username;

  /**
   * @var string|null
   * @SerializedName("password")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $password;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->email = isset($data['email']) ? $data['email'] : null;
    $this->username = isset($data['username']) ? $data['username'] : null;
    $this->password = isset($data['password']) ? $data['password'] : null;
  }

  /**
   * Gets email.
   */
  public function getEmail(): ?string
  {
    return $this->email;
  }

  /**
   * Sets email.
   *
   * @return $this
   */
  public function setEmail(string $email = null)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Gets username.
   */
  public function getUsername(): ?string
  {
    return $this->username;
  }

  /**
   * Sets username.
   *
   * @return $this
   */
  public function setUsername(string $username = null)
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Gets password.
   */
  public function getPassword(): ?string
  {
    return $this->password;
  }

  /**
   * Sets password.
   *
   * @return $this
   */
  public function setPassword(string $password = null)
  {
    $this->password = $password;

    return $this;
  }
}
