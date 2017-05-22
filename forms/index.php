<?php
	if (isset($_POST['artist_name'])) {
		echo "POST save artist with name: " . $_REQUEST['artist_name'] . "!<br>";
	} else if (isset($_GET['artist_name'])) {
		echo "GET save artist with name NOT DO!: " . $_REQUEST['artist_name'] . "!<br>";
	}
?>

<h1>Create Artist</h1>
<form method="POST">
	<label for="artist_name">Artist name:</label>
	<input type="text" name="artist_name" id="artist_name">

	<input type="submit" value="Create Artist">
</form>

<h1>Create Album</h1>
<form method="POST">
	<label for="album_name">Album name:</label>
	<input type="text" name="album_name" id="album_name">

	<input type="submit" value="Create Album">
</form>
