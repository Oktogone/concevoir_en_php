<?php
// Variables en camelCase (case sensitive) précédées d'un $.
$tauxDeMarge = 1.2;
// Fonction variadique var_dump().
var_dump($tauxDeMarge); // float 1.2
// Littéraux numériques...
// nombre décimal entier
$n = 123;
// nombre décimal réel
$x = 123.45;
// notation scientifique
$e = 1.23e2; // 123
// nombre hexadécimal
$h = 0x7B; // 7 x 16 + 11 = 112 + 11 = 123
// nombre octal
$o = 0o173; // 1 x 64 + 7 x 8 + 3 = 64 + 56 + 3 = 123
// nombre binaire
$b = 0b1111011; // 64 + 32 + 16 + 8 + 0 + 2 + 1 = 123
// Littéraux chaînes de caractères...
// entre simples quotes
$s1 = 'PHP';
$s2 = 'J\'aime PHP';
// entre doubles quotes
$s3 = "J'aime PHP";
$s4 = "J'aime \"mon\" PHP";
// Insertion de variables dans une phrase...
$couleur = "bleu";
// avec concaténation
var_dump("Le cube " . $couleur); // Le cube bleu
// directement sans concaténation (entre DOUBLES quotes)
var_dump("Le cube $couleur"); // Le cube bleu
// avec encapsulation des variables (pas d'expression)
var_dump("Les fleurs {$couleur}es"); // Les fleurs bleues
// Littéraux booléens
$ok = true;
$ko = false;
// Constantes en SNAKE_CASE sans $ avec le mot-clé const.
const PI_SUR_3 = 3.1416 / 3;