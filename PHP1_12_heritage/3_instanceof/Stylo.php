<?php

declare(strict_types=1);
// Exemple de classe.
class Stylo // Toujours avec une majuscule.
{
	// Déclaration des propriétés (initialisées à null par précaution).
	public ?string $marque = null;

	// Constructeur unique (facultatif)
	public function __construct(string $marque) // Le constructeur ne retourne PAS.
	{
		$this->marque = $marque; // $this = instance en cours de construction.
	}

	// Déclaration des méthodes
	public function ecrire(): void
	{
		echo "Le stylo {$this->marque} écrit"; // $this = instance sur laquelle a été appelée la méthode.
	}
}
