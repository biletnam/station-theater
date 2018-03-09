<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductionRepository")
 */
class Production
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     */
    private $playwrights;

    /**
     * @ORM\Column(type="string")
     */
    private $directors;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $settingTime;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $intermission;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $poster;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $directorsNote;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $specialThanks;

    /**
     * @ORM\Column(type="date")
     */
    private $startDate;

    /**
     * @ORM\Column(type="date")
     */
    private $endDate;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $season;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $scriptQuote;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $scriptQuoteAttribution;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ProductionRole", mappedBy="production", cascade={"persist"})
     * @var ArrayCollection
     */
    private $productionRoles;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ProductionReview", mappedBy="production", cascade={"persist"})
     * @var ArrayCollection
     */
    private $productionReviews;

    public function __construct()
    {
        $this->productionRoles = new ArrayCollection();
        $this->productionReviews = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getTitle() ?: 'Untitled Production';
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getPlaywrights()
    {
        return $this->playwrights;
    }

    public function setPlaywrights($playwrights): void
    {
        $this->playwrights = $playwrights;
    }

    public function getDirectors()
    {
        return $this->directors;
    }

    public function setDirectors($directors): void
    {
        $this->directors = $directors;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getSettingTime()
    {
        return $this->settingTime;
    }

    /**
     * @param mixed $settingTime
     */
    public function setSettingTime($settingTime): void
    {
        $this->settingTime = $settingTime;
    }

    /**
     * @return mixed
     */
    public function getIntermission()
    {
        return $this->intermission;
    }

    /**
     * @param mixed $intermission
     */
    public function setIntermission($intermission): void
    {
        $this->intermission = $intermission;
    }

    /**
     * @return mixed
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * @param mixed $poster
     */
    public function setPoster($poster): void
    {
        $this->poster = $poster;
    }

    /**
     * @return mixed
     */
    public function getDirectorsNote()
    {
        return $this->directorsNote;
    }

    /**
     * @param mixed $directorsNote
     */
    public function setDirectorsNote($directorsNote): void
    {
        $this->directorsNote = $directorsNote;
    }

    /**
     * @return mixed
     */
    public function getSpecialThanks()
    {
        return $this->specialThanks;
    }

    /**
     * @param mixed $specialThanks
     */
    public function setSpecialThanks($specialThanks): void
    {
        $this->specialThanks = $specialThanks;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param mixed $season
     */
    public function setSeason($season): void
    {
        $this->season = $season;
    }

    /**
     * @return mixed
     */
    public function getScriptQuote()
    {
        return $this->scriptQuote;
    }

    /**
     * @param mixed $scriptQuote
     */
    public function setScriptQuote($scriptQuote): void
    {
        $this->scriptQuote = $scriptQuote;
    }

    /**
     * @return mixed
     */
    public function getScriptQuoteAttribution()
    {
        return $this->scriptQuoteAttribution;
    }

    /**
     * @param mixed $scriptQuoteAttribution
     */
    public function setScriptQuoteAttribution($scriptQuoteAttribution): void
    {
        $this->scriptQuoteAttribution = $scriptQuoteAttribution;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }

    public function getProductionRoles()
    {
        return $this->productionRoles;
    }

    public function addProductionRole(ProductionRole $productionRole)
    {
        if ($this->productionRoles->contains($productionRole))
            return;
        $this->productionRoles[] = $productionRole;
        $productionRole->setProduction($this);
    }

    public function removeProductionRole(ProductionRole $productionRole)
    {
        $this->productionRoles->removeElement($productionRole);
        $productionRole->setProduction(null);
    }

    public function getProductionReviews()
    {
        return $this->productionReviews;
    }

    public function addProductionReview(ProductionReview $productionReview)
    {
        if ($this->productionReviews->contains($productionReview))
            return;
        $this->productionReviews[] = $productionReview;
        $productionReview->setProduction($this);
    }

    public function removeProductionReview(ProductionReview $productionReview)
    {
        $this->productionReviews->removeElement($productionReview);
        $productionReview->setProduction(null);
    }
}
