<?php

declare(strict_types=1);

use entities\Category;

require 'autoload.php';

// Récupérer toutes les catégories.
$categories = Category::allByName();
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
		<?php
		// Pour chaque catégorie...
		foreach ($categories as $category) {
			// Récupérer les produits.
			$products = $category->getProducts();
		?>
			<div class="category"><?= $category->name ?></div>
			<?php
			// Pour chaque produit...
			foreach ($products as $product) {
				// Ajouter dynamiquement le chemin de l'image au produit.
				$product->imagePath = "/assets/img/products/{$product->idCategory}_" . $product->idProduct % 10 . ".png";
			?>
				<div class="blockProduct">
					<a href="/showProduct.php?idProduct=<?= $product->idProduct ?>">
						<img class="thumbnail" src="<?= $product->imagePath ?>" alt="<?= $product->name ?>" />
						<div class="name"><?= $product->name ?></div>
					</a>
				</div>
		<?php
			}
		}
		?>
	</main>
	<footer></footer>
</body>

</html>