<?php
namespace App\Repository ;

use App\Core\Abstract\AbstractRepository;
use App\Entity\Compte;
class CompteRepository extends AbstractRepository {

     private string $table = 'compte';
 private static CompteRepository|null $instance = null ;

 public static function getInstance() {
   if(self::$instance ===null){
   self::$instance = new CompteRepository();
   }
   return self::$instance ;
}


 public function __construct (){

    parent::__construct ();
 }
    
 function selectAll(){

 }
 function update(){

 }
 function delete (){

 }
 function insert(array $array){

 }

 function selectById($id){

 }

function selectBy(array $filter) {
}

public function  getComptesClient ($userId){

$sql = "SELECT * from compte c join numerotelephone n on c.id = n.compte_id  join users cl on n.user_id = cl.id  where cl.id= :user_id";
 
    $stmt = $this->DB->prepare($sql);
    $result = $stmt->execute(
       ['user_id' => $userId]
     );
   if($result) {
    return $stmt->fetchAll();
   } 
   return null;
   

}
public function  getComptePrincipal ($userId) {

 $sql = "SELECT * from compte c  join numerotelephone n on c.id = n.compte_id   join users cl on n.user_id = cl.id  join type_compte tc on c.type_id = tc.id  where tc.libelle = 'principal' and   cl.id= :$userId";

 $stmt = $this->DB->prepare($sql);
 $result = $stmt->execute( ['userId' => $userId]);

 if ($result){
     return $stmt->fetchAll();

 }
 return null ;
}

}