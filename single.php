<?php get_header(); ?>

<!-- パンくずリスト -->
<div id="breadcrumb">
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="<?php echo home_url(); ?>" itemprop="url">
<span itemprop="title">トップ</span>
</a> &rsaquo;
</div>

<?php $postcat = get_the_category(); ?>
<?php $catid = $postcat[0]->cat_ID; ?>
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="<?php echo get_category_link($catid); ?>" itemprop="url">
<span itemprop="title"><?php echo get_cat_name($catid); ?></span>
</a> &rsaquo;
</div>

<div><?php the_title(); ?></div>

</div>
<!-- コンテツ -->
<div id="content">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php get_template_part('content', 'single'); ?>

	<p class="pagenation">
	<span class="oldpage"><?php previous_post_link(); ?></span>
	<span class="newpage"><?php next_post_link(); ?></span>
	</p>
<?php endwhile; endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
