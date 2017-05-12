<?php

class QueryBuilder {
	protected $pdo;

	public function __construct(PDO $pdo) {
		$this->pdo = $pdo;
	}

	public function selectAll($table, $class) {
		$query = $this->pdo->prepare("select * from {$table}");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_CLASS, $class);
	}

	public function selectById($id, $table, $class) {
		$query = $this->pdo->prepare("select * from {$table} where id={$id}");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_CLASS, $class);
	}

	public function select($field, $value, $table, $class) {
		$query = $this->pdo->prepare("select * from {$table} where {$field}={$value}");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_CLASS, $class);
	}
}
