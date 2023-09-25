<?php get_header(); ?>

<div class="wrap_outer">

<div class="wrap main">
	
<?php get_template_part('template_part-breadcrumbs'); ?>
	
	<div id="main">
		
<?php get_template_part('template_part-banner_inside_page'); ?>
		
		<div id="content" class="full_width">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2 class="page_title"><span><?php _e('404 - Page Not Found', SPM_TEXT_DOMAIN); ?></span></h2>
				
				<p><?php _e('There was no page found at this URL.', SPM_TEXT_DOMAIN); ?></p>
			</article>
		</div>
	</div>
</div>

</div>

<?php get_footer(); ?>