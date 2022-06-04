<?php
/**
 * MediaFileResponse.
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
 * Class representing the MediaFileResponse model.
 *
 * @author  OpenAPI Generator team
 */
class MediaFileResponse
{
  /**
   * @SerializedName("id")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected ?int $id = null;

  /**
   * @SerializedName("name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $name = null;

  /**
   * @var string[]|null
   * @SerializedName("flavors")
   * @Assert\All({
   *   @Assert\Type("string")
   * })
   * @Type("array<string>")
   */
  protected ?array $flavors = null;

  /**
   * @var string[]|null
   * @SerializedName("packages")
   * @Assert\All({
   *   @Assert\Type("string")
   * })
   * @Type("array<string>")
   */
  protected ?array $packages = null;

  /**
   * @SerializedName("category")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $category = null;

  /**
   * @SerializedName("author")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $author = null;

  /**
   * @SerializedName("extension")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $extension = null;

  /**
   * @SerializedName("download_url")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $download_url = null;

  /**
   * Size of the file in bytes.
   *
   * @SerializedName("size")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected ?int $size = null;

  /**
   * Type of the media file.
   *
   * @SerializedName("file_type")
   * @Assert\Choice({ "project", "image", "sound", "video", "other" })
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $file_type = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = $data['id'] ?? null;
    $this->name = $data['name'] ?? null;
    $this->flavors = $data['flavors'] ?? null;
    $this->packages = $data['packages'] ?? null;
    $this->category = $data['category'] ?? null;
    $this->author = $data['author'] ?? null;
    $this->extension = $data['extension'] ?? null;
    $this->download_url = $data['download_url'] ?? null;
    $this->size = $data['size'] ?? null;
    $this->file_type = $data['file_type'] ?? null;
  }

  /**
   * Gets id.
   */
  public function getId(): ?int
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @return $this
   */
  public function setId(int $id = null): self
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Gets name.
   */
  public function getName(): ?string
  {
    return $this->name;
  }

  /**
   * Sets name.
   *
   * @return $this
   */
  public function setName(string $name = null): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets flavors.
   *
   * @return string[]|null
   */
  public function getFlavors(): ?array
  {
    return $this->flavors;
  }

  /**
   * Sets flavors.
   *
   * @param string[]|null $flavors
   *
   * @return $this
   */
  public function setFlavors(array $flavors = null): self
  {
    $this->flavors = $flavors;

    return $this;
  }

  /**
   * Gets packages.
   *
   * @return string[]|null
   */
  public function getPackages(): ?array
  {
    return $this->packages;
  }

  /**
   * Sets packages.
   *
   * @param string[]|null $packages
   *
   * @return $this
   */
  public function setPackages(array $packages = null): self
  {
    $this->packages = $packages;

    return $this;
  }

  /**
   * Gets category.
   */
  public function getCategory(): ?string
  {
    return $this->category;
  }

  /**
   * Sets category.
   *
   * @return $this
   */
  public function setCategory(string $category = null): self
  {
    $this->category = $category;

    return $this;
  }

  /**
   * Gets author.
   */
  public function getAuthor(): ?string
  {
    return $this->author;
  }

  /**
   * Sets author.
   *
   * @return $this
   */
  public function setAuthor(string $author = null): self
  {
    $this->author = $author;

    return $this;
  }

  /**
   * Gets extension.
   */
  public function getExtension(): ?string
  {
    return $this->extension;
  }

  /**
   * Sets extension.
   *
   * @return $this
   */
  public function setExtension(string $extension = null): self
  {
    $this->extension = $extension;

    return $this;
  }

  /**
   * Gets download_url.
   */
  public function getDownloadUrl(): ?string
  {
    return $this->download_url;
  }

  /**
   * Sets download_url.
   *
   * @return $this
   */
  public function setDownloadUrl(string $download_url = null): self
  {
    $this->download_url = $download_url;

    return $this;
  }

  /**
   * Gets size.
   */
  public function getSize(): ?int
  {
    return $this->size;
  }

  /**
   * Sets size.
   *
   * @param int|null $size Size of the file in bytes
   *
   * @return $this
   */
  public function setSize(int $size = null): self
  {
    $this->size = $size;

    return $this;
  }

  /**
   * Gets file_type.
   */
  public function getFileType(): ?string
  {
    return $this->file_type;
  }

  /**
   * Sets file_type.
   *
   * @param string|null $file_type Type of the media file
   *
   * @return $this
   */
  public function setFileType(string $file_type = null): self
  {
    $this->file_type = $file_type;

    return $this;
  }
}
