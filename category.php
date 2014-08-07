<?php get_header(); ?>

<!-- コンテツ -->
<div id="content">
<p class="title"><?php single_cat_title(); ?></p>

<?php query_posts('posts_per_page=-1&order=ASC&' . $query_string); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php get_template_part('content', 'excerpt'); ?>
<?php endwhile; endif; ?>

<?php get_template_part('pagenation'); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
