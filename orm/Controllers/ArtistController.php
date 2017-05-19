<?php

if (isset($_REQUEST['id'])) {
	// hämta just den här artisten
	$artist_id = $_REQUEST['id'];
	$artist = App\Models\Artist::find($artist_id);

	$page_title = $artist->name;
	include "Views/artist/show.view.php";

} else {
	// hämta alla artister
	$artists = App\Models\Artist::get();

	$page_title = "Artists";
	include "Views/artist/index.view.php";

}
