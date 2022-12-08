<?php

declare(strict_types=1);

use entities\Product;

require 'autoload.php';

// Récupérer idProduct.
$idProduct = filter_input(INPUT_GET, 'idProduct', FILTER_VALIDATE_INT);
// Créer le produit avec son idProduct.
$product = new Product($idProduct);
// Si $idProduct invalide ou échec hydratation, rediriger vers erreur 404.
if (!$idProduct || $idProduct < 1 || !$product->hydrate()) {
	header('Location:/error404.php');
	exit;
}
// Définir un NumberFormatter pour l'affichage du prix.
$nfCurrency = NumberFormatter::create('fr', NumberFormatter::CURRENCY);
// Ajouter dynamiquement le prix formaté au produit.
$product->formattedPrice = $nfCurrency->formatCurrency($product->price, 'EUR');
// Ajouter dynamiquement le chemin de l'image au produit.
$product->imagePath = "/assets/img/products/{$product->idCategory}_" . $product->idProduct % 10 . ".png";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>ACME</title>
	<link rel="stylesheet" href="/assets/css/acme.css" />
</head>

<body>
	<header></header>
	<main>
		<div class="category">
			<a href="/listProducts.php">Produits</a> &gt; <?= $product->name ?>
		</div>
		<div id="detailProduct">
			<img src="<?= $product->imagePath ?>" alt="<?= $product->name ?>" />
			<div>
				<div class="price"><?= $product->formattedPrice ?></div>
				<div class="category">catégorie<br />
					<?= $product->getCategory()->name ?></div>
				<div class="ref">référence<br />
					<?= $product->ref ?></div>
			</div>
		</div>
	</main>
	<footer></footer>
</body>

</html>