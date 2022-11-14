<h1> Exercice 14 extend VoitureElec </h1>

<?php

class VoitureElec extends Voiture {
    private $_autonomie;
    public function __construct(string $marque,string $modele,int $autonomie){
        parent::__construct($marque,$modele);
        $this->_autonomie = $autonomie;
    }


public function getInfo() {
    echo "Info Véhicule <br>
    ****************************<br>
    Nom et modèle du véhicule : $this<br>";
    echo "Autonomie : $this->_autonomie <br>";   
}
    //Retourne la valeur lorsque qu'on écrit $this
    public function __toString()
    {
        return $this->getMarque()." ".$this->getModele();
    }
}



?>