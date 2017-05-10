<?php

class Playlist {
	protected $user;
	protected $name;
	protected $tracks;
	protected $public;

	public function __construct(User $user, string $name, Tracks $tracks, bool $public = false) {
		$this->user = $user;
		$this->name = $name;
		$this->tracks = $tracks;
		$this->public = $public;
	}

	/**
	 * @todo: implement this when we have a database connection
	 */
	public function delete() {
		return false;
	}

	public function getUser() {
		return $this->user;
	}

	public function getName() {
		return $this->name;
	}

	public function setName(string $name) {
		$this->name = $name;
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

	public function isPublic() {
		return $this->public;
	}

	public function setPublic(bool $public) {
		$this->public = $public;
	}
}
