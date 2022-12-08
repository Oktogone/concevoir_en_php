<?php
// Une variable contient une valeur...
$admin = "Bob";
// Mais à un moment donné, je ne connais que le nom de cette variable...
$var = "admin";
// Alors comment obtenir la valeur de la variable dont le nom est la valeur de la variable $var ?
var_dump($$var); // Bob
// Possible de pousser le jeu plus loin...
$var2 = "var";
var_dump($$$var2); // Bob
