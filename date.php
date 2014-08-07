<?php get_header(); ?>

<!-- コンテツ -->
<div id="content">
<p class="title"><?php single_month_title(); ?></p>

<ul class="post">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php get_template_part('content', 'title'); ?>
<?php endwhile; endif; ?>
</ul>

<?php get_template_part('pagenation'); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
