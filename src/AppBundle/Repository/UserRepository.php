<?php

namespace AppBundle\Repository;
use AppBundle\Entity\User;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param string $roleName
     * @return User[]
     */
    function findByRoleName(string $roleName): array
    {

        $qb = $this->createQueryBuilder('u');
        return $qb
            ->innerJoin('u.roles', 'r', 'WITH', 'r.role = :roleName')
            ->setParameter('roleName', $roleName)
            ->getQuery()
            ->getResult();
    }

}
