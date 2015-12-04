<?php $mh_magazine_lite_options = mh_magazine_lite_theme_options(); ?>
<?php get_header(); ?>
<div class="mh-wrapper clearfix">
    <div id="main-content" class="mh-content"><?php
    	if (have_posts()) :
    		while (have_posts()) : the_post();
    			mh_before_page_content(); ?>
				<div <?php post_class(); ?>>
					<div class="entry clearfix">
						<?php the_content(); ?>
					</div>
				</div><?php
				if (isset($mh_magazine_lite_options['comments_pages']) ? $mh_magazine_lite_options['comments_pages'] : false) :
					comments_template();
				endif;
			endwhile;
        endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>