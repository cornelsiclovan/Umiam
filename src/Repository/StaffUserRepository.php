<?php

namespace App\Repository;

use App\Entity\StaffUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method StaffUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method StaffUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method StaffUser[]    findAll()
 * @method StaffUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StaffUserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StaffUser::class);
    }

//    /**
//     * @return StaffUser[] Returns an array of StaffUser objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StaffUser
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
