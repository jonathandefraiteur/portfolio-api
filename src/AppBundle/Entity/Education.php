<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * An Education
 *
 * @ApiResource()
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
     * @var string The school name
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $schoolName;

    /**
     * @var string The degree (level, Licence/Master/...)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $degree;

    /**
     * @var string The study field (Botanic/Sciences/...)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $studyField;

    /**
     * @var string The grade obtain (score)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $grade;

    /**
     * @var \DateTime The start date of the education
     *
     * @ORM\Column(type="datetime", nullable=true)
     * @Assert\NotNull()
     */
    private $startDate;

    /**
     * @var \DateTime The end date of the education. If null, consider as ongoing
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var string Summary of the education
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $summary;

    /**
     * @var string Detailed description of the education, in markdown
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionMd;

    /**
     * @var string The activities done during the education
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $activities;

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
     * Set schoolName
     *
     * @param string $schoolName
     *
     * @return Education
     */
    public function setSchoolName($schoolName)
    {
        $this->schoolName = $schoolName;

        return $this;
    }

    /**
     * Get schoolName
     *
     * @return string
     */
    public function getSchoolName()
    {
        return $this->schoolName;
    }

    /**
     * Set degree
     *
     * @param string $degree
     *
     * @return Education
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;

        return $this;
    }

    /**
     * Get degree
     *
     * @return string
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Set studyField
     *
     * @param string $studyField
     *
     * @return Education
     */
    public function setStudyField($studyField)
    {
        $this->studyField = $studyField;

        return $this;
    }

    /**
     * Get studyField
     *
     * @return string
     */
    public function getStudyField()
    {
        return $this->studyField;
    }

    /**
     * Set grade
     *
     * @param string $grade
     *
     * @return Education
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Education
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Education
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return Education
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
     * @return Education
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
     * Set activities
     *
     * @param string $activities
     *
     * @return Education
     */
    public function setActivities($activities)
    {
        $this->activities = $activities;

        return $this;
    }

    /**
     * Get activities
     *
     * @return string
     */
    public function getActivities()
    {
        return $this->activities;
    }
}
