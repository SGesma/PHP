<?php
//on démarre la session en tout début de fichier
    session_start
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>

<body>

<div class="container">

<?php

//on vérifie juste si dans notre système il y a des erreurs
// clé c'est errors dans le tableau de la session
if(array_key_exists('errors', $_SESSION)): ?>
<div class=".alert-danger">
    <?=implode('<br>', $_SESSION['errors']); ?>
</div>
<?php endif; ?>

<?php if(array_key_exists('success', $_SESSION)): ?>
<div class=".alert-sucess">
    Votre email nous est bien parvenu
</div>
<?php endif; ?>

<?php unset($_SESSION['errors']); ?>

    <div class="starter-template">
        <form action="post_contact.php" method="POST">
            <div class="row">
                <div class=".col-xs-6">
            <div class="form-group">
                <label>Votre nom</label>
                
                <input type="text" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['input']['name'] ? $_SESSION['inputs']['name'] : ''; ?>">>
            </div>
            </div>

            <div class="row">
                <div class=".col-xs-6">
            <div class="form-group">
                <label for="inputemail">Votre email</label>
                <input type="text" name="email" class="form-control" id="inputemail" value="<?= isset($_SESSION['input']['email'] ? $_SESSION['inputs']['email'] : ''; ?>">>
            </div>
            </div>

            <div class="row">
                <div class=".col-xs-12">
            <div class="form-group">
                <label for="inputmessage">Votre message</label>
                <textaraea id="inputmessage" name="message" class="form-control">value="<?= isset($_SESSION['input']['message'] ? $_SESSION['inputs']['message'] : ''; ?>"></textaraea>
            </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>
        
    </div>

    </body>
</html>

<?php
// isset-vérifier qu'une variable existe
//on nettoie la session
//on défait les inputs

unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);

?>

