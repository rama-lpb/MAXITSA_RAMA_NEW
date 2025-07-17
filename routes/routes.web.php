<?php
use App\Controlleur\CompteControlleur;
use App\Controlleur\InscriptionControlleur;
use App\Controlleur\SecurityControlleur;


$routes = [
    '/' => ['controller'=> SecurityControlleur::class, 'method'=>'login'],
    '/inscription' => ['controller'=> SecurityControlleur::class, 'method'=>'create'],
    '/home' => ['controller'=> CompteControlleur::class, 'method'=>'index'],
    '/connexion' => ['controller'=> SecurityControlleur::class, 'method'=>'login'],
     '/deconnexion' => ['controller'=> SecurityControlleur::class, 'method'=>'logout'],
     '/comptes' => ['controller'=> CompteControlleur::class, 'method'=>'viewCompte'],
     '/soldes' => ['controller'=> CompteControlleur::class, 'method'=>'index']
];