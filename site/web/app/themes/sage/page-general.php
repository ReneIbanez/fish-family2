<?php 
/**
* Template Name: General Template
**/
?>
<?php if (have_posts() ): ?>
    <?php while (have_posts() ) : the_post(); ?>
    <h1>General Template (Muigai will delete this later)</h1>
    <?php get_template_part('templates/components/banner-section'); ?>
    <?php get_template_part('templates/components/paragraph-section'); ?>
    <?php endwhile; ?>
<?php endif; ?>