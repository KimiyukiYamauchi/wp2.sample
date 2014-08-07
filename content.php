<div class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="postcat"><?php the_category(' '); ?></p>

<?php the_post_thumbnail(); ?>

<?php the_content(); ?>

<p class="postinfo"><?php echo get_the_date(); ?></p>
</div>
