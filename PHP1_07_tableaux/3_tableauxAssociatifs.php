<?php
// Tableaux associatifs.
$notes = ["Toto" => 12, "Lulu" => 16];
var_dump($notes["Lulu"]); // 16
foreach ($notes as $eleve => $note) {
	echo "{$eleve}:{$note}"; // Toto:12 Lulu:16
}
