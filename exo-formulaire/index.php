<?php

include_once 'fonction.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
    <script src="main.js"></script>
</head>
<body>
    <div>
    <form method="post">
        <label>Nom : </label> <input type="texte" name="nom" value=""/>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    </div>
    <div>
    <?php
        // on lance la fonction info après avoir récupèrer le nom
        info ($_POST["nom"]);
    ?>
    </div>
</body>
</html>