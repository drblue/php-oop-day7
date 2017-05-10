<?php

class Track {
	protected $artist;
	protected $name;
	protected $url;

	public function __construct(Artist $artist, string $name, string $url = null) {
		$this->artist = $artist;
		$this->name = $name;
		$this->url = $url;
	}

	public function getArtist() {
		return $this->artist;
	}

	public function getName() {
		return $this->name;
	}

	public function getURL() {
		return $this->url;
	}

	public function setURL(string $url) {
		$this->url = $url;
	}
}
