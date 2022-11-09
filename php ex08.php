<h1> Exercice 8 </h1>

<?php

function repeterImage($img,$time) {
    $i=0;
    while ($time > $i ) {
        echo '<img src="' .$img. '" />';
        $i++;
    }
}

$url = "http://my.mobirise.com/data/userpic/764.jpg";
$time = 4;
repeterImage($url,$time);

?>