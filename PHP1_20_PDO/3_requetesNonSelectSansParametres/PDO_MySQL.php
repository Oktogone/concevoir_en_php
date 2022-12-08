<?php

declare(strict_types=1);
// Classe de connexion MySQL via PDO. Design pattern Singleton.
class PDO_MySQL
{
	// Data Source Name.
	private const DSN = "mysql:dbname=acme_core;host=localhost;port=3306;charset=utf8mb4";
	// Options de connexion.
	private const OPTIONS = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Générer des exceptions en cas de problème.
		PDO::ATTR_STRINGIFY_FETCHES => false,        // Ne pas stringifier les types.
		PDO::ATTR_EMULATE_PREPARES => false,         // Préparer vraiment les requêtes, ne pas simuler.
	];
	private const LOG = 'root';
	private const PWD = '';

	// Instance PDO Singleton.
	private static ?PDO $pdo = null;

	// Constructeur privé pour forcer l'usage de get().
	private function __construct()
	{
	}

	// Retourne l'instance Singleton de PDO.
	public static function get(): PDO
	{
		if (!self::$pdo)
			self::$pdo = new PDO(self::DSN, self::LOG, self::PWD, self::OPTIONS);
		return self::$pdo;
	}
}
