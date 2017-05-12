<?php

class Track {
	protected $id;
	protected $artist_id;
	protected $album_id;
	protected $artist;
	protected $name;
	protected $url;

	public function __construct() {
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
