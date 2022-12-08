<?php

declare(strict_types=1);

// A la racine donc pas de déclaration d'espace de nom.

// Inclusion des classes.
require 'jetables/Mouchoir.php';
require 'jetables/Rasoir.php';
require 'recyclables/Rasoir.php';

// Raccourcis des classes.
use jetables\Mouchoir;
use jetables\Rasoir as RasoirJetable;
use recyclables\Rasoir as RasoirRecyclable;

// Utilisation
$m = new Mouchoir(); // Un mouchoir jetable !
echo '<br>';
$s = new RasoirJetable(); // Un rasoir jetable !
echo '<br>';
$s = new RasoirRecyclable(); // Un rasoir recyclable !
