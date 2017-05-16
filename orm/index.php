<?php

require "bootstrap.php";

// $new_artist = new Artist();
// $new_artist->name = "Sean Banan";
// $new_artist->save();

// $artists = Artist::get()->toArray();
// $specific_artist = Artist::find(1)->toArray();
// var_dump($specific_artist);

// function die_Sean_Banan_die() {
// 	$sean_banans = Artist::where('name', 'Sean Banan')->get();
// 	foreach ($sean_banans as $sean_banan) {
// 		foreach ($sean_banan->albums as $album) {
// 			foreach ($album->tracks as $track) {
// 				$track->delete();
// 			}
// 			$album->delete();
// 		}
// 		$sean_banan->delete();
// 	}
// }

// die_Sean_Banan_die();
// echo "YASSS!!!";

// $new_artist = new Artist();
// $new_artist->setName("Apan Banane");
// $new_artist->save();

// $artist = Artist::find(12);
// $artist->setName("Apan Citron");
// $artist->save();

// $artist = Artist::where('name', 'Apan Banane')->first();
// if ($artist !== null) {
// 	$artist->setName("Björne Banan");
// 	$artist->save();
// }

$new_artist = new \App\Models\Artist();
$new_artist->name = "Dr Bombay";
$new_artist->save();
