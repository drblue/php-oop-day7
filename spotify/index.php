<?php

require "autoload.php";

try {
	$pdo = new PDO('mysql:host=localhost;dbname=spotify', 'www', '');
} catch (PDOException $e) {
	die("Something went very wrong: " . $e->getMessage());
}

echo "YEY I HAZ DATABASE!<br>";

echo "I QUERY NAOW!<br>";
$query = $pdo->prepare("select * from artists");
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);
