<?php

require "bootstrap.php";

$app_name = "Spotify";

$route_prefix = "/day6/orm";
$routes = [
	'/' => 'Controllers/WelcomeController.php',
	'/artists/' => 'Controllers/ArtistController.php',
	'/albums/' => 'Controllers/AlbumController.php',
	'/movies/' => 'Controllers/MovieController.php',
];

// $page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : "";

$page = str_replace($route_prefix, "", $_SERVER['REDIRECT_URL']);

if (array_key_exists($page, $routes)) {
	// ladda sida
	$controller = $routes[$page];    // $routes["artists"]
	include $controller;
} else {
	die("Page could not be found.");
}
