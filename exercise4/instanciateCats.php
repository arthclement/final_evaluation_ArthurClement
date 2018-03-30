<?php
//Importing the cat file
require_once 'cat.php';

/*Instanciate the cats (those are cats that I had in my life :P)
Use try/catch block to catch Exception in case of failure when generating the object
*/
try {
    $chaussette = new Cat('Chaussette', 10, 'Grey', 'male', 'Siamois');
} catch (Exception $e) {
    echo 'Error when creating cat!';
}

try {
    $josephine = new Cat('Joséphine', 7, 'Multicolor', 'female', 'European');
} catch (Exception $e) {
    echo 'Error when creating cat!';
}

try {
    $maika = new Cat('Maïka', 2, 'Multicolor', 'female', 'European');
} catch (Exception $e) {
    echo 'Error when creating cat!';
}

//Getting infos of the cats
$catsInfo = [
    $chaussette->getInfo(),
    $josephine->getInfo(),
    $maika->getInfo()
];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cats</title>
    </head>

    <body>
        <h1>These are my cats</h1>
        <!-- Creating a table to display the informations -->
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Color</th>
                <th>Sex</th>
                <th>Race</th>
            </tr>
            <?php
            foreach($catsInfo as $value) { //Using foreach loop to get the cat
                echo '<tr>';
                foreach ($value as $innerValue) { //Using foreach loop to get infos about the cats
                    echo '<td>' . $innerValue . '</td>';
                }
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>