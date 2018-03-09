<?php

namespace App\Repository;

use App\Entity\ProductionReview;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProductionReview|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductionReview|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductionReview[]    findAll()
 * @method ProductionReview[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductionReviewRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProductionReview::class);
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
