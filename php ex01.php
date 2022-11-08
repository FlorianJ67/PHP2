<h1> Exercice 1 </h1>

<?php

function convertirMajRouge(string $var){
    echo mb_strtoupper("<font color=\"red\">$var</font>");
};
/*          */
// function convertirMajRouge(string $var){
//     $var = mb_strtoupper($var);
//     echo "<font color=\"red\">$var</font>";
// };


$texte = "Mon texte en paramètre";

convertirMajRouge($texte);

?>