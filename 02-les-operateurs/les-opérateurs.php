<?php

//les opérateurs d'affectation
$a = 5;

//addtion
$a += 10;

// même chose que la ligne du dessus
$a = $a + 10;

//soustraction
$b = 5;
$b -=10;

//division
$c = 10;
$c /= 2;

//mutiplication
$d = 10;
$d *= 2;

echo $a;
echo $b;
echo $c;
echo $d;


//tester une égalité strict (même valeur et même type)
$a === $b;

//tester si les variables sont différentes
$a != $b;

// tester si les variables sont différentes et en plus n'ont pas le même type
$a !== $b;

// tester si la variable est plus petite qu'une autre
$a < $b;

//tester si la variable est plus grande qu'une autre variable
$a > $b;

//tester si c'est plus petit ou égale à
$a <= $b;

// tester si c'est supérieur ou égale
$a >= $b;

// les opérateurs logique

// le Et logique (deux façons de l'écrire)
$a and $b;
$a && $b;

//Le OU logique
$a or $b;

//La négation (différent)
!$a;
$a = 5;
$b = 5;

if ($a == $b) {
    echo $a;
} else {
    # code...
}

$c = 10;
$d = 15;

if ($c && $d == 10) {
    echo "C et D valent 10";
} else {
    echo "une des deux valeurs n'est pas égale à 10";
}

if ($e === $f) {
    echo "<p> E et F sont égaux </p>";
}elseif ($e != $f) {
    echo "<p> E et F sont différent </p>";
} elseif ($e === "text") {
    echo "<p> E vaut : " .  $e . "</p>";
}

$g = 15;
switch ($g) {
    case '"15"':
    echo "la variable G est une chaine de caractère";
    break;
    case 15:
    echo "la variable G vaut : " . $g;
    break;

    default:
    echo "Je ne connais pas cette valeur";
    break;

// structures itératives

for ($i=0; $i <= 10 ; $i++){
    echo "<p>" . $i . "</p>";
}

$ii = 0;
do {
    echo "<p>" . $ii . "</p>";
    $ii++;
} while ($ii <= 10);

$jj = 0;
while ($jj <= 10){
    echo "<p>" . $jj . "</p>";
    $jj++;
}

?>