
<!-- code by wordpress -->
<!-- this accesses the header.php -->
<?php get_header(); ?>

  <?php

  if( have_posts() );

      while( have_posts() ) : the_post(); ?>

        <!-- this gets specific part of theme -->
        <!-- this connects to content.php -->
        <?php get_template_part('content', get_post_format()); ?>

      <?php endwhile; ?>

<?php get_footer(); ?>

<!-- get an error with endif so I will omit it -->
