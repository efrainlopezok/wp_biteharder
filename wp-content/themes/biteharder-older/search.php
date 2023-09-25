<?php get_header(); ?>

<div class="wrap_outer">

<div class="wrap main">
	
<?php get_template_part('template_part-breadcrumbs'); ?>
	
	<div id="main">
		
<?php get_template_part('template_part-banner_inside_page'); ?>
		
		<div id="content" class="full_width">
			<h2 class="page_title"><span><?php printf( __('Search: &quot;%s&quot;', SPM_TEXT_DOMAIN), get_search_query() ); ?></span></h2>
			
<?php if ( have_posts() ) : ?>
<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="postmetadata">
					<p class="date"><?php the_time('l, M j, Y'); ?></p>
				</div>
				
				<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				
				<?php the_excerpt(); ?>
				
				<p><a href="<?php the_permalink(); ?>" class="button">Read More</a></p>
			</article>
<?php endwhile; ?>
<?php else : ?>
			<article>
				<h3 class="title"><?php _e('No Results'); ?></h3>
				
				<?php _e('Nothing found for these search terms.', SPM_TEXT_DOMAIN); ?>
			</article>
<?php endif; ?>
			
<?php get_template_part('template-part-pager'); ?>
			
		</div>
	</div>
</div>

</div>

<?php get_footer(); ?>