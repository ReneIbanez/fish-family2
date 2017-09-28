<header>
      <h1><?php the_field('title'); ?></h1>
      <?php if( have_rows('menu') ): ?>
        <nav><?php while(have_rows('menu') ): ?>
            <?php the_row(); ?>
                <span class="navItems"><a href="#"><?php the_sub_field('menu_items'); ?></a></span>
           <?php endwhile; ?></nav>
        <?php endif; ?>
</header>
