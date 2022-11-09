<h1> Exercice 7 </h1>

<?php

function genererCheckbox($inputTab) {
    echo '<fieldset>
    <legend>Select your choice:</legend>';
    foreach ($inputTab as $input => $checked) {
        echo '<div>
                <input type="checkbox" id=" ' .$input. ' " name="scales" ';
             if ($checked == 1) {
                echo 'checked';
             }  
        echo '>
                <label for="' .$input. '">' .$input. '</label>
            </div>';
    }
    echo '</fieldset>'; 
}

$choice = [
    "Choix 1" => 0,
    "Choix 2" => 1,
    "Choix 3" => 0
];
genererCheckbox($choice);

?>