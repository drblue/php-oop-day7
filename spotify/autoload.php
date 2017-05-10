<?php

spl_autoload_register(function ($name) {
	$file = "classes/" . $name . ".php";
	if (file_exists($file)) {
		include $file;
	} else {
		throw new Exception("Unable to load class $name.");
	}
});
