<?php get_header(); ?>
<div class="mh-wrapper clearfix">
	<div id="main-content" class="mh-content">
	<?php
		if (have_posts()) :
			while (have_posts()) : the_post();?>
            <?php postview_set(get_the_ID()); ?>
            <?php
				mh_before_post_content();
				if (is_attachment()) {
					get_template_part('content', 'attachment');
				} else {
					get_template_part('content', get_post_format());
				}?>
				<?php echo postview_get(get_the_ID()); ?>
                <?php
				mh_after_post_content();
				comments_template();
			endwhile;
		endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>