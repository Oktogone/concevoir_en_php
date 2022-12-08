<?php

declare(strict_types=1);
// Une classe final ne peut pas être étendue.
final class A
{
}
// Erreur !
// class Aplus extends A
// {
// }

class B
{
	public final function f()
	{
	}
}
class Bplus extends B
{
	public function f() // Erreur !
	{
	}
}
