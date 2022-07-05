<?php get_header(); ?>
<header>
    <h1><?php bloginfo('title'); ?></h1>
</header>

            <?php wp_nav_menu( array( 
        'theme_location' => 'main-menu',
        'container' => 'nav',
        'container_class'   => "main-nav",
        'container_id'      => "main-nav" ) ); ?>

<main>
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
    
    <article>
       <h2 class="my-post-title"><?php the_title(); ?></h2>
    
        <?php the_content(); ?>
        </article>
    <?php
    endwhile; 
endif; 
?>
</main>
<?php get_footer(); ?>