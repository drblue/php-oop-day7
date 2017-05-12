<?php

/**
 * METALLICA
 */
$artist_metallica = new Artist("Metallica");

// Tracks
$track_metallica_nothing = new Track($artist_metallica, "Nothing Else Matters");
$track_metallica_enter_sandman = new Track($artist_metallica, "Enter Sandman");
$track_metallica_puppets = new Track($artist_metallica, "Master of Puppets");

// Album: Metallica
$album_metallica_metallica = new Album($artist_metallica, "Metallica", 1991, new TrackList());
$artist_metallica->addAlbum($album_metallica_metallica);
$album_metallica_metallica->addTrack($track_metallica_nothing);
$album_metallica_metallica->addTrack($track_metallica_enter_sandman);

// Album: Master of Puppets
$album_metallica_puppets = new Album($artist_metallica, "Master of Puppets", 1986, new TrackList());
$artist_metallica->addAlbum($album_metallica_puppets);
$album_metallica_puppets->addTrack($track_metallica_puppets);
