<?php

declare(strict_types=1);

namespace entities;

use PDO_MySQL;
use PDO;

// Entité Product.
class Product
{
	// PK.
	public ?int $idProduct = null;

	// FK de la catégorie.
	public ?int $idCategory = null;

	// Nom.
	public ?string $name = null;

	// Référence.
	public ?string $ref = null;

	//Prix.
	public ?float $price = null;

	// Constructeur.
	public function __construct(int $idProduct = null)
	{
		$this->idProduct = $idProduct;
	}

	/**
	 * Hydrate $this.
	 * Retourne true si l'hydratation a réussi, false sinon.
	 */
	public function hydrate(): bool
	{
		$db = PDO_MySQL::get();
		$q = "SELECT * FROM product WHERE idProduct = :idProduct";
		$params = [':idProduct' => $this->idProduct];
		$stmt = $db->prepare($q);
		$stmt->execute($params);
		$stmt->setFetchMode(PDO::FETCH_INTO, $this);
		return (bool)$stmt->fetch();
	}

	/**
	 * Persiste $this en UPDATE ou INSERT selon que idProduct est respectivement renseigné ou pas.
	 * Retourne true si la persistance a réussi, false sinon.
	 */
	public function persist(): bool
	{
		$db = PDO_MySQL::get();
		// Si idProduct renseigné, UPDATE.
		if ($this->idProduct) {
			$q = "UPDATE product SET idCategory = :idCategory, name = :name, ref = :ref, price = :price WHERE idProduct = :idProduct";
			$params = [
				':idProduct' => $this->idProduct,
				':idCategory' => $this->idCategory,
				':name' => $this->name,
				':ref' => $this->ref,
				':price' => $this->price,
			];
			$stmt = $db->prepare($q);
			$stmt->execute($params);
		}
		// Sinon, INSERT.
		else {
			$q = "INSERT INTO product VALUES(null, :idCategory, :name, :ref, :price)";
			$params = [
				':idCategory' => $this->idCategory,
				':name' => $this->name,
				':ref' => $this->ref,
				':price' => $this->price,
			];
			$stmt = $db->prepare($q);
			$stmt->execute($params);
			// Récupérer l'auto-incrément.
			$this->idProduct = (int)$db->lastInsertId();
		}
		// Dans les 2 cas, retourner échec ou succès.
		return (bool)$stmt->rowCount();
	}

	/**
	 * Supprime $this en DB.
	 * Retourne true si la suppression a réussi, false sinon.
	 */
	public function remove(): bool
	{
		$db = PDO_MySQL::get();
		$q = "DELETE FROM product WHERE idProduct = :idProduct";
		$params = [':idProduct' => $this->idProduct];
		$stmt = $db->prepare($q);
		$stmt->execute($params);
		// Retourner échec ou succès.
		return (bool)$stmt->rowCount();
	}
}
