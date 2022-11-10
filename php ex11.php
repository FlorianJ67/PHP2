<h1> Exercice 11 </h1>

<?php

//- - Fonction
function getdatenottheoneondefault($date) {

    // converti Jour (en) -> (fr)
    if ($date->format('D') == "Mon") {
        echo "Lundi ";
    } else if ($date->format('D') == "Tue") {
        echo "Mardi ";
    } else if ($date->format('D') == "Wed") {
        echo "Mercredi ";
    } else if ($date->format('D') == "Thu") {
        echo "Jeudi ";
    } else if ($date->format('D') == "Fri") {
        echo "Vendredi ";
    } else if ($date->format('D') == "Sat") {
        echo "Samedi ";
    } else if ($date->format('D') == "Sun") {
        echo "Dimanche ";
    };

    echo $date->format('d');

    // converti Mois (en) -> (fr)
    if ($date->format('m') == "01") {
        echo " Janvier ";
    } else if ($date->format('m') == "02") {
        echo " Fevrier ";
    } else if ($date->format('m') == "03") {
        echo " Mars ";
    } else if ($date->format('m') == "04") {
        echo " Avril ";
    } else if ($date->format('m') == "05") {
        echo " Mai ";
    } else if ($date->format('m') == "06") {
        echo " Juin ";
    } else if ($date->format('m') == "07") {
        echo " Juillet ";
    } else if ($date->format('m') == "08") {
        echo " Août ";
    } else if ($date->format('m') == "09") {
        echo " Septembre ";
    } else if ($date->format('m') == "10") {
        echo " Octobre ";
    } else if ($date->format('m') == "11") {
        echo " Novembre ";
    } else {
        echo " Décembre ";
    }

    echo $date->format('Y');
}
/* - - penser a utiliser un switch après avoir crée un tableau
switch ($date) {
    case Mon:
        echo "Lundi";
        break;
    case Tue:
        echo "Mardi";
        break;
    case Wed:
        echo "Mercredi";
        break;
}




*/ 



//- - Déclare une date
$exempledate=date_create("2018-02-23");

//- - - - -
getdatenottheoneondefault($exempledate);





?>