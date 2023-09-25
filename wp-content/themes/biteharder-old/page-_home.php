<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php /*$front_page_slider = new WP_Query( array('post_type' => 'front_page_slider', 'order' => 'ASC') ); ?>
<?php if ( $front_page_slider->have_posts() ) : */?>
<div id="banner" class="cycle-slideshow wow fadeIn"
	data-cycle-timeout="7000"
	data-cycle-slides="> .slide"
	data-cycle-auto-height="false"
>
	<img src="<?php echo get_template_directory_uri(); ?>/images/banner-sizer-img.png" alt="" class="sizer" />
	
<?php //while ( $front_page_slider->have_posts() ) : $front_page_slider->the_post(); ?>
	<div class="slide"<?php if ( has_post_thumbnail() ) { ?> style="background-image: url(<?php echo current( wp_get_attachment_image_src( get_post_thumbnail_ID(), 'banner') ); ?>);"<?php } ?>>
		<div class="banner_text_source">
			
		</div>
	</div>
<?php //endwhile; ?>
	
	<div class="wrap">
		<div id="banner_text">
			<h2 class="title line_1 wow fadeInLeftBig">Never Lose</h2>
			<h2 class="title line_2 wow fadeInRightBig">Your <span class="alt_color">Edge</span></h2>
			
			<a href="/store/" class="button wow fadeInUpSmall" data-wow-delay="400ms">See Our Tools</a>
		</div>
	</div>
</div>
<?php //endif; ?>




<div id="homevideo">
	<div class="wrap">
		<div class="video_container">
			<iframe src="https://www.youtube.com/embed/V5a-txg52uA?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<div id="calls_to_action">
	<div class="wrap">
		<div class="columns three">
			<div class="column product wow zoomIn">
				<div class="post_thumbnail" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/calls_to_action-product-img-1.jpg);"></div>
				
				<div class="description"><div class="layer_2">
					<h3 class="title">Carbide Runner Sharpeners</h3>
					
					<?php /*<div class="entry">
						<p>Get maximum control on all surfaces with a fresh edge every time.</p>
					</div>*/ ?>
					
					<p><a href="/product-category/tools/carbide-runner-sharpners/" class="button">Learn More</a></p>
				</div></div>
			</div>
			
			<div class="column product wow zoomIn" data-wow-delay="200ms">
				<div class="post_thumbnail" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/calls_to_action-product-img-2.jpg);"></div>
				
				<div class="description"><div class="layer_2">
					<h3 class="title">Carbide Stud Sharpeners</h3>
					
					<?php /*<div class="entry">
						<p> Increased traction means a better grip and a safer ride.</p>
					</div>*/ ?>
					
					<p><a href="/product/carbide-stud-sharpening-tool/" class="button">Learn More</a></p>
				</div></div>
			</div>
			
			<div class="column product wow zoomIn" data-wow-delay="400ms">
				<div class="post_thumbnail" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/calls_to_action-product-img-3.jpg);"></div>
				
				<div class="description"><div class="layer_2">
					<h3 class="title">BiteHarder Accessories</h3>
					
					<?php /*<div class="entry">
						<p>Look good and ride smooth with products from our store.</p>
					</div>*/ ?>
					
					<p><a href="/product-category/accessories/" class="button">Learn More</a></p>
				</div></div>
			</div>
			
			<div class="cleared"></div>
		</div>
	</div>
</div>

<div id="the_biteharder_design">
	<img src="<?php echo get_template_directory_uri(); ?>/images/the_biteharder_design-img.jpg" alt="" />
	
	<div class="title_block wow fadeIn">
		<h2 class="section_title">The BiteHarder Design</h2>
		
		<p class="sub_title">Providing the Best Edge in the Industry</p>
	</div>
	
	<div class="feature advantedge_technology">
		<div class="line_container">
			<div class="point wow zoomIn"></div> <div class="line wow extendLeft" data-wow-delay="300ms"></div>
		</div>
		
		<div class="text wow fadeIn" data-wow-delay="800ms">
			<h3>Advant<span class="alt_color">Edge</span> Technology</h3>
			
			<p>Providing superior handling, performance, and longevity</p>
		</div>
	</div>
	
	<div class="feature superior_quality_industrial_diamonds">
		<div class="line_container right">
			<div class="point wow zoomIn" data-wow-delay="400ms"></div> <div class="line wow extendRight" data-wow-delay="700ms"></div>
		</div>
		
		<div class="text wow fadeIn" data-wow-delay="1200ms">
			<h3>CNC Machined</h3>
			
			<p>From high quality stainless steel to precision tolerances</p>
		</div>
	</div>
	
	<div class="feature extreme_strength_universal_shank">
		<div class="line_container">
			<div class="point wow zoomIn" data-wow-delay="800ms"></div> <div class="line wow extendLeft" data-wow-delay="1100ms"></div>
		</div>
		
		<div class="text wow fadeIn" data-wow-delay="1600ms">
			<h3>Universal Shank</h3>
			
			<p>&frac14; inch diameter shank fits all drill chucks and grinders</p>
		</div>
	</div>
	
	<div class="feature high_rpms">
		<div class="line_container right">
			<div class="point wow zoomIn" data-wow-delay="1200ms"></div> <div class="line wow extendRight" data-wow-delay="1500ms"></div>
		</div>
		
		<div class="text wow fadeIn" data-wow-delay="2000ms">
			<h3>Industrial Diamonds</h3>
			
			<p>Sharpen your carbide edges in seconds while mounted  to your sled</p>
		</div>
	</div>
