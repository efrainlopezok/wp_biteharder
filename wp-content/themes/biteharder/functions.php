<?php

define('SPM_TEXT_DOMAIN', 'biteharder');

require_once( get_template_directory() .'/functions/filters.php');
require_once( get_template_directory() .'/functions/tags.php');
require_once( get_template_directory() .'/functions/shortcodes.php');
require_once( get_template_directory() .'/functions/widgets.php');
require_once( get_template_directory() .'/functions/admin.php');
require_once( get_template_directory() .'/functions/woocommerce_support.php');


function spm_after_setup_theme() {
	
	// Menus
	register_nav_menus( array(
		'header'	=> __('Header', SPM_TEXT_DOMAIN),
		'footer'	=> __('Footer', SPM_TEXT_DOMAIN)
	) );
	
	// Featured Images
	add_theme_support('post-thumbnails', array('post', 'page', 'front_page_slider', 'product') );
	add_image_size('banner', 9999, 853, true);
	add_image_size('banner_inside_page', 9999, 550, true);
	add_image_size('blog_post', 212, 250, true);
	
	// HTML5 Forms
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
}
add_action('after_setup_theme', 'spm_after_setup_theme');


function spm_init() {
	
	// Custom Post Type for Front Page Slider
	register_post_type( 'front_page_slider', array(
		'labels' => array(
			'name' =>				__( 'Front Page Slider', SPM_TEXT_DOMAIN ),
			'singular_name' =>		__( 'Front Page Slide', SPM_TEXT_DOMAIN ),
			'all_items' =>			__( 'All Front Page Slides', SPM_TEXT_DOMAIN ),
			'add_new_item' =>		__( 'Add New Front Page Slide', SPM_TEXT_DOMAIN ),
			'edit_item' =>			__( 'Edit Front Page Slide', SPM_TEXT_DOMAIN ),
			'new_item' =>			__( 'New Front Page Slide', SPM_TEXT_DOMAIN ),
			'view_item' =>			__( 'View Front Page Slide', SPM_TEXT_DOMAIN ),
			'search_items' =>		__( 'Search Front Page Slides', SPM_TEXT_DOMAIN ),
			'not_found' =>			__( 'No Front Page Slides Found', SPM_TEXT_DOMAIN ),
			'not_found_in_trash' =>	__( 'No Front Page Slides Found in Trash', SPM_TEXT_DOMAIN )
		),
		'show_ui' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
	) );
	
	// Custom Post Type for Testimonials
	register_post_type( 'testimonial', array(
		'labels' => array(
			'name' =>				__( 'Testimonials', SPM_TEXT_DOMAIN ),
			'singular_name' =>		__( 'Testimonial', SPM_TEXT_DOMAIN ),
			'all_items' =>			__( 'All Testimonials', SPM_TEXT_DOMAIN ),
			'add_new_item' =>		__( 'Add New Testimonial', SPM_TEXT_DOMAIN ),
			'edit_item' =>			__( 'Edit Testimonial', SPM_TEXT_DOMAIN ),
			'new_item' =>			__( 'New Testimonial', SPM_TEXT_DOMAIN ),
			'view_item' =>			__( 'View Testimonial', SPM_TEXT_DOMAIN ),
			'search_items' =>		__( 'Search Testimonials', SPM_TEXT_DOMAIN ),
			'not_found' =>			__( 'No Testimonials Found', SPM_TEXT_DOMAIN ),
			'not_found_in_trash' =>	__( 'No Testimonials Found in Trash', SPM_TEXT_DOMAIN )
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'editor'),
		'rewrite' => array('slug' => 'testimonials')
	) );
	
	// Custom Post Type for Announcements
	register_post_type( 'announcement', array(
		'labels' => array(
			'name' =>				__( 'Announcements', SPM_TEXT_DOMAIN ),
			'singular_name' =>		__( 'Announcement', SPM_TEXT_DOMAIN ),
			'all_items' =>			__( 'All Announcements', SPM_TEXT_DOMAIN ),
			'add_new_item' =>		__( 'Add New Announcement', SPM_TEXT_DOMAIN ),
			'edit_item' =>			__( 'Edit Announcement', SPM_TEXT_DOMAIN ),
			'new_item' =>			__( 'New Announcement', SPM_TEXT_DOMAIN ),
			'view_item' =>			__( 'View Announcement', SPM_TEXT_DOMAIN ),
			'search_items' =>		__( 'Search Announcements', SPM_TEXT_DOMAIN ),
			'not_found' =>			__( 'No Announcements Found', SPM_TEXT_DOMAIN ),
			'not_found_in_trash' =>	__( 'No Announcements Found in Trash', SPM_TEXT_DOMAIN )
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title'),
		'rewrite' => array('slug' => 'announcements')
	) );
	
}
add_action('init', 'spm_init');


function spm_widgets_init() {
	
	// Names of sidebars to create
	$sidebar_names = array(
		__('Sidebar', SPM_TEXT_DOMAIN),
		__('Blog', SPM_TEXT_DOMAIN)
	);
	
	foreach ($sidebar_names as $sidebar_name) {
		register_sidebar( array(
			'name' => $sidebar_name,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		) );
	}
	
}
add_action('widgets_init', 'spm_widgets_init');


function spm_enqueue_scripts() {
	//wp_enqueue_style('googleapis-fonts-roboto-condensed', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,400italic,700,700italic');
	wp_enqueue_style( SPM_TEXT_DOMAIN.'-icons', get_template_directory_uri() . '/icons/style.css' );
	wp_enqueue_style( SPM_TEXT_DOMAIN.'-styles', get_stylesheet_uri() );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
	
	wp_enqueue_script(SPM_TEXT_DOMAIN.'-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3');
	wp_script_add_data(SPM_TEXT_DOMAIN.'-html5', 'conditional', 'lt IE 9');
	wp_register_script('jquery-cycle2', get_template_directory_uri().'/js/jquery.cycle2.min.js', array('jquery'), '2.1.6');
	wp_register_script('jquery-fittext', get_template_directory_uri().'/js/jquery.fittext.custom.js', null, '1.2-custom');
	wp_register_script('wow', get_template_directory_uri().'/js/wow.min.js', null, '1.1.2');
	wp_enqueue_script(SPM_TEXT_DOMAIN.'-script', get_template_directory_uri().'/js/functions.js', array('jquery', 'jquery-ui-tabs', 'jquery-cycle2', 'jquery-fittext', 'wow'), null, true);
}
add_action('wp_enqueue_scripts', 'spm_enqueue_scripts');


function spm_comments_callback($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
	<div id="comment-<?php comment_ID(); ?>">
		<p class="comment-author vcard">
			<span class="comment-date"><?php comment_date('F jS, Y'); ?> at <?php comment_time(); ?></span>
			<?php echo get_avatar( $comment, 32); ?> <?php comment_author_link(); ?> posted: <?php if ($comment->comment_approved == '0') { ?> <em>(Awaiting Moderation)</em><?php } ?>
		</p>
		
		<?php comment_text(); ?>
		
		<p class="comment-meta commentmetadata"><?php comment_reply_link(array_merge( $args, array('reply_text' => 'Reply to this Comment', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?><?php edit_comment_link('<em>Edit this Comment</em>', ' | '); ?></p>
	</div>
<?php
}

/* Fix HTTP Error when uploading images */
add_filter( 'wp_image_editors', 'change_graphic_lib' );

function change_graphic_lib($array) {
  return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}

// Remove Ligbox gallery single product
add_action( 'after_setup_theme', 'bbloomer_remove_zoom_lightbox_theme_support', 99 );
function bbloomer_remove_zoom_lightbox_theme_support() { 
   remove_theme_support( 'wc-product-gallery-lightbox' );
}