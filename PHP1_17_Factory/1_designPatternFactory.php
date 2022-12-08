<?php

declare(strict_types=1);
// Exemple de design pattern Factory
abstract class DB
{
	// Méthode publique mais ABSTRAITE que devront implémenter les sous-classes.
	public abstract static function getInstance(): self;

	// Méthode d'entrée pour obtenir l'instance d'une sous-classe.
	public static function getDB(string $dbClass): ?self
	{
		try {
			return $dbClass::getInstance();
		} catch (Error | Exception) { // Prudence !
			return null;
		}
	}
}
class MySQL extends DB
{
	// Constructeur privé.
	private function __construct()
	{
		//...
	}
	// Implémentation de getInstance().
	public static function getInstance(): self
	{
		return new self();
	}
}
//Test
const DB_CLASS = MySQL::class;
$db = DB::getDB(DB_CLASS);
var_dump($db);
