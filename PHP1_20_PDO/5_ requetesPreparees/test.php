<?php

declare(strict_types=1);

require 'autoload.php';

// Créer un produit sec.
$product = new Product();
// Récupérer une variable saisie par l'utilisateur = DANGER !
$idProduct = filter_input(INPUT_GET, 'idProduct', FILTER_VALIDATE_INT);
// Vérifier idProduct.
if (!$idProduct || $idProduct < 1)
	exit("idProduct invalide !");
// Requête SELECT préparée pour retrouver le produit demandé.
$q = "SELECT * FROM product WHERE idProduct = :idProduct";
$params = [':idProduct' => $idProduct];
// Préparer la requête.
$stmt = PDO_MySQL::get()->prepare($q);
// Exécuter la requête avec ses paramètres.
$stmt->execute($params);
// Définir le mode de récupération.
$stmt->setFetchMode(PDO::FETCH_INTO, $product);
// Récupérer les enregistrements.
$product = $stmt->fetch() ?: null; // Retourner null si idProduct inexistant.
// Test.
var_dump($product); // Produit hydraté (ou null).
