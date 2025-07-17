<?php
namespace App\Controlleur ;
use App\Service\CompteService;
use App\Core\App;

use App\Core\Abstract\AbstractControlleur;

class CompteControlleur extends AbstractControlleur{


    private CompteService $compte;

    public function __construct(){
      parent::__construct();
     $this->compte = App::getDependencies('CompteService');
    }



      public  function show(){

      }
    public  function edit (){

    }
    public  function store (){

    }
    public  function create (){

    }
    public  function index (){
       $userId = $_SESSION['user']['id'] ?? null;
      $comptes = $this->compte->getCompte($userId);
     
    $this->renderHtml('compte/home.php', ['comptes' => $comptes]);
    }

    public function viewCompte(){
      $userId = $_SESSION['user']['id'] ?? null;
      $comptes = $this->compte->getCompte($userId);
      $this->renderHtml('compte/comptes.php', ['comptes' => $comptes]);
    }

}



