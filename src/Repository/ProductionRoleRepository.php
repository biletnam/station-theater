<?php

namespace App\Repository;

use App\Entity\ProductionRole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProductionRole|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductionRole|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductionRole[]    findAll()
 * @method ProductionRole[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductionRoleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProductionRole::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.something = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
