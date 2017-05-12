<?php

/**
 * NIRVANA
 */
$artist_nirvana = new Artist("Nirvana");

// Tracks
$track_nirvana_teenspirit = new Track($artist_nirvana, "Smells Like Teen Spirit");
$track_nirvana_inbloom = new Track($artist_nirvana, "In Bloom");
$track_nirvana_come = new Track($artist_nirvana, "Come as You Are");
$track_nirvana_world = new Track($artist_nirvana, "The Man Who Sold The World");

// Album: Nevermind
$album_nirvana_nevermind = new Album($artist_nirvana, "Nevermind", 1991, new TrackList());
$artist_nirvana->addAlbum($album_nirvana_nevermind);
$album_nirvana_nevermind->addTrack($track_nirvana_teenspirit);
$album_nirvana_nevermind->addTrack($track_nirvana_inbloom);
$album_nirvana_nevermind->addTrack($track_nirvana_come);

// Album: MTV Unplugged in New York
$album_nirvana_unplugged = new Album($artist_nirvana, "MTV Unplugged in New York", 1994, new TrackList());
$artist_nirvana->addAlbum($album_nirvana_unplugged);
$album_nirvana_unplugged->addTrack($track_nirvana_world);
