<?php 
/* 
Template Name: Blank
Template Post Type: post, page
*/ 
?>

<?php get_header(); ?>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
         the_content();
    endwhile; 
endif; 
?>

<?php get_footer(); ?>