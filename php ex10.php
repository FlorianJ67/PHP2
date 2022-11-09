<h1> Exercice 10 </h1>

<?php

//Appel fonction

function afficherInput($inputTab) {
    foreach ($inputTab as $input) {
        echo '<label for="' .$input. '">Votre ' .$input. ' : </label><br><input type="text" name="'.$input. '"><br>';
    }
}

function alimenterListeDeroulante($inputTab,$categorie) {
    echo '<label for="civ-select">' .$categorie. ' :</label>

    <select name="civility" id="civ-select">
    <option value="">' .$categorie. '</option>';
    foreach ($inputTab as $input) {
        echo '<option value=" ' .$input. ' ">' .$input. '</option>';
    }
    echo '</select><br>'; 
}

//Appel Tableau,string

$nomsInput = [
    "Nom",
    "Prenom",
    "Adresse",
    "eMail",
    "Ville"
];

$civility = [
    "Monsieur",
    "Madame",
    "Mademoiselle"
];
$label1 = "Sex";

$formation = [
    "Développeur Logiciel",
    "Designer web",
    "Intégrateur",
    "Chef de projet"
];
$label2 = "Formation";

//Formulaire

echo '<form action="" method="get" class="form">';

afficherInput($nomsInput);

alimenterListeDeroulante($civility,$label1);

alimenterListeDeroulante($formation,$label2);

echo '  <div class="form">
            <input type="submit" value="Submit">
        </div>
    </form>'

?>