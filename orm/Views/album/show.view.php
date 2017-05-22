<?php get_header($page_title); ?>

<h1><?php echo $album->name; ?></h1>

<p>Release Year: <?php echo $album->releaseYear; ?></p>

<p><a href="/day7/orm/albums/">Back</a></p>

<?php get_footer(); ?>
