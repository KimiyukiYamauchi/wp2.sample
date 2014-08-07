<?php get_header(); ?>

<!-- コンテツ -->
<div id="content">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="post">
<h2><?php the_title(); ?></h2>
<p class="photo"><?php echo wp_get_attachment_image($post->ID, 'full'); ?></p>
</div>

	<p class="pagenation">
	<span class="oldpage"><?php previous_post_link(); ?></span>
	<span class="newpage"><?php next_post_link(); ?></span>
	</p>
<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
