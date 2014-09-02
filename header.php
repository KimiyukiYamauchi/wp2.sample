<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- コンテナ -->
<div id="container">

<!-- ヘッダー -->
<div id="header">
<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<p id="desc"><?php bloginfo('description'); ?></p>

<div id="subinfo">
<?php echo get_search_form(); ?>
<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/feed.png" alt="RSS FEED" width="28" height="28" /></a>
</div>
<div id="nav">
<?php wp_nav_menu(array(
	'theme_location' => 'navigation'
)); ?>
</div>
<?php if(!is_single() && !is_home()): ?>
<?php if(get_header_image()): ?>

<script>
jQuery(function() {
	jQuery('#slideshow').crossSlide({
			sleep: 2,
			fade: 1
	}, [
<?php $headers = get_uploaded_header_images(); ?>
<?php foreach($headers as $key => $value): ?>
	{ src: '<?php echo $value['url']; ?>' },
<?php endforeach; ?>
	])
});
</script>
<div id="slideshow"></div>
<?php endif; ?>
<?php endif; ?>

<?php if(is_home()): ?>
<?php
$myquery_pickup = array(
	'posts_per_page' => 1,
	'ignore_sticky_posts' => 1,
	'post__in' => get_option('sticky_posts')
);
?>
<?php query_posts($myquery_pickup); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<div id="osusume">
	<p class="thumb"><?php the_post_thumbnail(); ?></p>
	<p class="pickup">PICK-UP POST</p>
	<h2><?php the_title(); ?></h2>
	<p><?php the_excerpt(); ?></p>
	<p class="more"><a href="<?php the_permalink(); ?>">続きを読む</a></p>
	</div>
<?php endwhile; endif; ?>
<?php endif; ?>
</div>
