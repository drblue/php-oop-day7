<?php

$pdo = Connection::make($config["database"]);

function fetchTable($pdo, $table, $class) {
	$query = $pdo->prepare("select * from {$table}");
	$query->execute();
	return $query->fetchAll(PDO::FETCH_CLASS, $class);
}
