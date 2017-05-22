<?php

namespace App\Controllers;

class ArtistController extends Controller {

	public function index() {

		if (isset($_POST['artist_name'])) {
			$new_artist_name = $_POST['artist_name'];

			if (\App\Models\Artist::where('name', $new_artist_name)->exists() === false) {
				// then save
				/*
				\App\Models\Artist::create([
					'name' => $new_artist_name,
				]);
				*/
				// skapa
				$new_artist = new \App\Models\Artist();
				$new_artist->name = $_POST['artist_name'];
				$new_artist->save();
				echo "Saved artist!<br>";
			}
		}

		$artists = \App\Models\Artist::get();

		$page_title = "Artists";
		include "Views/artist/index.view.php";
	}

	public function show($artist_id) {
		$artist = \App\Models\Artist::find($artist_id);

		$page_title = $artist->name;
		include "Views/artist/show.view.php";
	}

}
