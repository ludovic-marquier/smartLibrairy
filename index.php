<?php


include './php/data/Livre.php';
include './php/data/Profil.php';
include './php/data/Vente.php';
include './php/data/Auteur.php';
include './php/controller/LivreController.php';
include './php/controller/AuteurController.php';
include './php/controller/VenteController.php';
include './php/controller/ProfilController.php';
include './php/model/Manager.php';
include './php/model/LivreManager.php';
include './php/model/AuteurManager.php';
include './php/model/VenteManager.php';
include './php/model/ProfilManager.php';


$livreController = new LivreController();
$auteurController = new AuteurController();
$venteController =  new VenteController();
$profilController = new ProfilController();

if(isset($_GET['action'])){
    switch ($_GET['action']){
        case "getAllBooks":
            $livreController->getAllLivres();
            break;
    }
}

