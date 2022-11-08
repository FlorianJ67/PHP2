<h1> Exercice 5 </h1>

<?php

function afficherInput($var) {
    echo '<form action="reponse.php" method="GET">';
    foreach ($var as $va) {
        echo '<p>Votre ' .$va. ' : </p><br><input type="text" name="'.$va. '"><br>';
    }
    echo '<input type=submit value="Envoyer"></form>'; 
};

$nomsImput = [
    "Nom",
    "Prenom",
    "Ville"
];
afficherInput($nomsInput);

?>