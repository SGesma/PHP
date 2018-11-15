<?php
include_once 'librairie.php';

// on crée un tableau avec des numbers
$listNumbers = [1, 2, 3, 4, 5, 6];
// on crée un tableau de type string (chaîne de caractère)
$listStrings = ["chocolat", "caramel", "confiture"];

// on appelle une fonction array_merge (fusionner le tableau/cellules)
$arrayResultMerge = array_merge($listNumbers, $listStrings);

// on affiche les informations du tableau (type, booléen, int..)
preDump($arrayResultMerge);
preDump($listNumbers);

$newArray = [];

// on définit une nouvelle fonction array_push (va pousser un ou plusieurs élèments à la fin du tableau )
array_push($newArray, "Toto", 10, true);

preDump($newArray);

// on définit une nvelle fonction array_splice (coupe le tableau selon l'indice qu'on indique)
// là il s'agit de l'indice 3 (va supprimer le reste)
// on stocke le résultat dans une variable
$newSportLists = array_splice($sportList, 3);

preDump($newSportLists);
preDump($sportList);

//avoir un tableau qui contient tout nos prénoms
$listName = ["Kilian", "Gauthier", "Julien", "Valentin", "Mathilde", "Jean", "Sima", "Gabriel", "Mathilde"];

//il faut que ça ressorte un prénom aléatoirement (jamais le même)
$

?>