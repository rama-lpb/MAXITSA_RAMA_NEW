<?php

namespace App\Controlleur;

use App\Core\App;
use App\Core\Abstract\AbstractControlleur;
use App\Service\SecurityService;
use App\Core\Validator;

class SecurityControlleur extends AbstractControlleur
{

  private SecurityService $securityService;

  private Validator $validator;

  function __construct()
  {
    $this->layout = 'security';
    parent::__construct();
    $this->securityService = App::getDependencies('SecurityService');
    $this->validator = App::getDependencies('Validator');
  }



  public function login()
  {
    $this->session->unset('erreurs');
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $data = $_POST;
    $validation = [
      'login' => [
        ['required'  ,"Le champ login est obligatoire et ne peut pas être vide"],
        [ 'minlength', 4, "Le nombre de caractères saisit est inférieur au nombre minimal."],
      ],
      'password' => [
        ['required', "Le champ password est obligatoire et ne peut pas être vide"],
        ['minlength',4,  "Le nombre de caractères saisit est inférieur au nombre minimal."],
      ]
    ];

          // var_dump($data['login'] , $data['password']);

    if ($this->validator::validate($data, $validation)) {
      $connect = $this->securityService->getConnected($data['login'], $data['password']);

      if ($connect) {
        $this->session->set('user', $connect->toArray());
        header('Location: http://localhost:8010/home');
      }
      else{
        $this->validator::addErros('identifiants' ,'Les informations saisies sont incorectes');
        $this->session->set('erreurs', $this->validator::getErros());
       
       
      }
    } else {
       $this->session->set('erreurs', $this->validator::getErros());
    }


}
else {
    $this->session->set('erreurs', []); 
    }

    $this->renderHtml('login/connexion.php');
  }
  public  function show() {}
  public  function edit() {}
  public  function store() {}
  public  function create() {
    require_once '../templates/login/inscription.php';
  }
  public  function index()
  {
    require_once '../templates/compte/home.php';
  }

  public function logout()
  {
    $this->session->destroy();
    header('Location: http://localhost:8010/');
  }
}
