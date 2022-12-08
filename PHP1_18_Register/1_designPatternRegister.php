<?php

declare(strict_types=1);
// Exemple de design pattern Register.
class Cfg
{
	// Tableau (associatif) privé statique pour stocker les paires clé/valeur.
	private static $constants = [];
	// Constructeur privé.
	private function __construct()
	{
		//...
	}
	// Méthode publique statique pour INSCRIRE les paires clé/valeur SANS ré-écriture possible.
	public static function register(string $key, mixed $value): void
	{
		// Si la clé n'existe pas encore, la créer et lui affecter la valeur.
		if (!array_key_exists($key, self::$constants))
			self::$constants[$key] = $value;
	}
	// Méthode publique statique pour LIRE les paires clé/valeur.
	public static function get(string $key): mixed
	{
		// Si la clé existe, retourner la valeur associée, sinon retourner null.
		return array_key_exists($key, self::$constants) ? self::$constants[$key] : null;
	}
}
//Test
Cfg::register("version", 1);
Cfg::register("version", 2);
var_dump(Cfg::get("version")); // 1
var_dump(Cfg::get("truc")); // null
