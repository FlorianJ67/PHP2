<h1> Exercice 5 </h1>

<?php

function afficherInput($inputTab) {
    echo '<form action="reponse.php" method="GET">';
    foreach ($inputTab as $input) {
        echo '<label>Votre ' .$input. ' : </label><br><input type="text" name="'.$input. '"><br>';
    }
    echo '<input type=submit value="Envoyer"></form>'; 
}

$nomsInput = [
    "Nom",
    "Prenom",
    "Ville"
];
afficherInput($nomsInput);

?>