<?php

declare(strict_types=1);
// Expression de fonction.
$doubler = function (int $n): int {
	return $n * 2;
};
var_dump($doubler(3)); // 6

// Utiliser une variable du scope enveloppant.
$a = 3;
$redoubler = function () use ($a): int {
	return $a * 2;
};
var_dump($redoubler()); // 6

// Lambda (limitée à une seule ligne de code, accolades interdites, return strictement implicite).
$i = 1;
$tripler = fn (int $n): int => $n * 3 + $i; // Accès automatique aux variables du scope enveloppant.
var_dump($tripler(5)); // 16 = 5 * 3 + 1
