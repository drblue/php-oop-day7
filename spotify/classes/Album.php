<?php

class Album {
	protected $id;
	protected $artist_id;
	protected $artist;
	protected $name;
	protected $releaseYear;
	protected $genre;
	protected $coverPhoto;
	protected $tracks;
	protected $recordLabel;

	public function __construct() {
		$this->tracks = [];
	}

	public function getArtist() {
		return $this->artist;
	}

	public function getName() {
		return $this->name;
	}

	public function getReleaseYear() {
		return $this->releaseYear;
	}

	public function getGenre() {
		return $this->genre;
	}

	public function setGenre(string $genre) {
		$this->genre = $genre;
	}

	public function getCoverPhoto() {
		return $this->coverPhoto;
	}

	public function setCoverPhoto(string $coverPhoto) {
		$this->coverPhoto = $coverPhoto;
	}

	public function addTrack(Track $track) {
		$this->tracks[] = $track;
	}

	public function getTrackList() {
		return $this->tracks;
	}

	public function getRecordLabel() {
		return $this->recordLabel;
	}

	public function setRecordLabel(string $recordLabel) {
		$this->recordLabel = $recordLabel;
	}
}
