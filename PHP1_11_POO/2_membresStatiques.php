<?php

declare(strict_types=1);
// Exemple de membres statiques.
class Stylo
{
	public const VERSION = '1.0'; // Constante statique (typage impossible).

	public ?string $marque = null; // Propriété d'instance.
	public static int $nb = 0; // Propriété statique.

	public function __construct(string $marque)
	{
		$this->marque = $marque;
		self::$nb++;
	}
	public static function denombrer(): void
	{
		echo "Il y a " . self::$nb . " stylos";
	}
}

new Stylo("Bic");
new Stylo("Pentel");
var_dump(Stylo::VERSION); // 1.0
var_dump(Stylo::$nb); // 2
Stylo::denombrer(); // Il y a 2 stylos
