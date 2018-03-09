<?php

namespace App\Entity;

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
     * @ORM\Column(type="simple_array")
     */
    private $playwrights;

    /**
     * @ORM\Column(type="simple_array")
     */
    private $directors;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $settingTime;

    /**
     * @ORM\Column(type="boolean")
     */
    private $intermission;

    /**
     * @ORM\Column(type="string")
     */
    private $poster;

    /**
     * @ORM\Column(type="text")
     */
    private $directorsNote;

    /**
     * @ORM\Column(type="text")
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
     * @ORM\Column(type="string")
     */
    private $season;

    /**
     * @ORM\Column(type="text")
     */
    private $scriptQuote;

    /**
     * @ORM\Column(type="string")
     */
    private $scriptQuoteAttribution;

    /**
     * @ORM\Column(type="string")
     */
    private $photo;
}
