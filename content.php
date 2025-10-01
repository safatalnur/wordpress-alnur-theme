<a href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
<!-- <?php var_dump(the_post_thumbnail());?> -->
<div class="thumb-img"><?php the_post_thumbnail('thumbnail');?></div>
<small>Posted on: <?php the_time('l j F Y g:i a');?>, in <?php the_category(); ?>  </small>
<hr>