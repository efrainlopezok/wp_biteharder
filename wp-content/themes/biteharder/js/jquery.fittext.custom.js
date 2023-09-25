/*global jQuery */
/*!
* FitText.js 1.2-custom
*
* Copyright 2011, Dave Rupert http://daverupert.com
* Released under the WTFPL license
* http://sam.zoy.org/wtfpl/
*
* Date: Thu May 05 14:23:00 2011 -0600
*/

(function($){
	
	$.fn.fitText = function(arg1, arg2) {
		
		// Legacy argument order support
		if ($.type(arg2) === 'object') {
			arg2.compressor = arg1;
			arg1 = arg2;
		}
		
		// Setup options
		var	settings = $.extend({
			'compressor': 1,
			'minFontSize': Number.NEGATIVE_INFINITY,
			'maxFontSize': Number.POSITIVE_INFINITY,
			'referenceElement': $(this),
			'fontContainerRatio': null
		}, arg1);
		
		return this.each(function() {
			if ( !settings.referenceElement.width() ) return; // avoid division by zero below (either because reference element has zero width or user-provided selector returned no elements)
			
			var $targetText = $(this);
			var fontContainerRatio = settings.fontContainerRatio || parseFloat( $targetText.css('font-size') ) / settings.referenceElement.width();
			
			var resizer = function() {
				$targetText.css('font-size', Math.max(Math.min(fontContainerRatio * settings.referenceElement.width() * settings.compressor, parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize))+'px');
			};
			
			// Call once to set.
			resizer();
			
			// Call on resize. Opera debounces their resize by default.
			$(window).on('resize.fittext orientationchange.fittext', resizer);
		});
		
	};
	
})(jQuery);