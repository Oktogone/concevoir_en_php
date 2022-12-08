<?php

declare(strict_types=1);

require 'autoload.php';

// Test de la connexion.
var_dump(PDO_MySQL::get()); // Objet PDO
var_dump(PDO_MySQL::get() === PDO_MySQL::get()); // true
