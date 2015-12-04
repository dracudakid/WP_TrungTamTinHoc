	<div class="clear"></div>
</div><!-- .container /-->
<?php tie_banner('banner_bottom' , '<div class="e3lan e3lan-bottom">' , '</div>' ); ?>

<?php get_sidebar( 'footer' ); ?>				
<div class="clear"></div>
<div class="footer-bottom">
	<div class="container">
		<div class="alignright">
			<?php if( tie_get_option('footer_social') ) tie_get_social( true , false, 'ttip-none' ); ?>
		<!-- 	<?php
				$footer_vars = array('%year%' , '%site%' , '%url%');
				$footer_val  = array( date('Y') , get_bloginfo('name') , home_url() );
				$footer_two  = str_replace( $footer_vars , $footer_val , tie_get_option( 'footer_two' ));
				echo htmlspecialchars_decode( $footer_two );?> -->
		</div>		
		<div class="alignleft">
			<h4>Nhóm sinh viên Thực Tập Công Nhân Web 12T4 - Khoa Công nghệ Thông tin - Trường Đại học Bách Khoa Đà Nẵng</h4>
<!-- 			<?php
				$footer_one  = str_replace( $footer_vars , $footer_val , tie_get_option( 'footer_one' ));
				echo htmlspecialchars_decode( $footer_one );?> -->
		</div>
		<div class="clear"></div>
	</div><!-- .Container -->
</div><!-- .Footer bottom -->

</div><!-- .inner-Wrapper -->
</div><!-- #Wrapper -->
</div><!-- .Wrapper-outer -->
<?php if( tie_get_option('footer_top') ): ?>
	<div id="topcontrol" class="fa fa-angle-up" title="<?php _eti( 'Scroll To Top' ); ?>"></div>
<?php endif; ?>
<div id="fb-root"></div>
<?php wp_footer();?>
</body>
</html>