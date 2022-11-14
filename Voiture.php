<h1> Exercice 14 Class Voiture </h1>

<?php

class Voiture {
    private $_marque;
    private $_modele;

    public function __construct(string $marque,string $modele){
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    //GET
    public function getMarque(){
        return $this->_marque;
    }
    public function getModele(){
        return $this->_modele;
    }

    //SET
    public function setMarque($marque){
        $this->_marque = $marque;
    }
    public function setModele($modele){
        $this->_modele = $modele;
    }

    public function getInfo() {
        echo "Info Véhicule <br>
        ****************************<br>
        Nom et modèle du véhicule : $this<br>";
    }
    
    //Retourne la valeur lorsque qu'on écrit $this
    public function __toString()
    {
        return $this->getMarque()." ".$this->getModele();
    }
}



?>

