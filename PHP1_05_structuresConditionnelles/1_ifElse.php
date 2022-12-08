<?php
// Structure if/else.
$n = 2;
if ($n === 2) {                    // Un unique if.
	var_dump("n vaut 2");
}
elseif ($n === 3) {                // Autant de elseif que nécessaire.
	var_dump("n vaut 3");
}
else {                             // Zéro ou un seul else.
	var_dump("n ne vaut ni 2 ni 3");
}
/*
TOUTE variable est VRAIE sauf :
- false
- null
- Nombre 0
- Chaîne vide
- Tableau vide
*/
