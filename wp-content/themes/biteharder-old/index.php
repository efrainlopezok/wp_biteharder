<?php get_header(); ?>

<div class="wrap_outer">

<div class="wrap main">
	
<?php get_template_part('template_part-breadcrumbs'); ?>
	
	<div id="main">
		
<?php get_template_part('template_part-banner_inside_page'); ?>
		
		<div id="content">
<?php if ( is_category() ) { ?>
			<h2 class="page_title"><?php single_cat_title(); ?></h2>
<?php } ?>
			
<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h3 class="title blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php if ( has_post_thumbnail() ) { ?>
				<div class="post_thumbnail" style="background-image: url(<?php echo current( wp_get_attachment_image_src( get_post_thumbnail_ID(), 'blog_post') ); ?>);"></div>
<?php } ?>
			
				<?php the_excerpt(); ?>
				<p><a href="<?php the_permalink(); ?>" class="button"><?php _e('Read More', SPM_TEXT_DOMAIN); ?></a></p
			</article>
			<hr />
<?php endwhile; ?>
			
<?php get_template_part('template_part-pager'); ?>
			
		</div>
		
		<?php get_sidebar('blog'); ?>
		
		<div class="cleared"></div>
	</div>
</div>

</div>

<?php get_footer(); ?>