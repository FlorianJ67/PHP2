<h1> Exercice 13 </h1>

<?php

//creation classe
class Voiture {
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_demarrer;

    //fonction Créer un voiture
    public function __construct($marque,$modele,$porte){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $porte;
        $this->_vitesseActuelle = 0;
        $this->_demarrer = false;
    
    }

    //renvoyer des propriété de la voiture
    //GET
    public function getMarque(){
        return $this->_marque;
    }
    public function getModele(){
        return $this->_modele;
    }
    public function getNbPorte(){
        return $this->_nbPortes;
    }
    public function getSpeed(){
        return $this->_vitesseActuelle;
    }
    public function getEtat(){
        return $this->_demarrer;
    }
        
    //modifie une propritété
    //SET
    public function setMarque($marque){
        $this->_marque = $marque;
    }
    public function setModele($modele){
        $this->_modèle = $modele;
    }
    public function setNbPorte($porte){
        $this->_nbPortes = $porte;
    }

        
    //gerer la vitesse de la voiture
    public function demarrer() {
        $this->_demarrer = true;

        echo "Le véhicule $this démarre<br>";
    }
    public function accelerer($speed) {
        if (!$this->getEtat()){
            echo "Le véhicule $this veut accélerer de " .$speed. " Km/h<br>
            Pour accélerer, il faut démarrer le véhicule $this !<br>";
        } else {
            $this->_vitesseActuelle += $speed;
            echo "Le véhicule $this accélère à " .$this->getSpeed(). " Km/h<br>" ;
        }
    }
    public function ralentir($speed) {
        if (!$this->getEtat()){
            echo "Le véhicule $this veut ralentir de " .$speed. " Km/h<br>
            Pour ralentir, il faut démarrer le véhicule $this !<br>";
        } else {
            if ($speed > $this->getSpeed()){
               echo "Le véhicule $this ne peut ralentir plus qu'il ne roule déjà!<br>";
           } else {
               $this->_vitesseActuelle -= $speed;
               echo "Le véhicule $this ralenti à " .$this->getSpeed(). " Km/h<br>" ;  
           }
        }
    }

    public function stopper() {
        $this->_demarrer = false;
        $this->_vitesseActuelle = 0;
        echo "Le véhicule $this est stoppé<br>";
    }


    //Info du Véhicule
    public function displayCarInfo() {

        echo "Info Véhicule <br>
        ****************************<br>
        Nom et modèle du véhicule : $this<br>
        Nombre de portes : " .$this->getNbPorte(). "<br>
        Le véhicule " .$this->getMarque(). " est ";
        if (!$this->getEtat()){
            echo "à l'arrêt";
        } else {
            echo "démarer";
        }
        echo "<br>Sa vitesse actuelle est de : " .$this->getSpeed(). " Km/h<br><br>";
    } 
    public function displayCarSpeed() {
        echo "La vitesse du véicule $this est de : " .$this->getSpeed(). " Km/h<br>";
    }

    //Retourne la valeur lorsque qu'on écrit $this
    public function __toString()
    {
        return $this->getMarque()." ".$this->getModele();
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

$v1->ralentir(60);
$v1->ralentir(30);

?>

