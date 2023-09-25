<?php
$page_template_sidebar_mappings = array(
	//'page-_services.php' => 'Services'
);
?>
		
		<aside id="sidebar" class="wow fadeInRightSmall">
			<div class="widget view_our_products">
				<h3 class="widgettitle">BiteHarder</h3>
				
				<p class="after_title">All Winter Long</p>
				
				<p><a href="/store/" class="button">View Our Products</a></p>
			</div>
			
			<div class="widget newsletter">
				<h3 class="widgettitle">Stay Sharp</h3>
				
				<p class="after_title">Join the BiteHarder Newsletter</p>
				
				<?php echo do_shortcode('[ctct form="2493"]'); ?>
			</div>
			
			<?php /*<div class="widget video">
				<p><img src="<?php echo get_template_directory_uri(); ?>/images/sidebar-widget-video-placeholder-img.jpg" alt="" /></p>
				
				<div class="thumbnail">
					<a href="https://www.youtube.com/embed/UojadwaUL2M" class="thickbox" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/sidebar-widget-video-thumbnail-img.jpg" alt="" /></a>
					
					<a href="https://www.youtube.com/embed/UojadwaUL2M" class="play">&nbsp;</a>
				</div>
				
				<h4>PowerModz Tried Out Our Tools</h4>
			</div>*/ ?>
			
<?php $sidebar_video = get_post_meta( get_the_ID(), '_sidebar_video', true ); ?>
<?php if ($sidebar_video) { ?>
			<div class="widget video">
				<div class="thumbnail">
					<iframe src="<?php echo esc_attr($sidebar_video); ?>" allowfullscreen></iframe>
				</div>
				
<?php $sidebar_video_title = get_post_meta( get_the_ID(), '_sidebar_video_title', true ); ?>
<?php if ($sidebar_video_title) { ?>
				<h4><?php echo htmlspecialchars($sidebar_video_title); ?></h4>
<?php } ?>
			</div>
<?php } ?>
			
<?php if ( get_page_template_slug() && array_key_exists( get_page_template_slug(), $page_template_sidebar_mappings ) ) { ?>
			<?php dynamic_sidebar( $page_template_sidebar_mappings[ get_page_template_slug() ] ); ?>
<?php } else { ?>
			<?php dynamic_sidebar(); ?>
<?php } ?>
			
		</aside>