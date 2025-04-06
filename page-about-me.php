<?php get_header(); ?>
    <h1>Hello World!!!!</h1>
    <h3>Hello there</h3><i class="fa-solid fa-face-smile"></i>

    <?php 
    if(have_posts() ) :
        while( have_posts() ):
            the_post(); ?>
                <h2><?php the_title(); ?></h2>

                <p><?php the_content(); ?></p>
                <hr>
        <?php endwhile; ?>
    <?php else : ?>
        <h2>Sorry, there are no posts</h2>
    <?php endif; ?>

<?php get_footer(); ?>