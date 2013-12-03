<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

class ArticleRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return int
     */
    public function countAll()
    {
        $dql = "SELECT count(a) FROM Article a";
        $em = $this->getEntityManager();
        $query = $em->createQuery($dql);
        $result = $query->getSingleScalarResult();
        return (int) $result;
    }

    public function findAllArticles()
    {
        //TODO utiliser le Query Builder avec un ORDER BY nom d'article ASC
        $this->getEntityManager()->createQueryBuilder();
    }
} 