<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A Profile, unique in the app.
 *
 * @ApiResource(
 *     collectionOperations={
 *         "get"={"method"="GET", "path"="/me"},
 *         "post"={"method"="POST", "path"="/me"}
 *     },
 *     itemOperations={
 *         "get"={"method"="GET", "path"="/me/{id}"},
 *         "put"={"method"="PUT", "path"="/me/{id}"}
 *     },
 *     attributes={"jsonld_embed_context"=true}
 * )
 * @ORM\Entity
 */
class Profile
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
     * @var string The last name of the profile
     *
     * @ORM\Column(type="string")
     */
    private $lastName;

    /**
     * @var string The place of the profile
     *
     * @ORM\Column(type="string")
     */
    private $place;

    /**
     * @var string The title of the profile
     *
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @var string The summary about the profile
     *
     * @ORM\Column(type="text")
     */
    private $summary;

    /**
     * @var string The description of the profile, in markdown
     *
     * @ORM\Column(type="text")
     */
    private $descriptionMd;

    /**
     * @var string The birth date of the profile
     *
     * @ORM\Column(type="date")
     */
    private $birthDate;

    /**
     * @var int The gender of the profile
     *
     * @ORM\Column(type="smallint", options={"default":0})
     */
    private $gender;

    /**
     * @var string The phone number of the profile
     *
     * @ORM\Column(type="string")
     */
    private $phoneNumber;

    /**
     * @var string The email address of the profile
     *
     * @ORM\Column(type="string")
     */
    private $emailAddress;

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
     * @return Profile
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

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Profile
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Profile
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Profile
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return Profile
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set descriptionMd
     *
     * @param string $descriptionMd
     *
     * @return Profile
     */
    public function setDescriptionMd($descriptionMd)
    {
        $this->descriptionMd = $descriptionMd;

        return $this;
    }

    /**
     * Get descriptionMd
     *
     * @return string
     */
    public function getDescriptionMd()
    {
        return $this->descriptionMd;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Profile
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     *
     * @return Profile
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Profile
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     *
     * @return Profile
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
}
