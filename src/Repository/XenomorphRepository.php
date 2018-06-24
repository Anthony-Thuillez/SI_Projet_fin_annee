<?php

namespace App\Repository;

use App\Entity\Xenomorph;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Xenomorph|null find($id, $lockMode = null, $lockVersion = null)
 * @method Xenomorph|null findOneBy(array $criteria, array $orderBy = null)
 * @method Xenomorph[]    findAll()
 * @method Xenomorph[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class XenomorphRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Xenomorph::class);
    }

//    /**
//     * @return Xenomorph[] Returns an array of Xenomorph objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('x')
            ->andWhere('x.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('x.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Xenomorph
    {
        return $this->createQueryBuilder('x')
            ->andWhere('x.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
