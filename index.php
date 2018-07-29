
<!-- code by wordpress -->
<!-- this accesses the header.php -->
<?php get_header(); ?>

  <?php

  if( have_posts() );

      while( have_posts() ) : the_post(); ?>

        <h3><?php the_title(); ?></h3>
        <div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?> </div>
        <!-- F j Y is the Month day and Year -->
        <!-- g:i a means hour:minutes am or pm -->
        <small>Posted on: <?php the_time('F j, Y');?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>

        <p><?php the_content(); ?></p>

        <br>

      <?php endwhile; ?>

<?php get_footer(); ?>

<!-- get an error with endif so I will omit it -->
