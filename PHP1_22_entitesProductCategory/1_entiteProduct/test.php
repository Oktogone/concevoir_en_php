<?php

declare(strict_types=1);

use entities\Product;

require 'autoload.php';

// Tester Product->__construct(), Product->hydrate().
$product = new Product(3);
var_dump($product->hydrate());      // true
var_dump($product);                 // Produit renseigné.

// Tester Product->persist() en UPDATE.
$product->price *= 2;
var_dump($product->persist());      // true
$product->hydrate();
var_dump($product);                 // Prix doublé...
// Rétablissement du prix...
$product->price /= 2;
$product->persist();

// Tester Product->persist() en INSERT.
$product = new Product();
$product->idCategory = 2;
$product->name = "Test";
$product->ref = 'TEST';
$product->price = 123.45;
var_dump($product->persist());      // true
var_dump($product);                 // Nouvel idProduct renseigné.

// Tester Product->remove().
var_dump($product->remove());       // true
var_dump($product->hydrate());      // false
