<?php

declare(strict_types=1);
// Capturer les erreurs.
$k = 0;
function f()
{
	global $k;
	$k++;
	f();
}
try {
	f();
} catch (Error $e) {
	var_dump("Arrêt après {$k} appels récursifs. {$e->getMessage()}");
}

// Déclenchement volontaire d'une exception.
throw new Exception("Gros problème !");
