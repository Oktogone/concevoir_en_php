<?php

declare(strict_types=1);

require 'autoload.php';

// Requête SELECT sans paramètre.
$q = "SELECT * FROM product WHERE idProduct = 3";
// Exécuter la requête et récupérer le jeu d'enregistrements contenant ici un unique enregistrement. 
$stmt = PDO_MySQL::get()->query($q);
// Créer un produit sec (non renseigné).
$product = new Product();
var_dump($product); // Produit sec.
// Hydrater le produit avec l'enregistrement.
$stmt->setFetchMode(PDO::FETCH_INTO, $product);
$stmt->fetch();
// Test.
var_dump($product); // Produit hydraté.
