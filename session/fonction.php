<?php

session_start();

// on déclare une fonction pour ajouter les nouveaux utilisateurs
// les arguments renvoient au formulaire
function addNewUser($nom, $prenom, $bool){
// si ces informations ne sont pas vide (prénom, nom et booléen)
    if(!empty($nom) && !empty($prenom)){
// tu vas me renvoyer les données (prénom,nom...)
        $_SESSION["nom"]= $nom;
        $_SESSION["prenom"]= $prenom;
        $_SESSION["admin"]= $bool;

//redirection
        header("Location: index.php?user=ok");
    } else {
        header("Location: index.php?user=notok");
    }

}

//on appelle la fonction et récupère le nom, prénom et admin
addNewUser($_POST["nom"], $_POST["prenom"], $_POST["admin"]);
var_dump($_SESSION);


?>