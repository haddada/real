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

  	public function findvilleDistinct(){

	   $qb=$this->createQueryBuilder('a')
	   ->select('a.ville')
	   ->distinct();
	   $qb->setMaxResults(80);
	    return $qb	
	    ->getQuery()    
	    ->getResult()
  		;
  	}

  	public function findvilleGouvernorat($gouvernorat){
  		$qb=$this->createQueryBuilder('a')
	   ->select('a.ville')
	   ->distinct()
	   ->where('a.gouvernorat = :gouvernorat')
	   ->setParameter('gouvernorat',$gouvernorat['gouvernorat']);

	    return $qb	
	    ->getQuery()    
	    ->getResult()
  		;

  	}

}
   