<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php 
$posts = get_posts('category_name=home_page'); 
sort($posts);
foreach($posts as $post) { 
    setup_postdata( $post );

    the_title(); ?>
    <p><?php the_content(); ?></p>
    <?php the_post_thumbnail() ?>
<?php } ?>

<?php the_posts_navigation(); ?>

