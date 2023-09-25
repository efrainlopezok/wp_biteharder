	<div id="banner_inside_page"<?php if ( has_post_thumbnail() && is_page() ) { ?> style="background-image: url(<?php echo current( wp_get_attachment_image_src( get_post_thumbnail_ID(), 'banner_inside_page') ); ?>);"<?php } ?>><div class="layer_2">
		<?php /*<img src="<?php echo get_template_directory_uri(); ?>/images/banner-inside_page-sizer-img.png" alt="" class="sizer" />*/ ?>
		
		<div id="banner_text" class="fadeInUpSmall animated">
<?php $pre_title = get_post_meta( get_the_ID(), '_pre_title', true ); ?>
<?php if ($pre_title) { ?>
			<p class="pre_title"><?php echo htmlspecialchars($pre_title); ?></p>
<?php } ?>
				
			<h3 class="title">
<?php if ( is_post_type_archive() ) { ?>
				<?php $obj = get_post_type_object( get_post_type() ); ?>
				<?php echo $obj->labels->name; ?>
<?php } else if ( is_category() ) { ?>
				<?php single_cat_title(); ?>
<?php } else if ( is_home() || is_archive() || is_single() ) { ?>
				<?php _e('In the News', SPM_TEXT_DOMAIN); ?>
<?php } else if ( is_search() ) { ?>
				<?php _e('Search Results', SPM_TEXT_DOMAIN); ?>
<?php } else if ( is_404() ) { ?>
				<?php _e('Page Not Found', SPM_TEXT_DOMAIN); ?>
<?php } else { ?>
				<?php $alternate_title = get_post_meta($post->ID, '_alternate_title', true); ?>
				<?php if ($alternate_title) { echo $alternate_title; } else { the_title(); } ?>
<?php } ?>
			</h3>
		</div>
	</div></div>
