<?php
// Expression match (comparaison stricte)
$n = 2;
$reponse = match ($n) {
	2 => "n vaut 2",
	3 => "n vaut 3",
	default => "n ne vaut ni 2 ni 3"
};
var_dump($reponse);
