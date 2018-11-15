<?php

session_start();

function uploadFile($file){
    $dossier = "img/";
    //si il n'est pas vide et si il existe
    if(!empty($file) && isset($file)){
    // on récupère la clé du tableau
    $fichier = basename($file["image"]['name']);
    var_dump($fichier);
    //si le fichier existe alors tu feras ma condition
    if (file_exists($file['image']['tmp_name']));{
        //on met le fichier temporaire, la source et préciser le dossier 
        $resultUpload = move_uploaded_file($file['image']['tmp_name'], $dossier.$fichier);
        if($resultUpload){
            header("Location: index.php?upload=ok");
        }else{
            return "Nous avons rencontré une erreur lors de l'upload du fichier";
        }
    }
  }
}


?>