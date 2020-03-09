<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>    
	<?php the_title('<h1>','</h1>'); ?>
    <?php the_exerpt(); ?>
	<?php endwhile; ?>

<?php get_footer(); ?>