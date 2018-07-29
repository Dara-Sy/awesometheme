<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Awesome Theme</title>
    <?php wp_head(); ?>
  </head>

  <?php

      // is_home is located where the blog posts are looped
      // use is_front_page to detect the first page as home page and awesome class
      if( is_front_page() ):
          $awesome_classes = array('awesome-class', 'my-class');
      else:
          $awesome_classes = array('no-awesome-class');
      endif;

  ?>

<body <?php body_class( $awesome_classes ); ?>>

    <!-- calls whatever menu you have created -->
    <!-- add params, array that calls nav menu we created called primary -->
    <?php wp_nav_menu(array('theme_location'=>'primary'));

        // this shows the info of the header image
        // var_dump(get_custom_header())

    ?>

    <!-- get_custom_header() is array object with info -->
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

