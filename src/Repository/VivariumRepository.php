<?php

namespace App\Repository;

use App\Entity\Vivarium;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Vivarium|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vivarium|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vivarium[]    findAll()
 * @method Vivarium[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VivariumRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Vivarium::class);
    }

//    /**
//     * @return Vivarium[] Returns an array of Vivarium objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Vivarium
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
