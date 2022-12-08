<?php
// Conversions implicites.
var_dump("3" + "5" + true + false); // 9
var_dump("2bis" * 3); // 6 (warning)
// Conversions explicites.
$x = 9.99;
$n = (int)$x;
var_dump($n); // int 9
// Nous retrouvons le résultat des conversions implicites bool -> int de la ligne 3...
var_dump((int)true);  // 1
var_dump((int)false); // 0
