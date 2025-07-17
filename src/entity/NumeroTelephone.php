<?php
namespace App\Entity ;

use App\Core\Abstract\AbstractControlleur;
use App\Core\Abstract\AbstractEntity;

class NumeroTelephone extends AbstractEntity {

    private int $id ;
    private string $telephone ; 
    private Compte $compte ;
    private Users $user ; 


    public function __construct ($id = 0 , $telephone = '' ){
       $this->id = $id ; 
       $this->telephone = $telephone;
       $this->compte = new Compte() ;
       $this->user = new Users();
    }

    public  function toArray():array{

        return [
            'id'       => $this->id,
            'telephone'    => $this->telephone ,
            'user_id'    => $this->user,
            'compte_id'    => $this->compte
           
        ];
    }
    public static function toObject (array $array) : static {
       return  new static( 
            $array['id'] ?? 1,
            $array['telephone'] ?? "",
            $array['user_id'] ?? "",
            $array['compte_id'] ?? ""
       );

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
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

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

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    
}