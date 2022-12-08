<?php

declare(strict_types=1);
class StyloBille extends Stylo
{
	// Nouvelle propriété
	public ?string $couleur = null;
	// Redéfinition
	public function ecrire(): void
	{
		echo parent::ecrire() . " en {$this->couleur}";
	}
}
