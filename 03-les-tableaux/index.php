<?php
$array1 = array();

$array2 = [];

$array1 = array ("françois", "Nantes", 10, true);
//var_dump($array1[1]);
$array2 = ["François", "Nantes", 10];
//var_dump($array2);

//tableau associatif
//ou tableau association clé => valeur
// Se présente toujours comme ça 
$array3 = [
    "name" => "François",
    "city" => "Nantes",
    10 => "Number",
];

//accès à la propriété name
var_dump($array3["name"]);

$articles = [
    1 => [
        "title" => "Titre 1",
        "description" => "Super description 1",
    ],
    2 => [
        "title" => "Titre 2",
        "description" => "Super description 2",
    ],
    3 => [
        "title" => "Titre 3",
        "description" => "Super description 3",
    ],
    4 => [
        "title" => "Titre 4",
        "description" => "Super description 4",
    ],
];

echo "<pre>";
//var_dump($articles);
echo "</pre>";

//récupèrer la description de l'article 4
//var_dump($articles[4]["description"]);

//boucle pour tableau
//premier c'est le tableau
// foreach($articles as $article){
//    echo "<pre>";
//    var_dump($article["description"]);
//    echo "</pre>";


}




?>