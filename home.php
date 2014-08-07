<?php get_header(); ?>

<!-- コンテツ -->
<div id="content">

<div id="pickup">
<p class="title">PICK-UP POSTS</p>

<?php
$myquery_pickup = array(
	'posts_per_page' => 1,
	'ignore_sticky_posts' => 1,
	'post__in' => get_option('sticky_posts')
);
?>
<?php query_posts($myquery_pickup); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php get_template_part('content', 'excerpt'); ?>
<?php endwhile; endif; ?>
</div>

<p class="title">RECENT POSTS</p>

<?php 
$myquery_recent01 = array(
	'posts_per_page' => 2,
	'ignore_sticky_posts' => 1,
	'tax_query' => array(array(
		'taxonomy' => 'post_format',
		'field' => 'slug',
		'terms' => 'post-format-status',
		'operator' => 'NOT IN'
	))
);
?>
<?php query_posts($myquery_recent01); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php get_template_part('content', 'excerpt'); ?>
<?php endwhile; endif; ?>

<ul class="toplist">
<?php
$myquery_recent02 = array(
	'posts_per_page' => 8,
	'offset' => 2,
	'ignore_sticky_posts' => 1,
	'tax_query' => array(array(
		'taxonomy' => 'post_format',
		'field' => 'slug',
		'terms' => 'post-format-status',
		'operator' => 'NOT IN'
	))
);
?>
<?php query_posts($myquery_recent02); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php get_template_part('content', 'title'); ?>
<?php endwhile; endif; ?>
</ul>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
