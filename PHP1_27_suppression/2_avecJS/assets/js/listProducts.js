async function removeProduct(idProduct) {
	await fetch(`/removeProduct.php?idProduct=${idProduct}`);
	location.reload();
}
