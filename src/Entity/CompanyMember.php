<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompanyMemberRepository")
 */
class CompanyMember {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $biography;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ProductionRole", mappedBy="companyMember")
     * @var ArrayCollection
     */
    private $productionRoles;

    public function __construct() {
        $this->productionRoles = new ArrayCollection();
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
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBiography() {
        return $this->biography;
    }

    /**
     * @param mixed $biography
     */
    public function setBiography($biography): void {
        $this->biography = $biography;
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

    public function getProductionRoles(): ArrayCollection {
        return $this->productionRoles;
    }

    public function addProductionRole(ProductionRole $productionRole) {
        if ($this->productionRoles->contains($productionRole))
            return;
        $this->productionRoles[] = $productionRole;
        $productionRole->setCompanyMember($this);
    }

    public function removeProductionRole(ProductionRole $productionRole) {
        $this->productionRoles->removeElement($productionRole);
        $productionRole->setCompanyMember(null);
    }
}
