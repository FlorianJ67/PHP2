<h1> Exercice 13 </h1>

<?php

//creation classe
Class Voiture {
    private $_marque;
    private $_modèle;
    private $_nbPortes;
    private $_vitesseActuelle = 0;

    //fonction Créer un voiture
    public function __constuct($marque,$modèle,$porte){
        $this->_marque = $marque;
        $this->_modèle = $modèle;
        $this->_nbPortes = $porte;
    }

    //renvoyer des propriété de la voiture
    //GET
    public function getMarque(){
        return $this->_marque;
    }
    public function getModèle(){
        return $this->_modèle;
    }
    public function getNbPorte(){
        return $this->_nbPortes;
    }
    public function getSpeed(){
        return $this->_vitesseActuelle;
    }
        
    //modifie une propritété
    //SET
    public function setMarque(){
        $this->_marque = $marque;
    }
    public function setModèle(){
        $this->_modèle = $modèle;
    }
    public function setNbPorte(){
        $this->_nbPortes = $porte;
    }
        
    //gerer la vitesse de la voiture
    public function demarrer() {
    
    }
    public function accelerer() {
        
    }
    public function stopper() {
        $this->_vitesseActuelle = 0;
    }


    //
    public function displayCarInfo() {

        echo "Info Véhicule <br>
        ****************************<br>
        Nom et modèle du véhicule : " .$this->getMarque().$this->getModèle. "<br>
        Nombre de portes : " .$this->getNbPorte(). "<br>
        Le véhicule" .$this->getMarque(). "est ";
        if ($this->getSpeed() <= 0){
            echo "à l'arrêt";
        } else {
            echo "démarer";
        }
        echo "<br>Sa vitesse actuelle est de : " .$this->getSpeed(). " Km/h";

    } 
};


$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroën","C4",3);


var_dump($v1);

$v2->displayCarInfo();

?>

