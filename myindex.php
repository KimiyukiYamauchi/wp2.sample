<?php
/*
Template Name: My Index
*/
?>
<?php get_header(); ?>

<!-- コンテツ -->
<div id="content">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<p class="title"><?php the_title(); ?></p>
	<?php the_content(); ?>
<?php endwhile; endif; ?>

<?php query_posts('ignore_sticky_posts=1&posts_per_page=5&paged=' . $paged); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php get_template_part('content', 'excerpt'); ?>
<?php endwhile; endif; ?>

<?php get_template_part('pagenation'); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
