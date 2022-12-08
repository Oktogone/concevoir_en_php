<?php

declare(strict_types=1);
// Typage nullable.
function conclure(?bool $ok): void
{
	$resultat = match ($ok) {
		true => "Vrai",
		false => "Faux",
		null => "Peut-être..."
	};
	var_dump($resultat);
}
conclure(true); // Vrai
conclure(null); // Peut-être...

// Unions de types
function reconclure(int|bool|null $ok): void
{
	if ($ok !== null)
		$ok = (bool)$ok; // Conversion explicite.
	$resultat = match ($ok) {
		true => "Vrai",
		false => "Faux",
		null => "Peut-être..."
	};
	var_dump($resultat);
}
reconclure(1);    // Vrai
reconclure(0);    // Faux
reconclure(true); // Vrai
reconclure(false); // Vrai
reconclure(null); // Peut-être...
