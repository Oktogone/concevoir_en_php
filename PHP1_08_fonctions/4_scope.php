<?php

declare(strict_types=1);
// Variables globales (introduites en dehors d'une fonction).
$a = 1;
$b = 2;
function f(): void
{
	global $a; // Pour utiliser $a en local.
	$a = 10;
	$b = 20;
	$c = 30;
	var_dump($a, $b, $c);
}
// Testons...
var_dump($a, $b);     // 1 2
f();                  // 10 20 30
var_dump($a, $b, $c); // 10 2 null (warning)
