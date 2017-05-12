<?php

require "autoload.php";

include "library/artists/metallica.php";
include "library/artists/nirvana.php";

$artists = [
	$artist_metallica,
	$artist_nirvana,
];

echo "<h1>Artists in our Library</h1>";
foreach ($artists as $artist) {
	echo "<h2>Artist: " . $artist->getName() . "</h2>";
	echo "Age: " . $artist->getAge() . "<br>";
	echo "<h3>Albums</h3>";
	foreach ($artist->getAlbumList() as $album) {
		echo "<h4>Album: " . $album->getName() . "</h4>";
		foreach ($album->getTrackList() as $track) {
			echo $track->getName() . "<br>";
		}
	}
}
