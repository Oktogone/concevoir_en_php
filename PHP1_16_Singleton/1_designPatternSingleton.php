<?php

declare(strict_types=1);
// Exemple de design pattern Singleton
class Connexion
{
	// Propriété privée statique pour stocker l'instance unique.
	private static ?self $instance = null;

	// Constructeur privé pour interdire l'instanciation de l'extérieur de la classe.
	private function __construct()
	{
		//...
	}

	// Méthode publique statique pour créer l'instance unique la première fois et la stocker pour les fois suivantes.
	public static function getInstance(): self
	{
		if (!self::$instance)
			self::$instance = new self();
		return self::$instance;
	}
}
//Test
$cnx1 = Connexion::getInstance();
$cnx2 = Connexion::getInstance();
var_dump($cnx1 === $cnx2); // true
