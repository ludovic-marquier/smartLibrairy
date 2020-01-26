<?php


class Manager{

    private $_bd;

    public function __construct(){
        $this->_bd = new PDO();
    }

}