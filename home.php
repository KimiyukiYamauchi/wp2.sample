<?php get_header(); ?>

<!-- コンテツ -->
<div id="content">

<p class="title">NEWS</p>

<ul class="newslist">
<?php query_posts('post_type=news&posts_per_page=2'); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php get_template_part('content', 'title'); ?>
<?php endwhile; endif; ?>
</ul>

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
