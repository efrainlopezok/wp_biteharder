<?php get_header(); ?>

<div class="wrap_outer">

<div class="wrap main">
	
<?php get_template_part('template_part-breadcrumbs'); ?>
	
	<div id="main">
		
<?php get_template_part('template_part-banner_inside_page'); ?>
		
		<div id="content">
<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2 class="page_title"><?php the_title(); ?></h2>
				
				<p class="postmetadata"><?php the_time('l M j, Y'); ?></p>
				
				<?php the_content(); ?>
				
				<div class="cleared"></div>
			</article>
<?php endwhile; ?>
		</div>
		
<?php get_sidebar(); ?>
		
		<div class="cleared"></div>
	</div>
</div>

</div>

<?php get_footer(); ?>