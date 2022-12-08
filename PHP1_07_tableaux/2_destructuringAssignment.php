<?php
// Destructuring assignment.
[$a, $b] = [1, 2];
var_dump($a, $b); // 1 2
[$a, $b, $c] = [3, 4];
var_dump($a, $b, $c); // 3 4 null (warning)
[$a] = [5, 6];
var_dump($a); // 5
[$a, , $b] = [7, 8, 9];
var_dump($a, $b); // 7 9
// Très utile pour permuter 2 valeurs.
[$a, $b] = [$b, $a];
var_dump($a, $b); // 9 7
