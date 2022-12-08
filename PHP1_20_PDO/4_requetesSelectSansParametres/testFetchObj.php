<?php

declare(strict_types=1);

require 'autoload.php';

// Requête SELECT sans paramètre.
$q = "SELECT * FROM product ORDER BY name";
// Exécuter la requête et récupérer le jeu d'enregistrements, instance de PDOStatement.
$stmt = PDO_MySQL::get()->query($q);
// Définir le mode de récupération (instances de stdClass).
$stmt->setFetchMode(PDO::FETCH_OBJ);
// Récupérer les enregistrements.
$products = $stmt->fetchAll();
// Test.
var_dump($products); // Liste des produits...
