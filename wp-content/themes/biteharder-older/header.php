<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="google-site-verification" content="CK1gh6f21CaCzAiscdT8Ucri_w3MrZtqHz5kDeXeO_U" />

<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?><?php if ( is_front_page() && get_bloginfo('description') ) { ?> - <?php bloginfo('description'); } ?></title>

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php if ( is_singular() && pings_open( get_queried_object() ) ) { ?><link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"><?php } ?>

<!--wp_head()-->
<?php wp_head(); ?>
<!--end wp_head()-->

<script src="https://use.typekit.net/ito2qbi.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37511942-1', 'auto');
  ga('send', 'pageview');

</script>
<script type='text/javascript'>
 var _springMetq = _springMetq || [];
 _springMetq.push(['id', '4c79404766']);
 (
  function(){
   var s = document.createElement('script');
   s.type = 'text/javascript';
   s.async = true;
   s.src = ('https:' == document.location.protocol ? 'https://d3rmnwi2tssrfx.cloudfront.net/a.js' : 'http://static.springmetrics.com/a.js');
   var x = document.getElementsByTagName('script')[0];
   x.parentNode.insertBefore(s, x);
  }
 )();
</script>
</head>
<body <?php body_class(); ?>>

<nav id="responsive_menu">
<?php if ( has_nav_menu('header') ) { ?>
	<?php wp_nav_menu( array('theme_location' => 'header', 'container' => false) ); ?>
<?php } else { ?>
	<ul class="menu">
		<?php wp_list_pages( array('title_li' => false) ); ?>
	</ul>
<?php } ?>
	
<?php if ( has_nav_menu('upper') ) { ?>
	<?php wp_nav_menu( array('theme_location' => 'upper', 'container' => false) ); ?>
<?php }  ?>
</nav>

<!--BEGIN UPPER HEADER-->
<div id="upper">
	<div class="wrap">
		
		<div class="right">
			<!--<div class="lang">
				 ENG-CAN
			</div>-->
						<div class="lang"><a href="/in-the-news/"><i>Blog</i></a></div>

			<span class="slash" <ul="">
					<li class="facebook"><a href="https://www.facebook.com/Biteharder/" target="_blank" title="Facebook"><i class="icon-facebook"></i></a></li>
					<li class="youtube"><a href="https://www.youtube.com/channel/UCKM7CMfk7cdEnXqc2JAMEcQ" target="_blank" title="YouTube"><i class="icon-youtube"></i></a></li>
					<li class="twitter"><a href="https://twitter.com/biteharder" target="_blank" title="Twitter"><i class="icon-twitter"></i></a></li>
					<li class="instagram"><a href="https://www.instagram.com/bitehardertool" target="_blank" title="Instagram"><i class="icon-instagram"></i></a></li>
					<li class="linkedin"><a href="https://www.linkedin.com/company/biteharder" target="_blank" title="Linkedin"><i class="icon-linkedin"></i></a></li>
					<li class="snapchat"><a href="https://www.snapchat.com/add/biteharder" target="_blank" title="SnapChat"><i class="icon-snapchat"></i></a></li>
					<?php if ( in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins'))) ) { ?>
		<?php $count = WC()->cart->cart_contents_count; ?>
		<a class="cart<?php if ($count == 0) { ?> empty<?php } ?>" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart', SPM_TEXT_DOMAIN); ?>"><?php _e('Cart', SPM_TEXT_DOMAIN); ?> <span><?php echo $count > 0 ? sprintf( _n('%d item', '%d items', $count, SPM_TEXT_DOMAIN), $count ) : __('Empty', SPM_TEXT_DOMAIN); ?></span></a>
<?php } ?>
<!--<li class="icon"><a id="search" href=""><i class="icon-search"></i></a></li>-->
				
</span>
<?php if ( has_nav_menu('upper') ) { ?>
			<?php wp_nav_menu( array('theme_location' => 'upper', 'container' => false, 'menu_class' => 'menu touchscreen_compatible') ); ?>
<?php } ?>
			

			<div class="cleared"></div>
		</div>
		
		<div class="cleared"></div>
	</div>
</div>
<!--END UPPER HEADER-->

<div class="layer_2">

<header id="header">
	<div class="wrap">
		<a href="#" id="responsive_menu_button"><?php _e('Menu', SPM_TEXT_DOMAIN); ?></a>
		
		<div class="logo"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></div>
		
<?php if ( has_nav_menu('header') ) { ?>
		<nav id="nav">
			<ul class="menu touchscreen_compatible">
				<?php wp_nav_menu( array('theme_location' => 'header', 'container' => false, 'items_wrap' => '%3$s') ); ?>
				
				<li class="icon"><a id="search" href=""><i class="icon-search"></i></a></li>
			</ul>
		</nav>
<?php } ?>
		
<?php if ( in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins'))) ) { ?>
		<?php $count = WC()->cart->cart_contents_count; ?>
		<a class="cart<?php if ($count == 0) { ?> empty<?php } ?>" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart', SPM_TEXT_DOMAIN); ?>"><?php _e('Cart', SPM_TEXT_DOMAIN); ?> <span><?php echo $count > 0 ? sprintf( _n('%d item', '%d items', $count, SPM_TEXT_DOMAIN), $count ) : __('Empty', SPM_TEXT_DOMAIN); ?></span></a>
<?php } ?>
		
		<form id="search_form" action="<?php echo home_url('/'); ?>" method="get">
			<input type="search" id="s" name="s" value="" placeholder="Enter search keywords" />
		</form>
		
		<div class="cleared"></div>
	</div>
	<div id="slogan2">
			<div class="tt">
				Get&nbsp;&nbsp;<span>FREE SHIPPING</span>&nbsp;&nbsp;on all orders over $90.00.&nbsp;&nbsp; <div class="button"><a href="/store/">Shop Now</a>
			</div>
	</div>
	<div class="cleared"></div>
</header>
