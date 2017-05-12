<?php

require "autoload.php";

$artist_johnf = new Artist("John Fogerty");
$artist_johnf->setAge(38);
$artist_johnf->setGenre("Country");
$artist_johnf->setPhoto("https://media.npr.org/assets/music/sotd/2010/02/fogerty_wide-199c64cac07c0b134bce15a9ce9597fdc7600549.jpg?s=1400");

$album_revival = new Album(
	$artist_johnf,
	"Revival",
	2007,
	new Tracks()
);

$track_wish = new Track($artist_johnf, "Don't You Wish It Was True");
$track_gunslinger = new Track($artist_johnf, "Gunslinger");

$album_revival->addTrack($track_wish);
$album_revival->addTrack($track_gunslinger);

echo "Album:";
var_dump($album_revival);
echo "Tracks on Album:";
var_dump($album_revival->getTracks());
