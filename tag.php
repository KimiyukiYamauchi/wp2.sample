<?php get_header(); ?>

<!-- パンくずリスト -->
<div id="breadcrumb">
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="<?php echo home_url(); ?>" itemprop="url">
<span itemprop="title">トップ</span>
</a> &rsaquo;
</div>

<div><?php single_cat_title(); ?></div>
</div>

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
