<?php
namespace sprint2\realEstateBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class AdresseRepository extends EntityRepository

{

    public function findGouvernorat()
    {

	   $qb=$this->createQueryBuilder('a')
	   ->select('a.gouvernorat')
	   ->distinct();
	   $qb->setMaxResults(10);
	    return $qb	
	    ->getQuery()    
	    ->getResult()
  		;
  	}
}
   