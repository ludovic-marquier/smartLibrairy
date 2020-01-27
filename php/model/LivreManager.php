<?php


class LivreManager extends Manager{

    private $_db;

    public function __construct(){
        $this->_db = $this->dbConnect();
    }

    public function getAllLivres(){
        $req = $this->_db->prepare("SELECT * FROM livres");
        $req->execute();
        return $req;
    }

    public function getLivre($idLivre){

    }

    public function addLivre($parution, $langue, $taille, $genre, $difficulte, $edition, $image, $idAuteur){

    }



}