<?php

namespace App\Repository;

use App\Entity\Equip;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Equip|null find($id, $lockMode = null, $lockVersion = null)
 * @method Equip|null findOneBy(array $criteria, array $orderBy = null)
 * @method Equip[]    findAll()
 * @method Equip[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EquipRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Equip::class);
    }

    // /**
    //  * @return Equip[] Returns an array of Equip objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Equip
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
