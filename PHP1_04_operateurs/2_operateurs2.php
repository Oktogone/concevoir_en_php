<?php
// Opérateurs de comparaison (résultat booléen)...
// égalité simple
var_dump(3 == "3"); // true
// égalité stricte RECOMMANDÉE
var_dump(3 === "3"); // false
var_dump(3 === 2 + 1); // true
// non-égalité simple
var_dump(3 != "3"); // false
// non-égalité stricte RECOMMANDÉE
var_dump(3 !== "3"); // true
// Inférieur / Supérieur.
var_dump(3 < 2 + 1); // false
var_dump(3 >= 2 + 1); // true
// Opérateur de tri (spaceship operator)
var_dump(2 <=> 3); // -1 (ordre croissant)
var_dump(3 <=> 2); // 1 (ordre décroissant)
var_dump(2 <=> 2); // 0 (égalité)
// Opérateurs logiques (entre booléens).
var_dump(2 < 3 && 3 > 4);  // false (ET)
var_dump(2 < 3 || 3 > 4);  // true (OU inclusif)
var_dump(2 < 3 xor 3 < 4); // false (OU exclusif)
var_dump(!(2 < 3));        // false (NON)
// Table de vérité : https://fr.wikipedia.org/wiki/Table_de_v%C3%A9rit%C3%A9#Exemples_de_base
