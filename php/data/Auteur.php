<?php


class Auteur{

    private $_idAuteur;
    private $_nom;
    private $_prenom;
    private $_dateNaissance;
    private $_nationalite;

    /**
     * Auteur constructor.
     * @param $_idAuteur
     * @param $_nom
     * @param $_prenom
     * @param $_dateNaissance
     * @param $_nationalite
     */
    public function __construct($_idAuteur, $_nom, $_prenom, $_dateNaissance, $_nationalite)
    {
        $this->_idAuteur = $_idAuteur;
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_dateNaissance = $_dateNaissance;
        $this->_nationalite = $_nationalite;
    }

    /**
     * @return mixed
     */
    public function getIdAuteur()
    {
        return $this->_idAuteur;
    }

    /**
     * @param mixed $idAuteur
     */
    public function setIdAuteur($idAuteur)
    {
        $this->_idAuteur = $idAuteur;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }

    /**
     * @param mixed $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->_dateNaissance = $dateNaissance;
    }

    /**
     * @return mixed
     */
    public function getNationalite()
    {
        return $this->_nationalite;
    }

    /**
     * @param mixed $nationalite
     */
    public function setNationalite($nationalite)
    {
        $this->_nationalite = $nationalite;
    }



}