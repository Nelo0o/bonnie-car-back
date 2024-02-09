<?php

namespace App\Repository;

use App\Entity\VehicleAd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VehicleAd>
 *
 * @method VehicleAd|null find($id, $lockMode = null, $lockVersion = null)
 * @method VehicleAd|null findOneBy(array $criteria, array $orderBy = null)
 * @method VehicleAd[]    findAll()
 * @method VehicleAd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehicleAdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VehicleAd::class);
    }

//    /**
//     * @return VehicleAd[] Returns an array of VehicleAd objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?VehicleAd
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
