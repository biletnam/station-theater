<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductionRoleRepository")
 */
class ProductionRole
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
     * @ORM\Column(type="role")
     */
    private $role;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isStarring;

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
    public function getRole() {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role): void {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getisStarring() {
        return $this->isStarring;
    }

    /**
     * @param mixed $isStarring
     */
    public function setIsStarring($isStarring): void {
        $this->isStarring = $isStarring;
    }
}
