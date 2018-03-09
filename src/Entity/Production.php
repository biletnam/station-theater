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

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPlaywrights() {
        return $this->playwrights;
    }

    /**
     * @param mixed $playwrights
     */
    public function setPlaywrights($playwrights): void {
        $this->playwrights = $playwrights;
    }

    /**
     * @return mixed
     */
    public function getDirectors() {
        return $this->directors;
    }

    /**
     * @param mixed $directors
     */
    public function setDirectors($directors): void {
        $this->directors = $directors;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getSettingTime() {
        return $this->settingTime;
    }

    /**
     * @param mixed $settingTime
     */
    public function setSettingTime($settingTime): void {
        $this->settingTime = $settingTime;
    }

    /**
     * @return mixed
     */
    public function getIntermission() {
        return $this->intermission;
    }

    /**
     * @param mixed $intermission
     */
    public function setIntermission($intermission): void {
        $this->intermission = $intermission;
    }

    /**
     * @return mixed
     */
    public function getPoster() {
        return $this->poster;
    }

    /**
     * @param mixed $poster
     */
    public function setPoster($poster): void {
        $this->poster = $poster;
    }

    /**
     * @return mixed
     */
    public function getDirectorsNote() {
        return $this->directorsNote;
    }

    /**
     * @param mixed $directorsNote
     */
    public function setDirectorsNote($directorsNote): void {
        $this->directorsNote = $directorsNote;
    }

    /**
     * @return mixed
     */
    public function getSpecialThanks() {
        return $this->specialThanks;
    }

    /**
     * @param mixed $specialThanks
     */
    public function setSpecialThanks($specialThanks): void {
        $this->specialThanks = $specialThanks;
    }

    /**
     * @return mixed
     */
    public function getStartDate() {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate): void {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate() {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate): void {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getSeason() {
        return $this->season;
    }

    /**
     * @param mixed $season
     */
    public function setSeason($season): void {
        $this->season = $season;
    }

    /**
     * @return mixed
     */
    public function getScriptQuote() {
        return $this->scriptQuote;
    }

    /**
     * @param mixed $scriptQuote
     */
    public function setScriptQuote($scriptQuote): void {
        $this->scriptQuote = $scriptQuote;
    }

    /**
     * @return mixed
     */
    public function getScriptQuoteAttribution() {
        return $this->scriptQuoteAttribution;
    }

    /**
     * @param mixed $scriptQuoteAttribution
     */
    public function setScriptQuoteAttribution($scriptQuoteAttribution): void {
        $this->scriptQuoteAttribution = $scriptQuoteAttribution;
    }

    /**
     * @return mixed
     */
    public function getPhoto() {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void {
        $this->photo = $photo;
    }
}
