<?php
add_action('admin_menu', 'register_responsive_slider_submenu_page');
function register_responsive_slider_submenu_page() {
	add_submenu_page( 'edit.php?post_type=sp_responsiveslider', 'Slider Designs', 'Slider Designs', 'manage_options', 'responsive_slider-submenu-page', 'register_responsive_slider_page_callback' );
}
function register_responsive_slider_page_callback() {
	$result ='<div class="wrap"><div id="icon-tools" class="icon32"></div><h2 style="padding:15px 0">Slider Designs</h2></div>
				<div class="postdesigns medium-6 columns"><img  src="'.plugin_dir_url( __FILE__ ).'images/design-1.jpg"><p><code>[sp_responsiveslider design="design-1"]</code></p></div>
				<div class="postdesigns medium-6 columns"><img  src="'.plugin_dir_url( __FILE__ ).'images/design-2.jpg"><p><code>[sp_responsiveslider design="design-2"]</code></p></div>
				<div class="postdesigns medium-6 columns"><img  src="'.plugin_dir_url( __FILE__ ).'images/design-3.jpg"><p><code>[sp_responsiveslider design="design-3"]</code></p></div>
				<div class="postdesigns medium-6 columns"><strong> Complete shortcode is: </strong><p><code>[sp_responsiveslider design="design-1" cat_id="2" width="1024" first_slide="1" height="300" effect="fade" pagination="true" navigation="true" speed="3000" autoplay="true" autoplay_interval="3000"]</code></p></div>';
	echo $result;
}
function register_responsive_slider_admin_style(){
	?>
	<style type="text/css">
	.column, .columns {-webkit-box-sizing: border-box; 
-moz-box-sizing: border-box;    
box-sizing: border-box;}
.postdesigns img{width:100%; height:auto}
@media only screen and (min-width: 40.0625em) {  
  .column,
  .columns {position: relative;padding-left: 0.9375em;padding-right: 0.9375em;float: left; }
  .medium-1 {    width: 8.33333%; }
  .medium-2 {    width: 16.66667%; }
  .medium-3 {    width: 25%; }
  .medium-4 {    width: 33.33333%; }
  .medium-5 {    width: 41.66667%; }
  .medium-6 {    width: 50%; }
  .medium-7 {    width: 58.33333%; }
  .medium-8 {    width: 66.66667%; }
  .medium-9 {    width: 75%; }
  .medium-10 {    width: 83.33333%; }
  .medium-11 {    width: 91.66667%; }
  .medium-12 {    width: 100%; } 
   }
	</style>
<?php }
add_action('admin_head', 'register_responsive_slider_admin_style');
