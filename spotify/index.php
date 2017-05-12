<?php

require "autoload.php";
echo "<pre>";

try {
	$pdo = new PDO('mysql:host=localhost;dbname=spotify', 'www', '');
} catch (PDOException $e) {
	die("Something went very wrong: " . $e->getMessage());
}

echo "YEY I HAZ DATABASE!<br>";

echo "I QUERY ARTISTS NAOW!<br>";
$query = $pdo->prepare("select * from artists");
$query->execute();

$result = $query->fetchAll(PDO::FETCH_CLASS, 'Artist');

echo "I QUERY TRACKS NAOW!<br>";
$query = $pdo->prepare("select * from tracks");
$query->execute();

$result = $query->fetchAll(PDO::FETCH_CLASS, 'Track');


echo "I QUERY ALBUMS NAOW!<br>";
$query = $pdo->prepare("select * from albums");
$query->execute();

$result = $query->fetchAll(PDO::FETCH_CLASS, 'Album');
var_dump($result);
