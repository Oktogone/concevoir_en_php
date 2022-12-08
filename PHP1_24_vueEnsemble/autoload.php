<?php

declare(strict_types=1);

// Inscription de la fonction d'autoload des classes.
spl_autoload_register(fn ($className) => require $className . '.php');
