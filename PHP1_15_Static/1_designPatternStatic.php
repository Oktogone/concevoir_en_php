<?php

declare(strict_types=1);
// Exemple de design pattern Static
class Cfg
{
	public const TITLE = "Mon appli PHP";
	public const ROLES = ["Admin", "User", "Guest"];
	public const DB_HOST = "superserver.com";
	public const DB_NAME = "monAppliPHP";
	public const DB_LOG = "superAppli";
	public const DB_PWD = "7hj843Tr!b";

	// Constructeur privé, aucune instanciation possible de l'extérieur de la classe.
	private function __construct()
	{
		throw new Exception("Classe 100% statique !"); // Si besoin, interdire l'instanciation depuis la classe elle-même.
	}
}
// Test
var_dump(Cfg::TITLE); // Mon appli PHP
new Cfg(); // Erreur !
