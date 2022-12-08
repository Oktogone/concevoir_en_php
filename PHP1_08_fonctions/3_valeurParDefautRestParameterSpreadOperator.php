<?php

declare(strict_types=1);
// Valeur(s) par défaut (en dernier).
function somme(int $a, int $b = 0): int
{
	return $a + $b;
}
var_dump(somme(2, 3)); // 5
var_dump(somme(2)); // 2

// Fonction variadique avec rest parameter (le dernier, transforme une série de valeurs en un tableau).
function moyenne(int ...$notes): float
{
	$total = 0;
	foreach ($notes as $note) {
		$total += $note;
	}
	return $notes ? $total / count($notes) : 0;
}
var_dump(moyenne(11, 15, 20, 4)); // 12.5
