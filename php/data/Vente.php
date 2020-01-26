<?php


class Vente{

    private $_idVente;
    private $_dateVente;
    private $_idProfil;
    private $_idLivre;

    /**
     * Vente constructor.
     * @param $_idVente
     * @param $_dateVente
     * @param $_idProfil
     * @param $_idLivre
     */
    public function __construct($_idVente, $_dateVente, $_idProfil, $_idLivre)
    {
        $this->_idVente = $_idVente;
        $this->_dateVente = $_dateVente;
        $this->_idProfil = $_idProfil;
        $this->_idLivre = $_idLivre;
    }


    /**
     * @return mixed
     */
    public function getIdVente()
    {
        return $this->_idVente;
    }

    /**
     * @param mixed $idVente
     */
    public function setIdVente($idVente)
    {
        $this->_idVente = $idVente;
    }

    /**
     * @return mixed
     */
    public function getDateVente()
    {
        return $this->_dateVente;
    }

    /**
     * @param mixed $dateVente
     */
    public function setDateVente($dateVente)
    {
        $this->_dateVente = $dateVente;
    }

    /**
     * @return mixed
     */
    public function getIdProfil()
    {
        return $this->_idProfil;
    }

    /**
     * @param mixed $idProfil
     */
    public function setIdProfil($idProfil)
    {
        $this->_idProfil = $idProfil;
    }

    /**
     * @return mixed
     */
    public function getIdLivre()
    {
        return $this->_idLivre;
    }

    /**
     * @param mixed $idLivre
     */
    public function setIdLivre($idLivre)
    {
        $this->_idLivre = $idLivre;
    }



}