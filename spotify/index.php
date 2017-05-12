<?php

require "core/bootstrap.php";
echo "<pre>";

$artists = $query->selectAll('artists', 'Artist');

foreach ($artists as $artist) {
	echo "<h1>Artist: {$artist->getName()}</h1>";
	// vilka album har artisten?
	$albums = $query->select("artist_id", $artist->getId(), "albums", "Album");
	foreach ($albums as $album) {
		echo "<h2>Album: {$album->getName()}</h2>";
		$tracks = $query->select("album_id", $album->getId(), "tracks", "Track");
		echo "<ul>";
		foreach ($tracks as $track) {
			echo "<li>{$track->getName()}</li>";
		}
		echo "</ul>";
	}

}
