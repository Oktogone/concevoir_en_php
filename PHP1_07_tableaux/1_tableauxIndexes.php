<?php
// Syntaxe à crochets.
$tab = ['Bob', 'Max', 'Tom', 123];
var_dump($tab[0]); // Bob
var_dump($tab[3]); // 123
var_dump(count($tab)); // 4
// Parcours avec for.
for ($i = 0; $i < count($tab); $i++) {
	echo $tab[$i]; // Bob Max Tom 123
}

// Parcours des VALEURS avec foreach.
foreach ($tab as $e) {
	echo $e; // Bob Max Tom 123
}

// Parcours des INDEX et des VALEURS avec foreach.
foreach ($tab as $i => $e) {
	echo "{$i}:{$e}"; // 0:Bob 1:Max 2:Tom 3:123
}
