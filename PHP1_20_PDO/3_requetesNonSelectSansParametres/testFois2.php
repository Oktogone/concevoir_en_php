<?php

declare(strict_types=1);

require 'autoload.php';

// Requête UPDATE sans paramètre.
$q = "UPDATE product SET price = price * 2"; // Doublement de tous les prix !
// Exécuter la requête.
PDO_MySQL::get()->exec($q);
