<?php


include './data/Livre.php';
include './data/Profil.php';
include './data/Vente.php';
include './data/Auteur.php';
include './controller/LivreController.php';
include './controller/AuteurController.php';
include './controller/VenteController.php';
include './controller/ProfilController.php';
include './model/LivreManager.php';
include './model/AuteurManager.php';
include './model/VenteManager.php';
include './model/ProfilManager.php';

$livreController = new LivreController();
$auteurController = new AuteurController();
$venteController =  new VenteController();
$profilController = new ProfilController();

if(isset($_GET['action'])){
    switch ($_GET['action']){

    }
}

