<?php
// Structure switch/case (comparaison simple)
$n = 2;
switch ($n) {
	case 2:
		var_dump("n vaut 2");
		break;
	case 3:
		var_dump("n vaut 3");
		break;
	default:
		var_dump("n ne vaut ni 2 ni 3");
}
