<?php
// vérifier les différents champs si il y a des erreurs
// [] est un tableau
$errors = [];

//si la clé nom dans le tableau $_POST n'existe pas ou qu'elle est vide
// == '' veut dire dire
if(!array_key_exists('name', $_POST) | ($_POST['name'] == ''){
    $errors['name'] = "vous n'avez pas renseigné votre nom";
}

//si la clé email dans le tableau $_POST n'existe pas ou qu'elle est vide
//filter permet de valider directement les emails, on lui envoie la variable à valider qui est post
if(!array_key_exists('email', $_POST) | ($_POST['email'] == '' || filter_var($_POST, ['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "vous n'avez pas renseigné votre email";
}

//si la clé message dans le tableau $_POST n'existe pas ou qu'elle est vide
// la clé existe dans $_POST (elle s'y trouve)
if(!array_key_exists('message', $_POST) | ($_POST['message'] == ''){
    $errors['message'] = "vous n'avez pas renseigné votre message";
}

//si il y a des erreurs tu renvoies vers la page précédente
// si empty différent de mon tableau errors dans ces cas là on renvoit à la page précédente
if(!empty($errors)){
    // session start pour stocker les différentes erreurs (pour que l'utilisateur comprenne pourquoi ça ne marche pas)
    session_start();
    $_SESSION['error'] = $errors;
    //sauvegarder tout les champs qui ont été renseigné
    $_SESSIOn['input'] = $_POST;
    header('Location: index.php');
}else{

//on crée une variable pour utiliser dans la fonction
//on indique à l'utilisateur que tout c'est bien passé
//on stocke dans la session
$_SESSION['sucess'] = 1;
$message = $_POST['message';]
$headers = 'FROM: site@local.dev';


// on va pouvoir envoyer le mail à partir des champs qui ont été posté
// on précise à qui on envoie le mail
mail('contact@local.dev', 'Formulaire de contact', $message, $headers);
header('Location: index.php');
}

?>