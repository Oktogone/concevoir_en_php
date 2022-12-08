<?php

declare(strict_types=1);
// Interface
interface Jetable
{
	function jeter(): void; // public abstract implicite
}
interface Recyclable
{
	const nbMaxCycles = 10; // Constante statique (public implicite)
	function recycler(): void;
}
// Implémentation d'interfaces
class Rasoir implements Jetable, Recyclable
{
	protected int $nbCycles = 0;
	public function jeter(): void
	{
		echo "Rasoir jeté !";
	}
	public function recycler(): void
	{
		$this->nbCycles++;
		if ($this->nbCycles < Recyclable::nbMaxCycles)
			echo "Rasoir recyclé !";
		else
			echo "Recyclage impossible !";
	}
}
