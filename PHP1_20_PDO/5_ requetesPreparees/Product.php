<?php

declare(strict_types=1);
// Classe entité Product.
class Product
{
	public ?int $idProduct = null;
	public ?int $idCategory = null;
	public ?string $name = null;
	public ?string $ref = null;
	public ?float $price = null;
}
