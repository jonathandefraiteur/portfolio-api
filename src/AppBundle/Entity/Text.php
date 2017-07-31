<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A text.
 *
 * @ApiResource(attributes={"filters"={"text.search"}})
 * @ORM\Entity
 */
class Text
{
    /**
     * @var string The name of the text to retrieve it
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var string The text, in markdown
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $textMd;

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Text
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * Set textMd
     *
     * @param string $textMd
     *
     * @return Text
     */
    public function setTextMd($textMd)
    {
        $this->textMd = $textMd;

        return $this;
    }

    /**
     * Get textMd
     *
     * @return string
     */
    public function getTextMd()
    {
        return $this->textMd;
    }
}
