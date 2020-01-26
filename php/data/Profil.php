<?php


class Profil{

    private $_idProfil;
    private $_dateNaissance;
    private $_sexe;
    private $_profession;
    private $_adresse;
    private $_langue;
    private $_mail;
    private $_password;

    /**
     * Profil constructor.
     * @param $_idProfil
     * @param $_dateNaissance
     * @param $_sexe
     * @param $_profession
     * @param $_adresse
     * @param $_langue
     * @param $_mail
     * @param $_password
     */

    public function __construct($_idProfil, $_dateNaissance, $_sexe, $_profession, $_adresse, $_langue, $_mail, $_password)
    {
        $this->_idProfil = $_idProfil;
        $this->_dateNaissance = $_dateNaissance;
        $this->_sexe = $_sexe;
        $this->_profession = $_profession;
        $this->_adresse = $_adresse;
        $this->_langue = $_langue;
        $this->_mail = $_mail;
        $this->_password = $_password;
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
    public function getSexe()
    {
        return $this->_sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->_sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getProfession()
    {
        return $this->_profession;
    }

    /**
     * @param mixed $profession
     */
    public function setProfession($profession)
    {
        $this->_profession = $profession;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->_adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getLangue()
    {
        return $this->_langue;
    }

    /**
     * @param mixed $langue
     */
    public function setLangue($langue)
    {
        $this->_langue = $langue;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->_mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->_mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }



}