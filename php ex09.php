<h1> Exercice 9 </h1>

<?php

function afficherRadio($nomsRadio) {
    echo "<fieldset>
    <legend>Civilité : </legend>";
    foreach ($nomsRadio as $rad) {
        echo '<div>
                <input type="radio" id="' .$rad. '" name="' .$rad. '" value="' .$rad. '">
                <label for="' .$rad. '">' .$rad. '</label>
            </div>';
    }
    echo "</fieldset>";
}


$Radio = [
    "Monsieur",
    "Madame",
    "Mademoiselle"
];
afficherRadio($Radio);
?>