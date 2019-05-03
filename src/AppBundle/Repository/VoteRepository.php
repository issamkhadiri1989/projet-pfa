<?php

namespace AppBundle\Repository;

/**
 * VoteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VoteRepository extends \Doctrine\ORM\EntityRepository
{
    public function check_vote($user, $docteur)
    {
        $qb = $this->createQueryBuilder('v');
        $qb->where("v.docteur=:d")->setParameter("d", $docteur)
            ->andWhere("v.user=:u")->setParameter("u", $user);
        $result = $qb->getQuery()->getOneOrNullResult();
        return $result;
    }

    public function get_votes_moyen($docteur)
    {
        $qb = $this->createQueryBuilder('v');
        $qb->select("avg(v.vote) nb")
            ->where("v.docteur=:d")
            ->setParameter("d", $docteur);
        $result = $qb->getQuery()->getOneOrNullResult();
        return $result == null ? 0 : (int)ceil($result["nb"]);
    }
}