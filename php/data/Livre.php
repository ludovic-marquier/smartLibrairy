<?php


class Livre{

    private $_idLivre;
    private $_parution;
    private $_langue;
    private $_taille;
    private $_genre;
    private $_difficulte;
    private $_edition;
    private $_image;
    private $_idAuteur;

    /**
     * Livre constructor.
     * @param $_idLivre
     * @param $_parution
     * @param $_langue
     * @param $_taille
     * @param $_genre
     * @param $_difficulte
     * @param $_edition
     * @param $_image
     * @param $_idAuteur
     */
    public function __construct($_idLivre, $_parution, $_langue, $_taille, $_genre, $_difficulte, $_edition, $_image, $_idAuteur)
    {
        $this->_idLivre = $_idLivre;
        $this->_parution = $_parution;
        $this->_langue = $_langue;
        $this->_taille = $_taille;
        $this->_genre = $_genre;
        $this->_difficulte = $_difficulte;
        $this->_edition = $_edition;
        $this->_image = $_image;
        $this->_idAuteur = $_idAuteur;
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

    /**
     * @return mixed
     */
    public function getParution()
    {
        return $this->_parution;
    }

    /**
     * @param mixed $parution
     */
    public function setParution($parution)
    {
        $this->_parution = $parution;
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
    public function getTaille()
    {
        return $this->_taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->_taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->_genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->_genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getDifficulte()
    {
        return $this->_difficulte;
    }

    /**
     * @param mixed $difficulte
     */
    public function setDifficulte($difficulte)
    {
        $this->_difficulte = $difficulte;
    }

    /**
     * @return mixed
     */
    public function getEdition()
    {
        return $this->_edition;
    }

    /**
     * @param mixed $edition
     */
    public function setEdition($edition)
    {
        $this->_edition = $edition;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->_image = $image;
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



}