</div>

<?php get_template_part('template_part-testimonials'); ?>

<div id="product_features">
	<div class="wrap">
		<div class="columns three">
			<div class="column">
				<div class="backdrop"></div> 
				
				<div class="layer_2">
					<p class="icon_row"><i class="icon-the_best_carbide_edge_on_snow"></i></p>
					
					<h3>The Best Carbide Edge On Snow</h3>

					<p>We call this our AdvantEdge technology and it allows you to put a better edge than what you get from the carbide manufacturer.  Our tools work with all manufacturers brands of carbide runners and studs.</p>
					
					<?php /*<p class="button_row"><a href="/benefits/" class="button"><?php _e('Learn More'); ?></a></p>*/ ?>
				</div>
			</div>
			
			<div class="column">
				<div class="backdrop"></div>
				
				<div class="layer_2">
					<p class="icon_row"><i class="icon-improved_handling_and_control"></i></p>
					
					<h3>Improved Handling and Control</h3>

					<p>Experience all the performance your snowmobile has to offer every time you head out on the trail. No more compromises or frustrations that come with dull runners or studs, just consistent performance in all conditions.</p>
					
					<?php /*<p class="button_row"><a href="/benefits/" class="button"><?php _e('Learn More'); ?></a></p>*/ ?>
				</div>
			</div>
			
			<div class="column">
				<div class="backdrop"></div>
				
				<div class="layer_2">
					<p class="icon_row"><i class="icon-more_precision"></i></p>
					
					<h3>More precision through the corners</h3>
					
					<p>Corner like you never have before with more confidence and stability.</p>
					
					<?php /*<p class="button_row"><a href="/benefits/" class="button"><?php _e('Learn More'); ?></a></p>*/ ?>
				</div>
			</div>
			
			<div class="column">
				<div class="backdrop"></div>
				
				<div class="layer_2">
					<p class="icon_row"><i class="icon-convenience"></i></p>
					
					<h3>Convenience</h3>
					
					<p>Sharpen your edges in less than a minute without the need to remove them from your snowmobile.</p>
					
					<?php /*<p class="button_row"><a href="/benefits/" class="button"><?php _e('Learn More'); ?></a></p>*/ ?>
				</div>
			</div>
			
			<div class="column">
				<div class="backdrop"></div>
				
				<div class="layer_2">
					<p class="icon_row"><i class="icon-safer_riding"></i></p>
					
					<h3>Safer Riding</h3>
					
					<p>Sharp traction product using BITEHARDER’S technology provides better handing and improved control keeping you and your family safe in all conditions.</p>
					
					<?php /*<p class="button_row"><a href="/benefits/" class="button"><?php _e('Learn More'); ?></a></p>*/ ?>
				</div>
			</div>
			
			<div class="column">
				<div class="backdrop"></div>
				
				<div class="layer_2">
					<p class="icon_row"><i class="icon-best_in_handling_and_performance"></i></p>
					
					<h3>Repeatable Traction Performance (RTP)</h3>
					
					<p>Have you lost your edge? For improved performance/control and the safest ride on snow, stay sharp with BITEHARDER.</p>
					
					<?php /*<p class="button_row"><a href="/benefits/" class="button"><?php _e('Learn More'); ?></a></p>*/ ?>
				</div>
			</div>
			
			<div class="cleared"></div>
		</div>
	</div>
</div>

<div id="the_perfect_edge_every_time">
	<div class="wrap">
		<h2 class="section_title wow fadeInUpSmall">The Perfect Edge Every Time.</h2>
		
		<p><a href="<?php echo home_url(); ?>/store/" class="button wow fadeInUpSmall" data-wow-delay="400ms">View Our Products</a></p>
	</div>
</div>

<?php $blog = new WP_Query( array('posts_per_page' => 2) ); ?>
<?php if ( $blog->have_posts() ) :  ?>
<div id="blog">
	<div class="wrap">
		<h2 class="section_title"><span>BiteHarder Blog</span></h2>
		
		<div class="columns two">
<?php while ( $blog->have_posts() ) : $blog->the_post(); ?>
			<div class="column post wow zoomIn">
<?php if ( has_post_thumbnail() ) { ?>
				<div class="post_thumbnail" style="background-image: url(<?php echo current( wp_get_attachment_image_src( get_post_thumbnail_ID(), 'blog_post') ); ?>);"></div>
<?php } ?>
				
				<div class="description"><div class="layer_2">
					<h3 class="title"><?php the_title(); ?></h3>
					
					<div class="entry">
						<?php the_excerpt(); ?>
					</div>
					
					<p><a href="<?php the_permalink(); ?>" class="button"><?php _e('Learn More', SPM_TEXT_DOMAIN); ?></a></p>
				</div></div>
			</div>
<?php endwhile; ?>
			
			<div class="cleared"></div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php get_footer(); ?>