<?php get_header($page_title); ?>

<h1>Albums</h1>

<ul>
	<?php foreach ($albums as $album) { ?>
		<li><a href="/day7/orm/albums/?id=<?php echo $album->id; ?>"><?php echo $album->name; ?></a></li>
	<?php } ?>
</ul>

<?php get_footer(); ?>
