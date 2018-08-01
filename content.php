<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">

        <!-- sprintf() is a method in PHP -->
        <!-- %s is replaced... get_permalink gets the link... esc_url prevents injections -->
        <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
        <!-- F j Y is the Month day and Year -->
        <!-- g:i a means hour:minutes am or pm -->
        <small>Posted on: <?php the_time('F j, Y');?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>

    </header>

    <div class="thumbnail-img"><?php the_post_thumbnail('full'); ?></div>

    <p><?php the_content(); ?></p>

</article>
