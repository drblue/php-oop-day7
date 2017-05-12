<?php

require "autoload.php";
require "config.php";
require "core/database/Connection.php";
require "core/database/QueryBuilder.php";

// $pdo = Connection::make($config["database"]);
// $query = new QueryBuilder($pdo);

$query = new QueryBuilder(
	Connection::make($config["database"])
);
