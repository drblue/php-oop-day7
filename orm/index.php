<?php

require "bootstrap.php";

$routes = [
	'' => 'Controllers/WelcomeController.php',
	'artists' => 'Controllers/ArtistController.php',
	'albums' => 'Controllers/AlbumController.php',
];

$page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : "";

// if (isset($_REQUEST['page'])) {
// 	$page = $_REQUEST['page'];
// } else {
// 	$page = "";
// }

if (array_key_exists($page, $routes)) {
	// ladda sida
	$controller = $routes[$page];    // Controllers/WelcomeController.php
	include $controller;
} else {
	die("Page could not be found.");
}
