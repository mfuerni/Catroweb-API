<?php
/**
 * TagResponse.
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

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the TagResponse model.
 *
 * @author  OpenAPI Generator team
 */
class TagResponse
{
  /**
   * The internal title of the title.
   *
   * @SerializedName("id")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $id = null;

  /**
   * The translated text of the project tag.
   *
   * @SerializedName("text")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $text = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = $data['id'] ?? null;
    $this->text = $data['text'] ?? null;
  }

  /**
   * Gets id.
   */
  public function getId(): ?string
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @param string|null $id The internal title of the title
   *
   * @return $this
   */
  public function setId(string $id = null): self
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Gets text.
   */
  public function getText(): ?string
  {
    return $this->text;
  }

  /**
   * Sets text.
   *
   * @param string|null $text the translated text of the project tag
   *
   * @return $this
   */
  public function setText(string $text = null): self
  {
    $this->text = $text;

    return $this;
  }
}
