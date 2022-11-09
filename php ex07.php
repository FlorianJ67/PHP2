<h1> Exercice 7 </h1>

<?php

function genererCheckbox($inputTab) {
    echo '<fieldset>
    <legend>Select your choice:</legend>';
    foreach ($inputTab as $input) {
        echo '<div>
                <input type="checkbox" id=" ' .$input. ' " name="scales" >
                <label for="' .$input. '">' .$input. '</label>
            </div>';
    }
    echo '</fieldset>'; 
}

$civility = [
    "Choix 1",
    "Choix 2",
    "Choix 3"
];
genererCheckbox($civility);

?>