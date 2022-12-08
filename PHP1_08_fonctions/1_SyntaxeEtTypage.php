<?php

declare(strict_types=1);
// Création d'une fonction
function somme(int $a, int $b): int
{
	return $a + $b;
}
var_dump(somme(2, 3)); // 5
/*
Types possibles :
- int
- float
- string
- bool
- array
- object
- mixed (tous types, à éviter)
Uniquement pour le retour :
- void (rien)
- never (exception ou exit)
*/
// Problème des conversions implicites.
function tester(int $ok): int
{
	return $ok;
}
var_dump(tester(true)); // 1
var_dump(tester(false)); // 0
