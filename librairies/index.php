<?php

// on inclut et on exécute les fichiers php
include_once 'data.php';
include_once 'fonction.php';
include_once 'forme.php';
include_once '../01-Declaration/librairies.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>librairies</title>
    <script src="main.js"></script>
</head>
<body>

    <div>
    <form method="post">
        <label for="name">Sélectionnez un utilisateur :</label>
        <!-- <input type="text" id="name" name="user_name"> -->
        <SELECT name="nom" size="1">
        <?php 
        // fonction pour retourner les infos
        // on exécute la fonction définit (returnUsers) dans l'autre fichier
            returnUsers (USERS);
         ?>
        </SELECT>
        <INPUT type="submit" value="Valider">
    </form>
    <div>
    <?php
        // fonction pour retourner les infos 
       // on exécute la fonction définit en mode post (donnée de formulaire) 
       // on veut récupèrer le nom dans select
        listArticles ($ARTICLES, $_POST["nom"]);
    ?>
    </div>
    </div>
  
</body>
</html>
