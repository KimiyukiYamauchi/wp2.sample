<div class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="postcat"><?php the_category(' '); ?></p>

<?php the_post_thumbnail(); ?>

<?php $tenkival = get_post_meta($post->ID, '天気', true); ?>
<?php if($tenkival): ?>
<p class="tenki">
<?php
$tenkipng = array(
	"晴れ" => "hare.png",
	"くもり" => "kumori.png",
	"雨" => "ame.png"
);
?>
<img src="<?php bloginfo('template_url'); ?>/<?php echo $tenkipng[$tenkival]; ?>" width="50" height="50" />
<?php echo get_post_meta($post->ID, '気温', true); ?>
</p>
<?php endif; ?>

<?php the_content(); ?>

<?php wp_link_pages('before=<p id="postpage">&after=</p>&pagelink=<span>%</span>'); ?>

<p class="postinfo"><?php echo get_the_date(); ?></p>

<?php if(function_exists('related_posts')): ?>
<?php related_posts(); ?>
<?php endif; ?>
</div>
