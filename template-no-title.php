<?php 
/*
    Template Name: No Title
*/
get_header(); ?>
    
    <h1>Hello World!!!!</h1>
    <h3>Hello there, This page is using no-title template</h3><i class="fa-solid fa-face-smile"></i>

    <?php 
    if(have_posts() ) :
        while( have_posts() ):
            the_post(); ?>
                <p><?php the_content(); ?></p>
                <hr>
        <?php endwhile; ?>
    <?php else : ?>
        <h2>Sorry, there are no posts</h2>
    <?php endif; ?>

<?php get_footer(); ?>