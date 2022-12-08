<?php

declare(strict_types=1);
// Classe abstraite
abstract class Animal
{
	// Méthode abstraite parce que je ne peux pas dire comment crie un animal...
	// Mais tout animal doit pouvoir crier !
	public abstract function crier(): void;
	// Pourrait aussi contenir des méthodes concrètes...
	//...
}
// Implémentation de la fonction abstraite.
class Chien extends Animal
{
	public function crier(): void
	{
		echo "Woof !";
	}
}
