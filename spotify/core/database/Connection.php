<?php

class Connection {
	public static function make($config) {
		try {
			$dsn = $config["type"] . ':host=' . $config["host"] . ';dbname=' . $config["name"];
			return new PDO(
				$dsn,
				$config["username"],
				$config["password"]
			);
		} catch (PDOException $e) {
			die("Something went very wrong: " . $e->getMessage());
		}
	}
}
