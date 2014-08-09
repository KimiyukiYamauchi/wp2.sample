<?php get_header(); ?>

<!-- パンくずリスト -->
<div id="breadcrumb">
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="<?php echo home_url(); ?>" itemprop="url">
<span itemprop="title">トップ</span>
</a> &rsaquo; 
</div>


<?php if(is_month()): ?>
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="<?php echo get_year_link(get_the_date('Y')); ?>" itemprop="url">
<span itemprop="title"><?php echo get_the_date('Y'); ?> 年</span>
</a> &rsaquo;
</div>

<div><?php echo get_the_date('n'); ?>月</div>
<?php endif; ?>

<?php if(is_year()): ?>
<div><?php echo get_the_date('Y'); ?>年</div>
<?php endif; ?>

</div>

<!-- コンテツ -->
<div id="content">
<p class="title">
<?php single_month_title(); ?>
<?php if(is_year()): ?>
<?php echo get_the_date('Y'); ?>
<?php endif; ?>
</p>

<ul class="post">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php get_template_part('content', 'title'); ?>
<?php endwhile; endif; ?>
</ul>

<?php get_template_part('pagenation'); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
