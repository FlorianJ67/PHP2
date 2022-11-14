<h1> Exercice 14 index </h1>

<?php

require ("Voiture.php");
require ("VoitureElec.php");

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);
echo $v1->getInfo()."<br>";
echo $ve1->getInfo()."<br>";

?>

