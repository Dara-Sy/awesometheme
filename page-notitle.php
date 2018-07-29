
<!-- code by wordpress -->
<!-- this accesses the header.php -->
<?php
/*
    Template Name: Page No Title
*/

get_header(); ?>

  <?php

  if( have_posts() );

      while( have_posts() ) : the_post(); ?>

        <!-- F j Y is the Month day and Year -->
        <!-- g:i a means hour:minutes am or pm -->
        <h1>This is my static title.</h1>

        <small>Posted on: <?php the_time('F j, Y');?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>

        <p><?php the_content(); ?></p>

        <br>

      <?php endwhile; ?>

<?php get_footer(); ?>

<!-- get an error with endif so I will omit it -->
