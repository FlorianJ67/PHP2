<h1> Exercice 13 </h1>

<?php

//creation classe
Class Voiture {
    private $_marque;
    private $_modèle;
    private $_nbPortes;
    private $_vitesseActuelle = 0;
    private $_Démarrer = 0;

    //fonction Créer un voiture
    public function __construct($marque,$modèle,$porte){
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
    public function getEtat(){
        return $this->_Démarrer;
    }
        
    //modifie une propritété
    //SET
    public function setMarque($marque){
        $this->_marque = $marque;
    }
    public function setModèle($modèle){
        $this->_modèle = $modèle;
    }
    public function setNbPorte($porte){
        $this->_nbPortes = $porte;
    }

        
    //gerer la vitesse de la voiture
    public function demarrer() {
        $this->_Démarrer = 1;

        echo "Le véhicule " .$this->getMarque(). " " .$this->getModèle(). " démarre<br>";
    }
    public function accelerer($speed) {
        if ($this->getEtat() == 0){
            echo "Le véhicule " .$this->getMarque(). " " .$this->getModèle(). " veut accélerer de " .$speed. "<br>
            Pour accélerer, il faut démarrer le véhicule " .$this->getMarque(). " " .$this->getModèle(). " !<br>";
        } else {
        $this->_vitesseActuelle += $speed;
        echo "Le véhicule " .$this->getMarque(). " " .$this->getModèle(). " accélère à " .$this->getSpeed(). " Km/h<br>" ;
        }
    }
    public function stopper() {
        $this->_Démarrer = 0;
        $this->_vitesseActuelle = 0;
        echo "Le véhicule " .$this->getMarque(). " " .$this->getModèle(). " est stoppé<br>";
    }


    //Info du Véhicule
    public function displayCarInfo() {

        echo "Info Véhicule <br>
        ****************************<br>
        Nom et modèle du véhicule : " .$this->getMarque(). " " .$this->getModèle(). "<br>
        Nombre de portes : " .$this->getNbPorte(). "<br>
        Le véhicule " .$this->getMarque(). " est ";
        if ($this->getSpeed() <= 0){
            echo "à l'arrêt";
        } else {
            echo "démarer";
        }
        echo "<br>Sa vitesse actuelle est de : " .$this->getSpeed(). " Km/h<br><br>";
    } 
    public function displayCarSpeed() {
        echo "La vitesse du véicule " .$this->getMarque(). " " .$this->getModèle(). " est de : " .$this->getSpeed(). " Km/h<br>";
    }

};

//Déclare les 2 nouveau véhicule
$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroën","C4",3);

//Affiche les info des véhicules
$v1->displayCarInfo();
$v2->displayCarInfo();


// l'exemple d'affichage
$v1->demarrer();
$v1->accelerer(50);
$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);
$v1->displayCarSpeed();
$v2->displayCarSpeed();

?>

