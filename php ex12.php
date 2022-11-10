<h1> Exercice 12 </h1>

<?php


//Fonction
function createTab($tab) {
    foreach ($tab as $row) {
        var_dump($row);
        echo "<br>";
    }
}

//Tableau
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));


//--------
createTab($tableauValeurs);

?>