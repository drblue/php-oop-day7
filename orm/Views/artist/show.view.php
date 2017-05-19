<?php get_header($page_title); ?>

<h1><?php echo $artist->name; ?></h1>

<p>Skapad: <?php echo $artist->created_at; ?></p>

<?php foreach ($artist->albums as $album) { ?>
	<h2><?php echo $album->name; ?></h2>

	<ol>
		<?php foreach ($album->tracks as $track) { ?>
			<li><?php echo $track->name; ?></li>
		<?php } ?>
	</ol>
<?php } ?>

<p><a href="/day6/orm/artists/">Back</a></p>

<?php get_footer(); ?>
