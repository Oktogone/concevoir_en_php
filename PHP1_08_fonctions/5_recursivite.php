<?php

declare(strict_types=1);
// Récursivité.
function facto($n)
{
	return $n ? $n * facto($n - 1) : 1;
}
var_dump(facto(5)); // 120 = 5 * 4 * 3 * 2 * 1

// Limite de récursivité.
function f()
{
	f();
}
f();
