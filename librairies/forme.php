<?php

// on nomme la fonction et on lui attribue deux arguments, un tableau et un nom type string
// tableau contient des articles
function listArticles($articles, $user){
    // on fait une boucle 
    foreach ($articles as $article){
    if ($article["user"] === $user){
        // on affiche les articles, titre, contenu, user
        echo "<p>" . $article["id"] . "</p>";
        echo "<p>" . $article["title"] . "</p>";
        echo "<p>" . $article["content"] . "</p>";  
        echo "<p>" . $article["user"] . "</p>";  
    }   
    }
}

?>

