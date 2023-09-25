(function($) {
	
	/** Touchscreen compatibility for dropdown menus */
	if ( typeof(window.ontouchstart) != 'undefined' ) {
		$('.touchscreen_compatible > li > a').click(function() {
			var allLis = $('.touchscreen_compatible > li');
			var currentLi = $(this).parent();
			
			// Follow the link if it is already selected or has no child menu
			if ( currentLi.hasClass('touchscreen_selected') || !currentLi.children('ul').length ) {
				return;
			} else {
				allLis.removeClass('touchscreen_selected');
				currentLi.addClass('touchscreen_selected');
			}
			
			return false;
		});
	}
	
	
	/** Add special classes to header menu */
	$('.menu ul').parent('li').addClass('parent');
	$('.menu ul li:last-child').addClass('last');
	
	
	/** Mobile device menu */
	$pageContainer = $('body > .layer_2');
	$responsiveMenu = $('#responsive_menu');
	
	$('#responsive_menu_button').click(function(event) {
		event.preventDefault();
		
		if ( !$responsiveMenu.attr('data-extended') ) {
			$responsiveMenu.show();		
			$pageContainer.addClass('menu_revealed');
			
			setTimeout(function() {
				$responsiveMenu.attr('data-extended', true);
			}, 200);
		}
	});
	
	$pageContainer.click(function(event) {
		if ( $responsiveMenu.attr('data-extended') ) {
			event.preventDefault();
			
			$pageContainer.removeClass('menu_revealed');
			$responsiveMenu.attr('data-extended', null);
			
			setTimeout(function() {
				$responsiveMenu.hide();
			}, 200);
		}
	});
	
	
	/** Initialize WOW.js */
	new WOW({
		mobile: false
	}).init();
	
	
	/** Pop-up Search Field */
	$('#search').click(function(event) {
		event.preventDefault();
		
		$('#search_form').show().find('input').focus();
	});
	
	$('#search_form').focusout(function() {
		$(this).hide();
	});
	
	
	/** Front Page Slider */
	/*var bannerText = $('#banner_text');
	
	$('#banner').on('cycle-before', function() {
		bannerText
			.removeClass()
			.addClass('fadeOutDownSmall animated');
	});
	
	$('#banner').on('cycle-after', function() {
		bannerText
			.removeClass()
			.addClass('fadeInUpSmall animated')
			.css('visibility', 'visible')
			.find('.layer_2').html( $('.banner_text_source', this).html() );
	});*/
	
	
	/** Continuously Scaling Text */
	$("#banner_text").fitText({fontContainerRatio: 27/1360, referenceElement: $('#banner > .wrap')});
	$("#the_biteharder_design").fitText({fontContainerRatio: 18/1400});
	
	
	/** Equal height columns for #product_features */
	$(window).on('load resize', function() {
		var $elements = $('#product_features .column > .layer_2');
		
		$elements.css('min-height', ''); // remove prevous min-height property so it doesn't affect the next height measurement
		if ( $elements.parent().css('float') == 'none' ) return; // don't set min-height at all if currently one column per row
		
		var elementHeights = $elements.map(function() {
			return $(this).height();
		});
		
		var maxHeight = Math.max.apply(null, elementHeights);
		
		$elements.css('min-height', maxHeight);
	});
	
	/** Equal height columns for #blog */
	$(window).on('load resize', function() {
		var $elements = $('#blog .post .description > .layer_2');
		
		$elements.css('min-height', ''); // remove prevous min-height property so it doesn't affect the next height measurement
		if ( $elements.parent().parent().css('float') == 'none' ) return; // don't set min-height at all if currently one column per row
		
		var elementHeights = $elements.map(function() {
			return $(this).height();
		});
		
		var maxHeight = Math.max.apply(null, elementHeights);
		
		$elements.css('min-height', maxHeight);
	});	
	
	
	/** Dialog Pop Up for Products */
	$('#show').click(function() {
		$('#how_to_measure_your_coiling_spacing').show();
	});
	
	$('#exit').click(function() {
		$('#how_to_measure_your_coiling_spacing').hide();
	});
	
})(jQuery);