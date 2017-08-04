<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A Profile, unique in the app.
 *
 * Partial usage of http://schema.org/Person
 *
 * @ApiResource()
 * @ORM\Entity
 */
class Person
{
    /**
     * @var string The id of the person to retrieve it
     *
     * @ORM\Column(type="string")
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;
    /**
     * @var string Given name. In the U.S., the first name of a Person
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $givenName;
    /**
     * @var string Family name. In the U.S., the last name of an Person
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $familyName;
    /**
     * @var string An additional name for a Person, can be used for a middle name
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $additionalName;
    /**
     * @var string An honorific prefix preceding a Person's name such as Dr/Mrs/Mr
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $honorificPrefix;
    /**
     * @var string An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $honorificSuffix;
    /**
     * @var integer Gender of the person
     *     - -1: undefined
     *     -  0: male
     *     -  1: female
     *
     * @ORM\Column(type="smallint", options={"default":-1})
     * @Assert\Range(min=-1, max=1)
     */
    private $gender;
    /**
     * @var string The job title of the person (for example, Financial Manager)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $jobTitle;
    /**
     * @var string A description of the item
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;
    /**
     * @var string An image url of the item
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $image;
    /**
     * @var \Datetime Date of birth
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthDate;
    /**
     * @var The place where the person was born
     * Place
     */
    // private $birthPlace;
    /**
     * @var string Nationality of the person
     *
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $nationality;
    /**
     * @var A contact location for a person's residence
     * Place
     */
    // private $homeLocation;
    /**
     * @var Physical address of the item
     * PostalAddress or Text
     */
    // private $address;
    /**
     * @var string Email address
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $email;
    /**
     * @var string The telephone number
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $telephone;
    /**
     * @var string The fax number
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $faxNumber;

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set givenName
     *
     * @param string $givenName
     *
     * @return Person
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;

        return $this;
    }

    /**
     * Get givenName
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * Set familyName
     *
     * @param string $familyName
     *
     * @return Person
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * Get familyName
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Set additionalName
     *
     * @param string $additionalName
     *
     * @return Person
     */
    public function setAdditionalName($additionalName)
    {
        $this->additionalName = $additionalName;

        return $this;
    }

    /**
     * Get additionalName
     *
     * @return string
     */
    public function getAdditionalName()
    {
        return $this->additionalName;
    }

    /**
     * Set honorificPrefix
     *
     * @param string $honorificPrefix
     *
     * @return Person
     */
    public function setHonorificPrefix($honorificPrefix)
    {
        $this->honorificPrefix = $honorificPrefix;

        return $this;
    }

    /**
     * Get honorificPrefix
     *
     * @return string
     */
    public function getHonorificPrefix()
    {
        return $this->honorificPrefix;
    }

    /**
     * Set honorificSuffix
     *
     * @param string $honorificSuffix
     *
     * @return Person
     */
    public function setHonorificSuffix($honorificSuffix)
    {
        $this->honorificSuffix = $honorificSuffix;

        return $this;
    }

    /**
     * Get honorificSuffix
     *
     * @return string
     */
    public function getHonorificSuffix()
    {
        return $this->honorificSuffix;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     *
     * @return Person
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
     * Set jobTitle
     *
     * @param string $jobTitle
     *
     * @return Person
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Person
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Person
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Person
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
     * Set nationality
     *
     * @param string $nationality
     *
     * @return Person
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Person
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Person
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set faxNumber
     *
     * @param string $faxNumber
     *
     * @return Person
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * Get faxNumber
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }
}
