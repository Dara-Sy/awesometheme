
<!-- code by wordpress -->
<!-- this accesses the header.php -->
<?php get_header(); ?>

  <?php

  if( have_posts() );

      while( have_posts() ) : the_post(); ?>

        <!-- F j Y is the Month day and Year -->
        <!-- g:i a means hour:minutes am or pm -->


        <p><?php the_content(); ?></p>
        <h3><?php the_title(); ?></h3>

        <br>

      <?php endwhile; ?>

<?php get_footer(); ?>

<!-- get an error with endif so I will omit it -->
