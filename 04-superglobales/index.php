<?php

//les super globales sont des variables définient par le language, elles sont accessibles partout
$maVariable = 10;

//Indique l'ensemble des variables définit dans le script
$GLOBALS;
//echo "<pre>";
//var_dump($GLOBALS);
//echo "</pre>";

//tableau associatif contenant les informations du serveur
$_SERVER;
//echo "<pre>";
//var_dump($_SERVER);
//echo "</pre>";

//récupère les paramètres passés dans l'url
// /?name=françois&city=Nantes
$_GET;
echo "<pre>";
var_dump($_GET);
echo "</pre>";

echo $_GET["name"];

//POST récupère les informations d'un formulaire
//$_POST;
//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";

$_FILES;
echo "<pre>";
var_dump($_FILES["cv"]);
echo "</pre>";

if ($_FILES["cv"]["type"] != "application/pdf"){
    echo "<p>Le fichier n'est pas au format PDF";
}

// Donne accès au cookies stocker par le navigateur
$_COOKIE;
echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";

// Variable de session, ne sera active que si on démarre la session avec la session_start()
$_SESSION;
echo "<pre>";
session_start();
var_dump($_SESSION);
echo "</pre>";

// Cette super globale donne accès au variables $_GET, $_POST, $_COOKIE 
$_REQUEST;
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

//Les constantes (définir valeurs fixes)
// Toujours en majuscule
// Ne peux pas être redéfinie (Impossible de lui attribuer une nouvelle valeur au cours de l'exécution du script)
define(["NUMBERS", 1, 2, 3, 4, 5]);
const NAME = "François";
var_dump(NUMBERS);
NAME = "TOTO";
echo NAME;

?>

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super goblales</title>
</head>
<body>
    <form action="" method="post">
            <label for="name">Nom: </label>
            <input type="text" name="name">
            <label for="name">Prénom: </label>
            <input type="text" name="firstname">
            <label for="mail">Email: </label>
            <input type="email" name="mail">
            <input type="submit" value="OK">
    </form>
    <form enctype="multipart/form-data" action="" method="post">
        <input type="file" name="cv">
        <input type="submit" value="envoyez le fichier" />
    </form>
</body>
</html>