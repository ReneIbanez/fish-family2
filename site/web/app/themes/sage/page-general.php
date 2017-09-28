<?php 
/**
* Template Name: General Template
**/
?>
<?php if (have_posts() ): ?>
    <?php while (have_posts() ) : the_post(); ?>
        <?php get_template_part('templates/components/banner-section'); ?>
    <?php endwhile; ?>
<?php endif; ?>