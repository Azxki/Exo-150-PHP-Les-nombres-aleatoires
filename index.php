<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.
$random = rand(0, 50);
echo "Mon nombre aléatoire entre 0 et 50 est : " . $random;

/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */
echo "<br><br>";
// TODO Votre code ici.
$random = rand(50, getrandmax());
echo "Mon nombre aléatoire entre 50 et l'infini est : " . $random;
echo "<br><br>";
/**
 * 3. Générez un nombre aléatoire compris entre 0 et 50
 * ==> si le nombre est inférieur ou égal à 25, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */

$random = rand(0, 50);
echo "Mon nombre aléatoire entre 0 et 50 est : " . $random;
echo "<br>";
if ($random <= 25) {
    echo "Le nombre est en dessous ou égal à 25 donc, vous avez gagné";
}

if ($random >= 25) {
    echo "Le nombre est au dessus ou égal à 25 donc, vous avez perdu";
}
/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 */

// TODO Votre code ici.
echo "<br>";
echo "<br>";
function maFonction ($min, $max) {
    $min = 0;
    $max = getrandmax();
    $random = rand($min, $max);

    if ($max - 100 < $random and $random > $max) {
        $min = 0;
        $max = getrandmax();
        $random = rand($min, $max);
    }
    elseif ($random < $max -100 and $max > $random){
        echo "Le nombre est : " . $random;
    }
}


maFonction('0', 'getrandmax()');




