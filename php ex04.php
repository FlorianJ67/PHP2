<h1> Exercice 4 </h1>

<?php

function afficherTableHTML($table) {
    echo "<table border= '1'>
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitale</th>
                    <th>Lien Wiki</th>
                </tr>
            </thead>
            <tbody>";
    foreach ($table as $pays => $cap) {
        echo "<tr>
                <td> $pays </td>
                <td> $cap </td>
                <td> <a href=\"https://fr.wikipedia.org/wiki/$cap\" target='_blank' >".$cap."</a> </td>
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