<?php

class Album {
	protected $artist;
	protected $name;
	protected $releaseYear;
	protected $genre;
	protected $coverPhoto;
	protected $tracks;
	protected $recordLabel;

	public function __construct(Artist $artist, string $name, int $releaseYear, Tracks $tracks) {
		$this->artist = $artist;
		$this->name = $name;
		$this->releaseYear = $releaseYear; // @todo: if releaseYear == NULL, use todays date
		$this->tracks = $tracks;
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
		$this->tracks->addTrack($track);
	}

	public function getTracks() {
		return $this->tracks;
	}

	public function removeTrack(Track $trackToRemove) {
		return $this->tracks->removeTrack($trackToRemove);
	}

	public function getRecordLabel() {
		return $this->recordLabel;
	}

	public function setRecordLabel(string $recordLabel) {
		$this->recordLabel = $recordLabel;
	}
}
