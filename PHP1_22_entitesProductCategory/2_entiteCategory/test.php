<?php

declare(strict_types=1);

use entities\Category;

require 'autoload.php';

// Tester Category->__construct(), Category->hydrate().
$category = new Category(1);
var_dump($category->hydrate());     // true
var_dump($category);                // Catégorie renseignée.

// Tester Category::allByName().
var_dump(Category::allByName());    // Liste des catégories...
