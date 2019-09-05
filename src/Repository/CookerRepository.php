<?php

namespace App\Repository;

use App\Entity\Cooker;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Cooker|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cooker|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cooker[]    findAll()
 * @method Cooker[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CookerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cooker::class);
    }

    // /**
    //  * @return Cooker[] Returns an array of Cooker objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cooker
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
