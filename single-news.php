<?php get_header(); ?>

<!-- パンくずリスト -->
<div id="breadcrumb">
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="<?php echo home_url(); ?>" itemprop="url">
<span itemprop="title">トップ</span>
</a> &rsaquo;
</div>

<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
	<a href="<?php echo get_post_type_archive_link($post_type); ?>" itemprop="url">
		<span itemprop="title">
		<?php $myposttype = get_post_type_object($post_type); ?>
		<?php echo $myposttype->label; ?></span>
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

<!-- サイドバー -->
<div id="sidebar">
<ul>
<li class="widget">
<h2>最近のニュース</h2>
<ul>
	<?php query_posts('post_type=news&posts_per_page=5'); ?>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<?php get_template_part('content', 'title'); ?>
	<?php endwhile; endif; ?>
</ul>
</li>
</ul>
</div>
<?php get_footer(); ?>
