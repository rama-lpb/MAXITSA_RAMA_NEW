<?php

namespace App\Entity ;

use App\Enums\TypeTransaction;
use DateTime;

class Transaction {
  private int $id ; 
  private  \DateTime $date ;
  private TypeTransaction $typeTransac ; 
  private float $montant ;
  private Compte $compte ;

  function __construct(int $id = 0 , DateTime $date = new dateTime()  , $typeTransac = TypeTransaction::PAIEMENT ,float $montant )
  {
    $this->id = $id ;
    $this->date = $date ;
    $this->typeTransac = $typeTransac;
    $this->montant = $montant ;
    $this->compte = new Compte ();
  }



  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of date
   */ 
  public function getDate()
  {
    return $this->date;
  }

  /**
   * Set the value of date
   *
   * @return  self
   */ 
  public function setDate($date)
  {
    $this->date = $date;

    return $this;
  }

  /**
   * Get the value of typeTransac
   */ 
  public function getTypeTransac()
  {
    return $this->typeTransac;
  }

  /**
   * Set the value of typeTransac
   *
   * @return  self
   */ 
  public function setTypeTransac($typeTransac)
  {
    $this->typeTransac = $typeTransac;

    return $this;
  }

  /**
   * Get the value of montant
   */ 
  public function getMontant()
  {
    return $this->montant;
  }

  /**
   * Set the value of montant
   *
   * @return  self
   */ 
  public function setMontant($montant)
  {
    $this->montant = $montant;

    return $this;
  }

  /**
   * Get the value of compte
   */ 
  public function getCompte()
  {
    return $this->compte;
  }

  /**
   * Set the value of compte
   *
   * @return  self
   */ 
  public function setCompte($compte)
  {
    $this->compte = $compte;

    return $this;
  }
}