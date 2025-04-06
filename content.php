<h2><?php the_title(); ?></h2>
<!-- <?php var_dump(the_post_thumbnail());?> -->
<div class="thumb-img"><?php the_post_thumbnail('full');?></div>
<small>Posted on: <?php the_time('l j F Y g:i a');?>, in <?php the_category(); ?>  </small>
<p><?php the_content(); ?></p>
<hr>