<?php

class Artist {
	protected $name;
	protected $age;
	protected $genre;
	protected $photo;

	public function __construct(string $name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function setName(string $name) {
		$this->name = $name;
	}

	public function getAge() {
		return $this->age;
	}

	public function setAge(int $age) {
		$this->age = $age;
	}

	public function getGenre() {
		return $this->genre;
	}

	public function setGenre(string $genre) {
		$this->genre = $genre;
	}

	public function getPhoto() {
		return $this->photo;
	}

	public function setPhoto(string $photo) {
		$this->photo = $photo;
	}
}
