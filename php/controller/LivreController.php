<?php


class LivreController{

    private $_livreManager;

    public function __construct(){
        $this->_livreManager = new LivreManager();
    }

    public function getAllLivres(){
        $livres = $this->_livreManager->getAllLivres();
        require ('./php/view/livreViewer.php');

    }


}