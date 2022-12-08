<?php
// Opérateur ternaire classique.
$n = 3;
$resultat = $n === 2 ? "n vaut 2" : "n ne vaut pas 2"; // if/else compact.
var_dump($resultat);
// Opérateur ternaire compact.
$resultat = $n ?: 2; // Valeur par défaut si $n false (ou équivalent).
var_dump($resultat);
// Null coalescing operator.
$resultat = $n ?? 2; // Valeur par défaut si $n indéfinie ou null.
var_dump($resultat);
// Equivalence:
if (isset($n)) // isset($var) vrai si $var définie et non null.
	$resultat = $n;
else
	$resultat = 2;
