<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?php if($_GET["upload"] === "ok"){ ?>
        <p>Votre fichier à bien été uploader</p>
        <?php  } ?>
    </div>

    <form enctype="multipart/form-data" action="file.php" method="post">
        <label for="image">Veuillez insérer votre fichier</label>
        <input type="file" name="image">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>