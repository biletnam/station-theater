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
     * @ORM\ManyToOne(targetEntity="App\Entity\CompanyMember", inversedBy="productionRoles", cascade={"persist"})
     */
    private $companyMember;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Production", inversedBy="productionRoles", cascade={"persist"})
     */
    private $production;

    public function __toString()
    {
        return $this->getTitle();
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

    public function getCompanyMember():?CompanyMember {
        return $this->companyMember;
    }

    public function setCompanyMember(CompanyMember $companyMember): void {
        $this->companyMember = $companyMember;
    }

    public function getProduction():?Production {
        return $this->production;
    }

    public function setProduction(Production $production): void {
        $this->production = $production;
    }
}
