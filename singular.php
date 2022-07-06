<?php get_header(); ?>
<header>
    <div class="container header-container">
        <h2><?php bloginfo('title'); ?></h2>
    </div>
</header>

<?php wp_nav_menu( array( 
        'theme_location' => 'main-menu',
        'container' => 'nav',
        'container_class'   => "main-nav",
        'container_id'      => "main-nav" ) ); 
?>

<div class="wrapper main-wrapper">
    <main>
        <?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>

        <article>
            <h1 class="my-post-title"><?php the_title(); ?></h1>

            <?php the_content(); ?>
        </article>
        <?php
    endwhile; 
endif; 
?>
    </main>
</div>

<?php get_footer(); ?>
