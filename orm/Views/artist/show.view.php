<?php get_header($page_title); ?>

<h1><?php echo $artist->name; ?></h1>

<p>Skapad: <?php echo $artist->created_at; ?></p>

<p><a href="index.php?page=artists">Back</a></p>

<?php get_footer(); ?>
