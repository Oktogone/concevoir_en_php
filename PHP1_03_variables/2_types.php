<?php
// 5 types primitifs :
$n = 5;       // int
$x = 123.45;  // float
$s = "hello"; // string
$b = true;    // boolean (bool)
$t = [];      // array
// Fonction get_debug_type (PHP8) plus précise que l'ancienne gettype().
var_dump(get_debug_type($s)); // string
// Il y a d'autres types que nous verrons plus loin...
