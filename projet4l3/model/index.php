<?php

class pubindex{
  
    private $titre;
    private $contenu;

    public function __construct($titre, $contenu,$iduser)
    {
      $this->titre = $titre; 
      $this->contenu = $contenu; 
      $this->iduser = $iduser; 
       
    }

    public function setTitre($titre){$this->titre = $titre;}
    public function setPrenom($contenu){$this->contenu = $contenu;}
    public function setIduser($iduser){$this->iduser = $iduser;}

    public function getTitre(){return $this->titre;}
    public function getContenu(){return $this->contenu;}
    public function getIduser(){return $this->iduser;}

}
?>