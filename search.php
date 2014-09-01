<?php get_header(); ?>

<!-- パンくずリスト -->
<div id="breadcrumb">
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="<?php echo home_url(); ?>" itemprop="url">
<span itemprop="title">トップ</span>
</a> &rsaquo;
</div>

<div>検索結果</div>
</div>

<!-- コンテツ -->
<div id="content">
<p class="title"> 『<?php echo the_search_query(); ?>』の検索結果</p>

<?php query_posts('posts_per_page=5&order=DESC&' . $query_string); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php get_template_part('content'); ?>
<?php endwhile; else: ?>
	<p>一致する記事は見つかりませんでした。<br />
	キーワードを変更してお試しください。<br />
	<?php echo get_search_form() ?>
<?php endif; ?>

<?php get_template_part('pagenation'); ?>
</div>

<?php get_sidebar(); ?>

<?php //get_footer(); ?>
