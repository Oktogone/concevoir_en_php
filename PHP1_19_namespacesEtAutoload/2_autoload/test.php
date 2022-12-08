<?php

declare(strict_types=1);

// Inclusion de l'autoload.
require 'autoload.php';

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
