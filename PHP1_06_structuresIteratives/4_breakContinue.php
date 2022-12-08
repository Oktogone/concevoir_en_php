<?php
// Rupture break.
for ($n = 0; $n < 10; $n++) {
	if ($n === 5) {
		break; // Sortie de boucle
	}
	echo $n; // 0 1 2 3 4
}

// Rupture continue.
for ($n = 0; $n < 10; $n++) {
	if ($n % 2 === 0) {
		continue; // Tour suivant
	}
	echo $n; // 1 3 5 7 9
}
