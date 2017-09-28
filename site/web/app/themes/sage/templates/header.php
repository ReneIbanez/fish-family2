<?php
/**
* Template Name: Header
*/
?>

<header>
<<<<<<< HEAD
      <h1><?php the_field('title'); ?></h1>
      <?php if( have_rows('menu') ): ?>
        <nav><?php while(have_rows('menu') ): ?>
            <?php the_row(); ?>
                <span class="navItems"><a href="#"><?php the_sub_field('menu_items'); ?></a></span>
           <?php endwhile; ?></nav>
        <?php endif; ?>
=======
  <div>
    <h1>Fish Family Foundation</h1>
    <!-- <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> -->
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
         wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
>>>>>>> a5968d64290bec4c345e7f6994b532908366cc8c
</header>

