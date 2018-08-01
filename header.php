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

  <div class="container">

    <div class="row">

      <div class="col-xs-12">


        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Awesome Theme</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        // this puts the links to the right of the nav bar
                        'menu_class' => 'nav navbar-nav navbar-right'
                       )
                    );
                 ?>

          </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                  </ul>
                </li>
              </ul>
            </div> --><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>



        <!-- calls whatever menu you have created -->
        <!-- add params, array that calls nav menu we created called primary -->

      </div>

    </div>

    <!-- get_custom_header() is array object with info -->
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />




<!--         // this shows the info of the header image
        // var_dump(get_custom_header()) -->
