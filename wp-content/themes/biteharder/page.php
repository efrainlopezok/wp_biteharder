<?php get_header(); ?>

<div class="wrap_outer">

<div class="wrap main">
	
<?php get_template_part('template_part-breadcrumbs'); ?>
	
	<div id="main">
		
<?php get_template_part('template_part-banner_inside_page'); ?>
		
		<div id="content" class="full_width">
<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php $sub_heading = get_post_meta( get_the_ID(), '_sub_heading', true ); ?>
<?php if ($sub_heading) { ?>
				<p class="sub_heading"><?php echo $sub_heading; ?></p>
<?php } ?>
				
				<?php the_content(); ?>
				
				<div class="cleared"></div>
			</article>
<?php endwhile; ?>
		</div>
	</div>
</div>

</div>

<?php get_footer(); ?>