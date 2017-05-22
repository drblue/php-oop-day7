<?php get_header($page_title); ?>

<h1>Artists</h1>

<h2>Create New Artist</h2>
<form method="POST">
	<label for="artist_name">Artist Name:</label>
	<input type="text" name="artist_name" id="artist_name">

	<input type="submit" value="Create New Artist">
</form>

<ul>
	<?php foreach ($artists as $artist) { ?>
		<li><a href="/day7/orm/artists/?id=<?php echo $artist->id; ?>"><?php echo $artist->name; ?></a></li>
	<?php } ?>
</ul>

<?php get_footer(); ?>
