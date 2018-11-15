<?php
include_once 'function.php';

//avoir un tableau qui contient tout nos prénoms
$listName = ["Kilian", "Gauthier", "Julien", "Valentin", "Mathilde", "Jean", "Sima", "Gabriel", "Mathilde"];

// array_rand fait sortir le prénom aléatoirement
// on précise d'abord le tableau et ensuite la clé qu'on veut (1 équivaut à tous les prénoms)
$arrayrandomResult = array_rand($listName, 1);

echo $listName[$arrayrandomResult];

?>




