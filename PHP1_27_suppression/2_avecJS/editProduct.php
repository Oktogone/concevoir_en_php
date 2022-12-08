<?php

declare(strict_types=1);

use entities\Category;
use entities\Product;

require 'autoload.php';

// Créer un produit.
$product = new Product();
// Préparer le tableau des erreurs.
$errors = [];
// Si données POST présentes (ajout ou modification)...
if (filter_input(INPUT_POST, 'submit')) {
	// Récupérer les données POST.
	$product->idProduct = filter_input(INPUT_POST, 'idProduct', FILTER_VALIDATE_INT) ?: null;
	$product->idCategory = filter_input(INPUT_POST, 'idCategory', FILTER_VALIDATE_INT) ?: null;
	$product->name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ?: null;
	$product->ref = filter_input(INPUT_POST, 'ref', FILTER_SANITIZE_SPECIAL_CHARS) ?: null;
	$product->price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT) ?: null;
	// Vérifier le nom (obligatoire et max 50 caractères).
	if (!$product->name || mb_strlen($product->name) > 50)
		$errors[] = "Nom invalide !";
	// Vérifier la référence (obligatoire et max 10 caractères).
	if (!$product->ref || mb_strlen($product->ref) > 10)
		$errors[] = "Référence invalide !";
	// Vérifier le prix (obligatoire et >0 et <10000).
	if (!$product->price || $product->price <= 0 || $product->price >= 10000)
		$errors[] = "Prix invalide !";
	// Si aucune erreur...
	if (!$errors) {
		// Persister le produit.
		try {
			$product->persist();
		} catch (PDOException) {
			$errors[] = "Référence déjà existante !";
		}
		// Si pas d'erreur, rediriger vers listProducts.php.
		if (!$errors) {
			header('Location:/listProducts.php');
			exit;
		}
	}
}
// Sinon rechercher des données GET.
else {
	// Tenter de récupérer idProduct (formulaire de modification).
	$product->idProduct = filter_input(INPUT_GET, 'idProduct', FILTER_VALIDATE_INT) ?: null;
	// Si idProduct présent, hydrater le produit.
	if ($product->idProduct) {
		// Si échec hydratation, rediriger vers erreur 404.
		if (!$product->hydrate()) {
			header('Location:/error404.php');
			exit;
		}
	}
	// Sinon récupérer idCategory (formulaire d'ajout).
	else {
		$product->idCategory = filter_input(INPUT_GET, 'idCategory', FILTER_VALIDATE_INT) ?: null;
	}
}
// Récupérer toutes les catégories pour construire le menu déroulant.
$categories = Category::allByName();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>ACME</title>
	<link rel="stylesheet" href="assets/css/acme.css" />
</head>

<body>
	<header></header>
	<main>
		<div class="category">
			<a href="/listProducts.php">Produits</a> &gt; Editer
		</div>
		<div class="error"><?= implode('<br/>', $errors ?: []) ?></div>
		<form name="form1" action="/editProduct.php" method="POST">
			<input type="hidden" name="idProduct" value="<?= $product->idProduct ?>" />
			<div class="item">
				<label>Catégorie</label>
				<select name="idCategory">
					<?php
					// Construire le menu déroulant des catégories.
					foreach ($categories as $category) {
						$selected = $category->idCategory === $product->idCategory ? 'selected' : '';
					?>
						<option value="<?= $category->idCategory ?>" <?= $selected ?>>
							<?= $category->name ?>
						</option>
					<?php
					}
					?>
				</select>
			</div>
			<div class="item">
				<label>Nom</label>
				<input name="name" value="<?= $product->name ?>" size="20" maxlength="50" />
			</div>
			<div class="item">
				<label>Référence</label>
				<input name="ref" value="<?= $product->ref ?>" size="10" maxlength="10" />
			</div>
			<div class="item">
				<label>Prix</label>
				<input type="number" name="price" value="<?= $product->price ?>" step=".01" />
			</div>
			<div class="item">
				<label></label>
				<a href="/listProducts.php"><input type="button" value="Annuler" /></a>
				<input type="submit" name="submit" value="Valider" />
			</div>
		</form>
	</main>
	<footer></footer>
</body>

</html>