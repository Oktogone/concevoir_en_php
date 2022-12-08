<?php

declare(strict_types=1);
// Exemple
class C1
{
	public string $public = "PUBLIC";          // Accès de partout.
	protected string $protected = "PROTECTED"; // Accès depuis la classe et les classes dérivés.
	private string $private = "PRIVATE";       // Accès depuis la classe uniquement.

	public function __construct()
	{
		var_dump($this->private);
	}
}
class C2 extends C1
{
	public function __construct()
	{
		var_dump($this->protected);
	}
}
$c1 = new C1(); // PRIVATE
$c2 = new C2(); // PROTECTED
var_dump($c2->public); // PUBLIC
