<?php

namespace App\Repository;

use App\Entity\CarAd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CarAd>
 *
 * @method CarAd|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarAd|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarAd[]    findAll()
 * @method CarAd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarAdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarAd::class);
    }

//    /**
//     * @return CarAd[] Returns an array of CarAd objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CarAd
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
