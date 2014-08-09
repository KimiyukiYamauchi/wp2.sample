<p class="pagenation pagenum">

<?php 
$maxpage = $wp_query->max_num_pages;
$current = $paged;
if(!$current){$current = 1;}
?>

<?php previous_posts_link('&lt;'); ?>
<?php for($i=1; $i<=$maxpage; $i++): ?>
	<?php if($i == $current): ?>
	<span><?php echo $i; ?></span>
	<?php else: ?>
	<a href="<?php echo get_pagenum_link($i); ?>"><?php echo $i; ?></a>
	<?php endif; ?>
<?php endfor; ?>
<?php next_posts_link('&gt;'); ?>

</p>
