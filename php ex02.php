<h1> Exercice 2 </h1>

<?php

function afficherTableHTML($table) {
    echo "<table border= '1'>
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitale</th>
                </tr>
            </thead>
            <tbody>";
    foreach ($table as $pays => $cap) {
        echo "<tr>
                <td> $pays </td>
                <td> $cap </td>
            </tr>";
    } echo "</tbody>
        </table>";
}

$capitales = [
    "France" =>"Paris",
    "Allemagne" =>"Berlin",
    "USA" =>"Washington",
    "Italie" =>"Rome"
];

afficherTableHTML($capitales);
?>