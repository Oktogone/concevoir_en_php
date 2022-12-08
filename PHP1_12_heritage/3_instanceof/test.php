<?php

declare(strict_types=1);
require "Stylo.php";
require "StyloBille.php";
// Exemple
$s = new Stylo("Bic");
$sb = new StyloBille("Pentel");
var_dump($s instanceof Stylo);      // true
var_dump($s instanceof StyloBille); // false
var_dump($sb instanceof Stylo);      // true (instanceof tient compte de la chaîne d'héritage)
var_dump($sb instanceof StyloBille); // true
