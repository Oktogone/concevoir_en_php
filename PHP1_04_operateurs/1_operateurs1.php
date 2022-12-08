<?php
// Opérateur d'affectation.
$n = 5;
var_dump($n); // 5
// Concaténation.
var_dump("Bon" . "jour"); // Bonjour
// Opérateurs arithmétiques.
var_dump(1 + 3 * 4 - 6 / 2);  // 10
var_dump(1 + (3 * 4) - (6 / 2));  // 10
var_dump(123 % 5); // 3 (123 = 5 x 24 + 3)
var_dump(2 ** 3); // 8
// Opérateurs combinés.
$n += 2; // $n = $n + 2
var_dump($n); // 7
// Incrémentation / décrémentation.
$n++; // $n += 1
var_dump($n); // 8
$n--; // $n -= 1
var_dump($n); // 7
// Post / Pré-incrémentation / décrémentation.
$a = 1;
$b = $a++;
var_dump($a, $b); // 2 1
$b = ++$a;
var_dump($a, $b); // 3 3
// Exemple
var_dump($a++ - $b-- + ++$a + $b++); // 7
//       3    - 3    +   5  + 2
var_dump($a, $b); // 5 3
