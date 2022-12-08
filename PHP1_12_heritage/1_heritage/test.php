<?php

declare(strict_types=1);
require 'Stylo.php';
require 'StyloBille.php';
// Exemple d'héritage.
$styloBille = new StyloBille("Bic"); // Constructeur hérité.
$styloBille->couleur = "bleu";
$styloBille->ecrire(); // Le stylo Bic bleu écrit
