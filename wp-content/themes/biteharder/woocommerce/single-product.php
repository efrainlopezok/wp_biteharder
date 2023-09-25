<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $product;

get_header('shop'); ?>

<div class="wrap_outer">

<?php if ( have_posts() ) : the_post(); ?>

<div class="wrap main">

<?php get_template_part('template_part-breadcrumbs'); ?>

	<div id="main">

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content) (SPM Note: removed)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action('woocommerce_before_main_content');
	?>

		<div id="content" class="full_width">

			<?php woocommerce_get_template_part( 'content', 'single-product' ); ?>

		</div>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content) (SPM Note: removed)
		 */
		do_action('woocommerce_after_main_content');
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action('woocommerce_sidebar');
	?>

		<div class="cleared"></div>
	</div>
</div>
	
<?php endif; ?>

<?php get_footer('shop'); ?>