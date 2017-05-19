<?php

require "bootstrap.php";

$app_name = "Spotify";

$route_prefix = "/day6/orm";
$routes = [
	'/' => 'App\Controllers\WelcomeController',
	'/artists/' => 'App\Controllers\ArtistController',
	'/albums/' => 'App\Controllers\AlbumController',
	'/movies/' => 'App\Controllers\MovieController',
];

// $page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : "";

$page = str_replace($route_prefix, "", $_SERVER['REDIRECT_URL']);

if (array_key_exists($page, $routes)) {
	// ladda sida
	$controller = $routes[$page];    // $routes["artists"]
	$ctrl = new $controller();
	$ctrl->process();
} else {
	die("Page could not be found.");
}
