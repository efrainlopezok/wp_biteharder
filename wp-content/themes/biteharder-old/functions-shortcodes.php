<?php

// Add shortcode support to text widgets
add_filter('widget_text', 'do_shortcode');


function spm_shortcode_get_template_directory_uri() {
	return get_template_directory_uri();
}
add_shortcode('get-template-directory-uri', 'spm_shortcode_get_template_directory_uri');


function spm_shortcode_list_child_pages() {
	global $post;
	
	return wp_list_pages( array('child_of' => $post->ID, 'title_li' => false) );
}
add_shortcode('list-child-pages', 'spm_shortcode_list_child_pages');


function spm_partners_logos() {
	ob_start();
?>
<div id="logos">
	<div class="columns four">
		<div class="column wow fadeInUpSmall">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo yamaha"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="50ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo supertrax"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="100ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo snowtech"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="150ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo snowmobileusa"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="200ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo snowgoer"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="250ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo snowgoerca"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="300ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo snowest"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="350ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo slickers"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="400ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo snoriders"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="450ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo sledfreak"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="500ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo magazine"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="550ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo quebecrider"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="600ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo modz"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="650ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo nhassoc"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="700ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo monteiges"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="750ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo mich"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="800ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo mackstuds"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="850ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo intrepid"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="900ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo hkpowersports"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="950ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo hcs"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="1000ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo fcmq"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="1050ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo dootalks"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="1100ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo amsnow"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="1150ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo one_thirty_nine_designs"></div>
		</div>
		
		<div class="column wow fadeInUpSmall" data-wow-delay="1200ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo kimpex"></div>
		</div>
		<div class="column wow fadeInUpSmall" data-wow-delay="1250ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo ofsc"></div>
		</div>
		<div class="column wow fadeInUpSmall" data-wow-delay="1300ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo qualipieces"></div>
		</div>
		<div class="column wow fadeInUpSmall" data-wow-delay="1350ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo studboy"></div>
		</div>
		<div class="column wow fadeInUpSmall" data-wow-delay="1400ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo woodys"></div>
		</div>
		<div class="column wow fadeInUpSmall" data-wow-delay="1450ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo wps"></div>
		</div>
<div class="column wow fadeInUpSmall" data-wow-delay="1400ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo nbfsc"></div>
		</div>
		<div class="column wow fadeInUpSmall" data-wow-delay="1450ms">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos-sizer-img.png" alt="" class="sizer" />
			<div class="logo paladin-1"></div>
		</div>
		
		<div class="cleared"></div>
	</div>
</div>
</div>
<?php 
	$return = ob_get_clean();
	
	return $return;
}
add_shortcode('partners-logos', 'spm_partners_logos');