<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A Profile, unique in the app.
 *
 * @ ApiResource(
 *     collectionOperations={
 *         "post"={"method"="POST", "path"="/me"}
 *     },
 *     itemOperations={
 *         "get"={"method"="GET", "path"="/me/{id}"},
 *         "put"={"method"="PUT", "path"="/me/{id}"}
 *     }
 * )
 * @ORM\Entity
 */
class Education
{
    /**
     * @var string The name of the text to retrieve it
     *
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string The first name of the profile
     *
     * @ORM\Column(type="string")
     */
    private $firstName;

    /**
     * Get id
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Education
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
}
