<h1> Exercice 13 </h1>

<?php

//creation classe
Class Voiture {
    private $_marque;
    private $_modèle;
    private $_nbPortes;
    private $_vitesseActuelle = 0;

    //fonction Créer un voiture
    public function __constuct($marque,$modèle,$portes){
        $this->_marque = $marque;
        $this->_modèle = $modèle;
        $this->_nbPortes = $porte;
    }

    //renvoyer des propriété de la voiture
    public function getMarque(){
        return $this->_marque;
    }
    public function getModèle(){
        return $this->_modèle;
    }
    public function getNbPorte(){
        return $this->_nbPortes;
    }
        
        
        
    //gerer la vitesse de la voiture
    public function demarrer() {
    
    }
    public function accelerer() {
        
    }
    public function stopper() {
        $this->_vitesseActuelle = 0;
    }
};


$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroën","C4",3);


var_dump($v1);

?>

