<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A contact link.
 * Can be a social network link, a blog or a community hub profile link
 *
 * @ApiResource()
 * @ORM\Entity
 */
class ContactLink
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
     * @var int The type of the contact link
     * @see \ContactLinkType
     *
     * @ORM\Column(type="integer")
     */
    private $type;

    /**
     * @var string The name of the contact link (facebook, tumblr, twitter...)
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string The url for the link
     *
     * @ORM\Column(type="string")
     * @Assert\Url()
     */
    private $url;

    /**
     * @var string The title to quickly describe the link
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $title;

    /**
     * @var Profile The related profile of this contact link
     *
     * @ORM\ManyToOne(targetEntity="Profile", inversedBy="contactLinks")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    private $profile;

    /**
     * Get id
     *
     * @return guid|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return ContactLink
     */
    public function setType($type)
    {
        if (!\ContactLinkType::isValidValue($type)) {
            $this->type = $type;
        } else {
            $this->type = \ContactLinkType::Divers;
        }

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ContactLink
     */
    public function setName($name)
    {
        $this->name = strtolower($name);

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return ContactLink
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return ContactLink
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
     * Set profile
     *
     * @param Profile $profile
     *
     * @return ContactLink
     */
    public function setProfile(Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }
}
