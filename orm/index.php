<?php

require "bootstrap.php";

// $new_artist = new Artist();
// $new_artist->name = "Sean Banan";
// $new_artist->save();

// $artists = Artist::get()->toArray();
// $specific_artist = Artist::find(1)->toArray();
// var_dump($specific_artist);

foreach (Artist::get() as $artist) {
	echo "Artist: {$artist->name}\n";
	foreach ($artist->albums as $album) {
		echo "Album name: {$album->name}\n";
	}
	echo "\n";
}
