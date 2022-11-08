<h1> Exercice 1 </h1>

<?php

function convertirMajRouge(string $var){
    echo strtoupper("<font color=\"red\">$var</font>");
};

$texte = "Mon texte en paramètre";

convertirMajRouge($texte);

?>