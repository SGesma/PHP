<?php
//on nomme une fonction avec un paramètre 
function returnUsers($users){
//on fait une boucle, on reprend le paramètre)
    foreach ($users as $user){
      echo '<option value="'. $user .'">' . $user . "</option>"; 
    }
    
}

// foreach ($ARTICLES as $article){
//     echo "<p>" . $article["id"] . "</p>";
//     echo "<p>" . $article["title"] . "</p>";
//     echo "<p>" . $article["content"] . "</p>"; 
// }

?>


