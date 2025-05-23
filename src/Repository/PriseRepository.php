<?php

namespace App\Repository;

use App\Entity\Prise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Prise>
 *
 * @method Prise|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prise|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prise[]    findAll()
 * @method Prise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PriseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prise::class);
    }

    //    /**
    //     * @return Prise[] Returns an array of Prise objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Prise
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
