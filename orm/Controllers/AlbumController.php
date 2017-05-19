<?php

namespace App\Controllers;

class AlbumController extends Controller {

	public function index() {
		$albums = \App\Models\Album::get();

		$page_title = "Albums";
		include "Views/album/index.view.php";
	}

	public function show($album_id) {
		$album = \App\Models\Album::find($album_id);

		$page_title = $album->name;
		include "Views/album/show.view.php";
	}

}

