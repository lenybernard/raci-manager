<?php

namespace App\Repository;

use App\Entity\Involvement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Involvement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Involvement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Involvement[]    findAll()
 * @method Involvement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvolvementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Involvement::class);
    }

//    /**
//     * @return Involvement[] Returns an array of Involvement objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Involvement
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
