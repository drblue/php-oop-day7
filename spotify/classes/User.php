<?php

class User {
	protected $name;
	protected $subscriptionActive;
	protected $playlists;

	public function __construct(string $name, bool $subscriptionActive = false, array $playlists = []) {
		$this->name = $name;
		$this->subscriptionActive = $subscriptionActive;
		$this->playlists = $playlists;
	}

	public function getName() {
		return $this->name;
	}

	public function setName(string $name) {
		$this->name = $name;
	}

	public function createPlaylist(string $name) {
		$this->playlists[] = new Playlist($this, $name);
	}

	public function deletePlaylist(Playlist $playlistToDelete) {
		foreach ($this->playlists as $index => $playlist) {
			if ($playlist === $playlistToDelete) {
				// ta bort låt från listan
				$playlistToDelete->delete(); // @todo
				array_splice($this->playlists, $index);
				return true;
			}
		}
		return false;
	}

	public function getPlaylists() {
		return $this->playlists;
	}

	public function isSubscriptionActive() {
		return $this->subscriptionActive;
	}

	public function setSubscription(bool $subscriptionActive) {
		$this->subscriptionActive = $subscriptionActive;
	}
}
