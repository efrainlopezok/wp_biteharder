<?php /* Template Name: Landing Page */ ?>

<?php get_header(); ?>

<div class="wrap_outer">

<div class="wrap main">
	
<?php get_template_part('template_part-breadcrumbs'); ?>
	
	<div id="main">
		<div id="content" class="full_width">
			<div class="landing_banner">
				<div class="layer_2">
					<div class="text">
						<h3>Get the First Ride Experience
						<span>Everytime</span></h3>
						
						<p><a href="" class="button">Learn More</a></p>
					</div>
				</div>
				
				<div class="landing_form"><div class="layer_2">
					<h3>Ask Us A
					<span>Question?</span></h3>
					
					<?php echo do_shortcode('[contact-form-7 id="465" title="Landing Page"]'); ?>
				</div></div>
			</div>
			
			<div class="connect_sharpen_ride">
				<h3>It's Simple.
				<span>Connect. Sharpen. Ride!</span></h3>
				
				<div class="landing_steps">	
					<div class="step one">
						<img src="<?php echo get_template_directory_uri(); ?>/images/connect_sharpen_ride-landing_steps-step-one-img.jpg" alt="" width="220" height="220" />
						
						<span>1</span>
					</div>
					
					<div class="step two">
						<img src="<?php echo get_template_directory_uri(); ?>/images/connect_sharpen_ride-landing_steps-step-two-img.jpg" alt="" width="220" height="220" />
						
						<span>2</span>
					</div>
					
					<div class="step three">
						<img src="<?php echo get_template_directory_uri(); ?>/images/connect_sharpen_ride-landing_steps-step-three-img.jpg" alt="" width="220" height="220" />
						
						<span>3</span>
					</div>
				</div>

				<div class="cleared"></div>
			</div>
			
			<div class="columns two reverse sharpening">
				<div class="column">
					<h3>Sharpen Your Carbide Runners In Minutes with a Handheld Drill</h3>
					
					<p>Riding your sled with dull runners is like driving a Corvette with bald tires. Get the performance your snowmobile is capable of every time you ride. No more darting and tracking that reduce performance and put your safety at risk. Enjoying the benefits of sharp runners takes minutes, and only costs you pennies per sharpening!</p>
					
					<p><a href="<?php echo get_template_directory_uri(); ?>/store/?add-to-cart=52" class="button">Add to Cart</a></p>
				</div>
				
				<div class="column">
					<div class="video_container">
						<iframe src="https://www.youtube.com/embed/V5a-txg52uA" allowfullscreen></iframe>
					</div>
				</div>
				
				<div class="cleared"></div>
			</div>
			
			<div class="columns two">
				<div class="column">
					<ul class="asterisk_bullets">
						<li>
							<h3>The Best Carbide Edge on Snow</h3>
							
							<p>We call this our AdvantEdge technology and it allows you to put a better edge than what you get from the carbide manufacturer.
						</li>
						<li>
							<h3>Improved Handling and Control</h3>
							
							<p>Experience all the performance your snowmobile has to offer every time you head out on the trail. No more compromises or frustrations that come with dull runners or studs, just consistent performance in all conditions.</p>
						</li>
						<li>
							<h3>More Precision Through the Corners</h3>
							
							<p>Corner like you never have before with more confidence and stability.</p>
						</li>
					</ul>
				</div>
				
				<div class="column">
					<ul class="asterisk_bullets">
						<li>
							<h3>Convenience</h3>
							
							<p>Sharpen your edges in less than a minute without the need to remove them from your snowmobile</p>
						</li>
						<li>
							<h3>Safer Riding</h3>
							
							<p>Sharp traction product using Biteharder’s technology provides better handing and improved control keeping you and your family safe in all conditions.</p>
						</li>
						<li>
							<h3>Repeatable Traction Performance (RTP)</h3>
							
							<p>Have you lost your edge? For improved performance/control and the safest ride on snow, stay sharp with Biteharder</p>
						</li>
					</ul>
				</div>
				
				<div class="cleared"></div>
			</div>
			
			<p><a href="<?php echo get_template_directory_uri(); ?>/store/?add-to-cart=52"><img src="<?php echo get_template_directory_uri(); ?>/images/add_to_cart_banner-img.jpg" alt="" class="add_to_cart_banner" /></a>
		</div>
	</div>
</div>

</div>

<?php get_footer(); ?>