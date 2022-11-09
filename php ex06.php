<h1> Exercice 6 </h1>

<?php

function alimenterListeDeroulante($inputTab) {
    echo '<label for="civ-select">Vous êtes:</label>

    <select name="civility" id="civ-select">
    <option value="">--Ici--</option>';
    foreach ($inputTab as $input) {
        echo '<option value=" ' .$input. ' ">' .$input. '</option>';
    }
    echo '</select>'; 
}

$civility = [
    "Monsieur",
    "Madame",
    "Mademoiselle"
];
alimenterListeDeroulante($civility);

?>