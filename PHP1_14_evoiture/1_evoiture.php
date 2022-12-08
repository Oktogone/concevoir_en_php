<?php

declare(strict_types=1);

interface Remorquable
{
	function remorquer(): void;
}

interface Diagnostiquable
{
	function diagnostiquer(): void;
}

interface Reparable extends Remorquable, Diagnostiquable {
	function reparer(): void;
}

interface Chargeable {
	function charger(): void;
}

abstract class Vehicule
{
	public function recycler(): void {
		echo "Le véhicule est recyclé<br>";
	}
	public abstract function demarrer(): void;
}

abstract class Voiture extends Vehicule implements Reparable
{
	public function remorquer(): void {
		echo "La voiture est dépannée<br>";
	}

	public function diagnostiquer(): void
	{
		echo "La voiture est diagnostiquée<br>";
	}

	public function reparer(): void
	{
		echo "La voiture est réparée<br>";
	}
}

class Evoiture extends Voiture implements Chargeable
{
	public function demarrer(): void
	{
		echo "L'e-voiture démarre<br>";
	}

	public function charger(): void
	{
		echo "L'e-voiture charge<br>";
	}
}

$v = new Evoiture();
$v->demarrer();
$v->remorquer();
$v->diagnostiquer();
$v->reparer();
$v->charger();
$v->recycler();
