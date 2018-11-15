<?php
//méthode obligatoire pour démarrer la session
// on va stocker des informations et tester 
session_start();
$_SESSION;

var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width", initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>

    <div>
        <?php
        //si on récupère le user 
        if($_GET["user"] == "ok"){
            echo "<p>L'utilisateur a bien été ajouté</p>";
        }elseif($_GET["user"] == "notok") {
            echo "<p>Mes champs ne peuvent pas être vide</p>";
        }
        ?>
    </div>

    <div>
        <?php 
        // on test la session nom
        // si le nom est présent alors tu m'affiches le bouton deconnexion
            if(!empty($_SESSION["nom"])){ ?>
            <form action="destroy.php" method="post">
                <input type="submit" value="Deconnexion">
            </form>
        <?php
         }
        ?>
    </div>

    <form action="fonction.php" method="post">
        <label for ="nom">Nom :</label>
        <input type="text" name="nom" id="">
        <label for ="prénom">Prénom :</label>
        <input type="text" name="prenom" id="">
        <label for="admin">Admin :</label>
        <input type="checkbox" name="admin" id="" value="admin">
        <input type="submit" value="OK">
    </form>

    <div>
        <?php
        //on met une condition
        //si dans session on a bien une valeur admin alors tu m'affiches 
            if($_SESSION["admin"] == "admin"){ ?>
            <a href="admin.php">Admistration</a>
        <?php  }
        ?>
    </div>

    <div>
    <?php
    //si la session n'est pas vide alors affiche moi le texte
        if(!empty($_SESSION)){ ?>
            <p><?= $_SESSION["nom"] ?></p>
            <p><?= $_SESSION["prenom"] ?></p>
            <p><?= $_SESSION["admin"] ?></p>
    <?php 
    }
    ?>
    </div>
    
</body>
</html>