<?php
// Multi-dimensions.
$tab = [[10, 20, 30], [1, 2]];
var_dump($tab[0][2]); // 30
var_dump(count($tab)); // 2
var_dump(count($tab[0])); // 3
var_dump(count($tab[1])); // 2
// Parcours avec for.
for ($i = 0; $i < count($tab); $i++) {
	for ($j = 0; $j < count($tab[$i]); $j++) {
		echo $tab[$i][$j]; // 10 20 30 1 2
	}
}

// Parcours avec foreach.
foreach ($tab as $t) {
	foreach ($t as $e) {
		echo $e; // 10 20 30 1 2
	}
}
