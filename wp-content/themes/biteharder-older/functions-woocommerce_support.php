<?php

add_theme_support('woocommerce');

// Change responsive breakpoint
function spm_style_smallscreen_breakpoint() {
	return '767px';
}
add_filter('woocommerce_style_smallscreen_breakpoint', 'spm_style_smallscreen_breakpoint');

// Don't use global wrapper
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

// Move breadcrumbs to immediately after #content opening div
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
//add_action( 'woocommerce_before_single_product', 'woocommerce_breadcrumb', 20 );

// Adjust product featured image size
add_filter( 'single_product_large_thumbnail_size', 'spm_product_large_thumbnail_size' );
function spm_product_large_thumbnail_size() {
	return array(750, 624);
}

// Adjust product thumbnail column count
add_filter( 'woocommerce_product_thumbnails_columns', 'spm_product_thumbnails_columns' );
function spm_product_thumbnails_columns() {
	return 5;
}

// Remove title and price from content area. Each will be displayed in #title_bar instead
//add_action( 'woocommerce_show_page_title', 'spm_show_page_title');
function spm_show_page_title() {
	return false;
}

// Remove meta (specifically, the category, which is already displayed in the nearby breadcrumbs)
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// Remove sale flash from product catalog
//remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );

// Remove sale flash from single product template
//remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );


// Move thumbnail in product catalog below title
//remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
//add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 5 );

// Remove "Additional Information" from tabs. Custom product attributes will be displayed in sidebar.
//add_filter( 'woocommerce_product_tabs', 'spm_product_tabs' );
function spm_product_tabs( $tabs = array() ) {
	unset( $tabs['additional_information'] );
	
	return $tabs;
}

// Remove "Related Products"
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// Add product attributes to product catalog
//add_action('woocommerce_after_shop_loop_item_title', 'spm_woocommerce_template_loop_attributes', 20 );
function spm_woocommerce_template_loop_attributes() {
	woocommerce_get_template( '/loop/attributes.php' );
}


// Find custom attribute value by name. Used in shop/title-bar.php
function spm_get_attribute_value_by_name($attributes, $name) {
	global $product;
	
	if ( !is_array($attributes) || !$name ) return;
	
	foreach ($attributes as $attribute) {
		
		if ( strcasecmp($attribute['name'], $name ) == 0 ) { // Case insensitive match
			//echo $attribute['name'].' = '.$attribute['value'].'<br />';
			if ( $attribute['is_taxonomy'] ) {
				$values = woocommerce_get_product_terms( $product->id, $attribute['name'], 'names' );
				$values = apply_filters( 'woocommerce_attribute', wptexturize( implode( ', ', $values ) ), $attribute, $values );
			} else {
				$values = array_map( 'trim', explode( '|', $attribute['value'] ) );
				$values = apply_filters( 'woocommerce_attribute',  wptexturize( implode( ', ', $values ) ), $attribute, $values );
			}
			
			return $values;
		}
	}
	
	return false;
}


// AJAX support for cart link in header
function spm_add_to_header_cart_fragments($fragments) {
	
	$count = WC()->cart->cart_contents_count;
	
	ob_start();
?>
	<a class="cart<?php if ($count == 0) { ?> empty<?php } ?>" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart', SPM_TEXT_DOMAIN); ?>"><?php _e('Cart', SPM_TEXT_DOMAIN); ?> <span><?php echo $count > 0 ? sprintf( _n('%d item', '%d items', $count, SPM_TEXT_DOMAIN), $count ) : __('Empty', SPM_TEXT_DOMAIN); ?></span></a>
<?php
	$fragments['#header .cart'] = ob_get_clean();
	
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'spm_add_to_header_cart_fragments' );


add_filter( 'wc_product_sku_enabled', '__return_false' );
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
 
    unset( $tabs['additional_information'] );   // Remove the additional information tab
 
    return $tabs;
}