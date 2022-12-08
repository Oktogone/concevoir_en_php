<?php

declare(strict_types=1);

use entities\Category;
use entities\Product;

require 'autoload.php';

// Tester Product->getCategory().
$product = new Product(3);
$product->hydrate();
var_dump($product); // Produit renseigné sauf la catégorie.
var_dump($product->getCategory()); // La catégorie.
var_dump($product); // Produit renseigné avec sa catégorie.

// Tester Category->getProducts().
$category = new Category(1);
$category->hydrate();
var_dump($category); // Catégorie renseignée sauf les produits.
var_dump($category->getProducts()); // Liste des produits.
var_dump($category); // Catégorie renseignée avec ses produits.
