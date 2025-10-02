<?php get_header(); ?>

<div class="row">
    <div class="col-xs-12 col-sm-8">
        <?php
            $lastBlog = new WP_Query('type=post&posts_per_page=1');
            // var_dump($lastBlog->posts[0]->post_date_gmt); // Check on posts
            if ($lastBlog->have_posts() ):
                while($lastBlog->have_posts() ) : $lastBlog->the_post();
                    get_template_part('contents/content', get_post_format());
                endwhile;
            endif;

            wp_reset_postdata();  // Always use whenever we use WP_Query to reset
        ?>
    </div>
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
        <!-- Post New query post -->
        <?php
            $args = array(
                'type'  => 'post',
                'posts_per_page'    => -1,
                'offset'     => 1,
            );
            $lastBlog = new WP_Query($args);
            // var_dump($lastBlog->posts[0]->post_date_gmt); // Check on posts
            if ($lastBlog->have_posts() ):
                while($lastBlog->have_posts() ) : $lastBlog->the_post();
                    get_template_part('contents/content', get_post_format());
                endwhile;
            endif;

            wp_reset_postdata();  // Always use whenever we use WP_Query to reset
        ?>
        <!-- Post New query post but only review -->
        <?php
            $args = array(
                'type'  => 'post',
                'posts_per_page'    => -1,
                'category_name'     => 'reviews',
            );
            $lastBlog = new WP_Query($args);
            // var_dump($lastBlog->posts[0]->post_date_gmt); // Check on posts
            if ($lastBlog->have_posts() ):
                while($lastBlog->have_posts() ) : $lastBlog->the_post();
                    get_template_part('contents/content', get_post_format());
                endwhile;
            endif;

            wp_reset_postdata();  // Always use whenever we use WP_Query to reset
        ?>
    </div>
    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>
</div>
    


<?php get_footer(); ?>