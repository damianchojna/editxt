<?php

namespace Editxt\ContentBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ContentItemRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ContentItemRepository extends EntityRepository
{
    /**
     * @return QueryBuilder
     */
    public function getListQueryBuilder()
    {
        $queryBuiler = $this->createQueryBuilder('itm')
            ->select('itm, rel, tag, subtit')
            ->join('itm.contentRelated', 'rel')
            ->leftJoin('itm.tags', 'tag')
            ->leftJoin('itm.subTitles', 'subtit')
            ->orderBy('itm.id', 'desc')
            ;

        return $queryBuiler;
    }
}
