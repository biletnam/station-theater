<?php

namespace App\Repository;

use App\Entity\CompanyMember;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CompanyMember|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompanyMember|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompanyMember[]    findAll()
 * @method CompanyMember[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompanyMemberRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CompanyMember::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('c')
            ->where('c.something = :value')->setParameter('value', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
