<?php

declare(strict_types=1);

use entities\Product;

require 'autoload.php';

// Récupérer idProduct.
$idProduct = filter_input(INPUT_GET, 'idProduct', FILTER_VALIDATE_INT);
// Créer le produit avec son idProduct.
$product = new Product($idProduct);
// Supprimer le produit.
$product->remove();
// Rediriger vers listProducts.php.
header('Location:/listProducts.php');
exit;
