<?php

namespace App\Repository;

use App\Entity\MenuItemType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MenuItemType|null find($id, $lockMode = null, $lockVersion = null)
 * @method MenuItemType|null findOneBy(array $criteria, array $orderBy = null)
 * @method MenuItemType[]    findAll()
 * @method MenuItemType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MenuItemTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MenuItemType::class);
    }

//    /**
//     * @return MenuItemType[] Returns an array of MenuItemType objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MenuItemType
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
