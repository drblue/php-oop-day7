<?php

require "bootstrap.php";

$app_name = "Spotify";

$routes = [
	'' => 'Controllers/WelcomeController.php',
	'artists' => 'Controllers/ArtistController.php',
	'albums' => 'Controllers/AlbumController.php',
	'movies' => 'Controllers/MovieController.php',
];

// $page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : "";

if (isset($_REQUEST['page'])) {
	$page = $_REQUEST['page'];
} else {
	$page = "";
}

if (array_key_exists($page, $routes)) {
	// ladda sida
	$controller = $routes[$page];    // $routes["artists"]
	include $controller;
} else {
	die("Page could not be found.");
}
