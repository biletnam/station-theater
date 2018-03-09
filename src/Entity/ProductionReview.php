<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductionReviewRepository")
 */
class ProductionReview {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $quote;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $url;

    /**
     * @ORM\Column(type="string")
     */
    private $attribution;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Production", inversedBy="productionReviews", cascade={"persist"})
     */
    private $production;

    public function __toString()
    {
        return $this->getQuote() ?: 'Blank Review';
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getQuote() {
        return $this->quote;
    }

    /**
     * @param mixed $quote
     */
    public function setQuote($quote): void {
        $this->quote = $quote;
    }

    /**
     * @return mixed
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getAttribution() {
        return $this->attribution;
    }

    /**
     * @param mixed $attribution
     */
    public function setAttribution($attribution): void {
        $this->attribution = $attribution;
    }

    public function getProduction(): ?Production {
        return $this->production;
    }

    public function setProduction(?Production $production): void {
        $this->production = $production;
    }
}
