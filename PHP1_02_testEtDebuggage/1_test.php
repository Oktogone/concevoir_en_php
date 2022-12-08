<?php
// Afficher la configuration de PHP.
//phpinfo();
// Commande echo pour envoyer vers le client.
echo "Hello !";
// Pas de fin de PHP sauf si contenu HTML à la suite.
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Test</title>
</head>

<body>
	<!-- Insertion de données PHP avec echo. -->
	<p><?php echo "Hello Bob !"	?></p>
	<!-- Insertion de PHP avec raccourci. -->
	<p><?= "Hello Max !" ?></p>
</body>

</html>