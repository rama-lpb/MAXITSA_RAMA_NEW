<?php
namespace App\Service;
use App\Repository\CompteRepository;
use App\Core\App;
use App\Core\Singleton;

class CompteService extends Singleton{

    private CompteRepository $compteRepository;

    private static CompteService|null $instance = null ;

    

    function __construct (){
        $this->compteRepository = App::getDependencies('CompteRepository');
    }
    
    function getCompte($userId){
    


        return  $this->compteRepository->getComptesClient($userId);

    
    }
    
/*     static function getInstance():CompteService {
        if(self::$instance === null){
              self::$instance = new static();
              }
        return self::$instance;
    } */
function test (){
}


}