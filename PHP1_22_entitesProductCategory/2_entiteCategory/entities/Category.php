<?php

declare(strict_types=1);

namespace entities;

use PDO_MySQL;
use PDO;

// Entité Category.
class Category
{
	// PK.
	public ?int $idCategory = null;

	// Nom.
	public ?string $name = null;

	// Constructeur.
	public function __construct(int $idCategory = null)
	{
		$this->idCategory = $idCategory;
	}

	/**
	 * Hydrate $this.
	 * Retourne true si l'hydratation a réussi, false sinon.
	 */
	public function hydrate(): bool
	{
		$db = PDO_MySQL::get();
		$q = "SELECT * FROM category WHERE idCategory = :idCategory";
		$params = [':idCategory' => $this->idCategory];
		$stmt = $db->prepare($q);
		$stmt->execute($params);
		$stmt->setFetchMode(PDO::FETCH_INTO, $this);
		return (bool)$stmt->fetch();
	}

	/**
	 * Retourne un tableau des catégories triés par nom.
	 */
	public static function allByName(): array
	{
		$db = PDO_MySQL::get();
		$q = "SELECT * FROM category ORDER BY name";
		$stmt = $db->query($q);
		$stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Category::class);
		return $stmt->fetchAll();
	}
}
