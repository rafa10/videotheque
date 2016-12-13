<?php

namespace VideothequeBundle\Repository;

/**
 * MoviesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MoviesRepository extends \Doctrine\ORM\EntityRepository
{

	public function searchMoviesByYear($data){

		$query = $this->createQueryBuilder('m')
            ->where('m.title = :data')
            // ->orwhere('YEAR(m.created_at) = :data')
            ->setParameter('data', $data)
            ->orderBy('m.createdAt', 'DESC')
            ->getQuery();

        $movies = $query->getResult();

        return $movies; 
	}

}
