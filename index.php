<?php get_header(); ?>
<header>
    <div class="wrapper header-wrapper">
    <h1><?php bloginfo('title'); ?></h1>
        </div>
</header>

<?php wp_nav_menu( array( 
        'theme_location' => 'main-menu',
        'container' => 'nav',
        'container_class'   => "main-nav",
        'container_id'      => "main-nav" ) ); ?>
<div>
    <main class="wrapper main-wrapper">
        <?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>

        <article>
            <h2 class="my-post-title"><?php the_title(); ?></h2>
            <figure><?php echo the_post_thumbnail( 'thumbnail' )?></figure>
            <?php the_content(); ?>
        </article>
        <?php
    endwhile; 
endif; 
?>
    </main>
</div>
<?php get_footer(); ?>
