<?php

// on déclare une fonction pour récupèrer le nom
function champs ($recupNom){
    $value = $recupNom;
    return $value;
}

// variable avec la valeur POST et le champ name du formulaire
$recupNom = $_POST['name'];

$result = strlen($_POST);

// on déclare une fonction pour vérifier le nombre de caractère
// strlen calcule la taille d'une chaine
function info ($caractere){
// si le nombre de caractère est inférieur ou égale à 5
if(strlen($caractere) <= 5)
{
// alors pas correct
    echo 'Pas correct';
} else {
// sinon on affiche le nom 
    echo '<p>'. $caractere . '</p>' ;
} 
}


?>

