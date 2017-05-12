<?php

class AlbumList {
	protected $albums;

	public function __construct() {
		$this->albums = [];
	}

	public function addAlbum(Album $album) {
		$this->albums[] = $album;
	}

	public function getAlbums() {
		return $this->albums;
	}

	public function removeAlbum(Album $albumToRemove) {
		foreach ($this->albums as $index => $album) {
			if ($album === $albumToRemove) {
				array_splice($this->albums, $index);
				return true;
			}
		}
		return false;
	}
}
