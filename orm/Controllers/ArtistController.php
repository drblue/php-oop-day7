<?php

if (isset($_REQUEST['id'])) {
	// hämta just den här artisten
	$artist_id = $_REQUEST['id'];
	$artist = App\Models\Artist::find($artist_id);

	echo "<h1>Artist: {$artist->name}</h1>";
	echo "<p>Skapad: {$artist->created_at}</p>";

	echo "<p><a href='index.php?page=artists'>Back</a></p>";

} else {
	// hämta alla artister
	echo "<h1>Artists</h1>";

	echo "<ul>";
	$artists = App\Models\Artist::get();
	foreach ($artists as $artist) {
		// index.php?page=artists&id=1
		echo "<li><a href='index.php?page=artists&id={$artist->id}'>{$artist->name}</a></li>";
	}
	echo "</ul>";
}
