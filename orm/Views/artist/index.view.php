<?php get_header($page_title); ?>

<h1>Artists</h1>

<ul>
	<?php foreach ($artists as $artist) { ?>
		<li><a href="/day6/orm/artists/?id=<?php echo $artist->id; ?>"><?php echo $artist->name; ?></a></li>
	<?php } ?>
</ul>

<?php get_footer(); ?>
