<?php

function bonjour ($user){
    $value = $user;        
    return $value;
}

$user= "Sima";

echo bonjour ('Bonjour' ." ". $user. '!');

?>