<?php get_header(); ?>

<div class="row">
    <div class="col-xs-12 col-sm-8">
        <h1>Hello World!!!!</h1>
        <h3>Hello there<i class="fa-solid fa-face-smile"></i></h3>

        <?php 
        if(have_posts() ) :
            while( have_posts() ):
                the_post(); echo 'This is the format: ', get_post_format();?>

                    <?php get_template_part('contents/content', get_post_format()); ?>

            <?php endwhile; ?>
        <?php else : ?>
            <h2>Sorry, there are no posts</h2>
        <?php endif; ?>
    </div>
    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>
</div>
    


<?php get_footer(); ?>