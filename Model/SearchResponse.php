<?php
/**
 * SearchResponse
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.1.1
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the SearchResponse model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class SearchResponse 
{
        /**
     * Array of projects
     *
     * @var OpenAPI\Server\Model\ProjectResponse[]|null
     * @SerializedName("projects")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\ProjectResponse")
     * })
     * @Type("array<OpenAPI\Server\Model\ProjectResponse>")
     */
    protected $projects;

    /**
     * @var int|null
     * @SerializedName("projects_total")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $projects_total;

    /**
     * Array of users
     *
     * @var OpenAPI\Server\Model\BasicUserDataResponse[]|null
     * @SerializedName("users")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\BasicUserDataResponse")
     * })
     * @Type("array<OpenAPI\Server\Model\BasicUserDataResponse>")
     */
    protected $users;

    /**
     * @var int|null
     * @SerializedName("users_total")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $users_total;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->projects = isset($data['projects']) ? $data['projects'] : null;
        $this->projects_total = isset($data['projects_total']) ? $data['projects_total'] : null;
        $this->users = isset($data['users']) ? $data['users'] : null;
        $this->users_total = isset($data['users_total']) ? $data['users_total'] : null;
    }

    /**
     * Gets projects.
     *
     * @return OpenAPI\Server\Model\ProjectResponse[]|null
     */
    public function getProjects(): ?array
    {
        return $this->projects;
    }

    /**
     * Sets projects.
     *
     * @param OpenAPI\Server\Model\ProjectResponse[]|null $projects  Array of projects
     *
     * @return $this
     */
    public function setProjects(array $projects = null)
    {
        $this->projects = $projects;

        return $this;
    }

    /**
     * Gets projects_total.
     *
     * @return int|null
     */
    public function getProjectsTotal(): ?int
    {
        return $this->projects_total;
    }

    /**
     * Sets projects_total.
     *
     * @param int|null $projects_total
     *
     * @return $this
     */
    public function setProjectsTotal(int $projects_total = null)
    {
        $this->projects_total = $projects_total;

        return $this;
    }

    /**
     * Gets users.
     *
     * @return OpenAPI\Server\Model\BasicUserDataResponse[]|null
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * Sets users.
     *
     * @param OpenAPI\Server\Model\BasicUserDataResponse[]|null $users  Array of users
     *
     * @return $this
     */
    public function setUsers(array $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Gets users_total.
     *
     * @return int|null
     */
    public function getUsersTotal(): ?int
    {
        return $this->users_total;
    }

    /**
     * Sets users_total.
     *
     * @param int|null $users_total
     *
     * @return $this
     */
    public function setUsersTotal(int $users_total = null)
    {
        $this->users_total = $users_total;

        return $this;
    }
}


