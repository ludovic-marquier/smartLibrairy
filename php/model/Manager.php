<?php


class Manager{

    private $_bd;

    public function __construct(){
        $this->_bd = $this->dbConnect();
    }

    //Connexion a la base de données
    public function dbConnect(){
        $db = new PDO('mysql:host=localhost;dbname=id12251793_library;charset=utf8', 'id12251793_library', 'library2020');
        return $db;
    }

}