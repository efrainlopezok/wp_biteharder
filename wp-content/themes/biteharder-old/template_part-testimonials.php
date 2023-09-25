<?php $testimonials = new WP_Query( array('post_type' => 'testimonial') ); ?>
<?php if ( $testimonials->have_posts() ) : ?>
<div id="testimonials">
	<div class="wrap">
		<div id="testimonials_slider" class="cycle-slideshow"
			data-cycle-timeout="10000"
			data-cycle-slides="> .slide"
			data-cycle-auto-height="container"
		>
			<div class="quote_container">
				<img src="<?php echo get_template_directory_uri(); ?>/images/testimonials-quote_container-sizer-img.png" alt="" class="sizer" />
				
				<div class="layer_2">
					<div class="quote before"></div>
					<div class="quote after"></div>
				</div>
			</div>
			
<?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
			<div class="slide">
				
				<?php the_content(); ?>
				
				<p class="signed"><?php the_title(); ?></p>
			</div>
<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
