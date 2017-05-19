<?php

namespace App\Controllers;

class ArtistController extends Controller {

	public function index() {
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
