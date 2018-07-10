jQuery(document).ready( function($) {
	
	/* Menu Trigger Wrap */
	$( '#menu-trigger-wrap' ).on( 'click', function(e) {
		e.preventDefault();
		$( '#header .open_menu' ).toggleClass( 'active' );
		if ( $( '#header .open_menu' ).hasClass( 'active' ) ) {
			$( '.mobile-menu-dropdown' ).stop().slideDown( 400 );
		} else {
			$( '.mobile-menu-dropdown' ).stop().slideUp( 400 );
		}
	} );

	/* Wrap Submit Button */
	if ( $( '.gform_wrapper' ).length ) {
		$( '.gform_wrapper input[type="submit"]' ).wrap( '<div class="submit-wrap"></div>' );
		$(document).bind( 'gform_post_render', function() {
			$( '.gform_wrapper input[type="submit"]' ).each( function() {
				if ( $(this).is( ':visible' ) ) {
					$(this).wrap( '<div class="submit-wrap"></div>' );
				}
			} );
			$( '.gform_wrapper input[type="submit"]' ).css( { 'display' : 'block !important' } );
		} );
	}

	/* Smooth Scroll To Top */
	$( 'footer .up-arrow' ).on( 'click', function( e ) {
		e.preventDefault();
		$( 'html, body' ).animate( {
	        scrollTop: $( '#wrap' ).offset().top
	    }, 1000 );
	} );

	/* Switch Wrap */
	if ( $( '.slider-line' ).length ) {
		$( '.slider-line li a' ).on( 'click', function( e ) {
			e.preventDefault();
			if ( !$(this).parent().hasClass( 'active' ) ) {
				var wrap = $(this).data( 'wrap' );
				$( '.slider-line li.active' ).removeClass( 'active' );
				$(this).parent().addClass( 'active' );
				$.when( $( '.content-wrap.active' ).fadeOut( 300 ) ).done( function() {
					$( '.content-wrap[data-wrap="' + wrap + '"]' ).fadeIn( 400 ).addClass( 'active' );
				} );
			} else {
				return false;
			}
		} );
	}

	/* Switch Wrap By Pagination  */
	if ( $( '.pagination' ).length ) {
		$( '.pagination .left-page, .pagination .right-page' ).on( 'click', function( e ) {
			e.preventDefault();
			var activeSlide = $( '.slider-line li.active' );
				activeSlideNum = activeSlide.find( 'a' ).data( 'slide' );

			/* Determine Which Slide To Change To */
			if ( $(this).hasClass( 'right-page' ) ) {
				var newSlideNum = activeSlideNum == $( '#slideCount' ).data( 'total-slides' ) ? 0 : activeSlideNum + 1;
			} else {
				var newSlideNum = activeSlideNum == 0 ? $( '#slideCount' ).data( 'total-slides' ) : activeSlideNum - 1;
			}

			/* Switch Slide */
			$.when( $( '.content-wrap.active' ).fadeOut( 300 ) ).done( function() {
				$(this).removeClass( '.active' );
				$( '.slider-line li.active' ).removeClass( 'active' );
				$( '.slider-line li a[data-slide="' + newSlideNum + '"]' ).parent().addClass( 'active' );
				$( '.content-wrap[data-wrap="slide-' + newSlideNum + '"]' ).fadeIn( 400 ).addClass( 'active' );
			} );
		} );
	}

	/* Window Resize Functions */
	$(window).resize( function() {

		/* Fix Location Items */
		if ( $(window).width() >= 768 ) {
			if ( $( '.location-list' ).length ) {
				var t = 0;
				var t_elem;
				
				$( '.location-list li' ).css( { 'height' : '' } );
				$( '.location-list li' ).each( function() {
				    $this = $(this);

				    if ( $this.outerHeight() > t ) {
				        t_elem = this;
				        t = $this.outerHeight();
				    }
				});
				$( '.location-list li' ).css( { 'height' : t } );
			}
		} else {
			if ( $( '.location-list' ).length ) {
				$( '.location-list li' ).css( { 'height' : '' } );
			}
		}

	} );

	/* Fix Location Items */
	if ( $( '.location-list' ).length && $(window).width() >= 768 ) {
		var t = 0;
		var t_elem;

		$( '.location-list li' ).each( function () {
		    $this = $(this);

		    if ( $this.outerHeight() > t ) {
		        t_elem = this;
		        t = $this.outerHeight();
		    }
		});

		$( '.location-list li' ).css( { 'height' : t } );
	}

	/* Faq Switch */
	if ( $( '.faq-list' ).length ) {
		$( '.faq-list li .opener, .faq-list .faq-title' ).on( 'click', function( e ) {
			e.preventDefault();
			$(this).parent().toggleClass( 'active' );
			if ( $(this).parent().hasClass( 'active' ) ) {
				$(this).parent().find( '.inner-wrap' ).slideDown( 200 );
			} else {
				$(this).parent().find( '.inner-wrap' ).slideUp( 200 );
			}
		} );
	}

	/* Client Slider */
	if ( $( '.services-ctas' ).length ) {
		$( '.pagination.services-pagination a' ).on( 'click', function( e ) {
			e.preventDefault();
			var totalSlides = parseInt( $( '.services-ctas' ).data( 'total-slides' ) - 1 ),
				activeSlide = $( '.client-wrap.active' ).first(),
				activeSlideNum = activeSlide.data( 'client-slide' );

			/* Determine Which Slide To Change To */
			if ( $(this).hasClass( 'right-page' ) ) {
				var newSlideNum = activeSlideNum == totalSlides ? 0 : activeSlideNum + 1;
			} else {
				var newSlideNum = activeSlideNum == 0 ? totalSlides : activeSlideNum - 1;
			}

			/* Switch Slide */
			$.when( $( '.client-wrap.active' ).fadeOut( 300 ) ).done( function() {
				$(this).removeClass( 'active' );
				$( '.client-wrap[data-client-slide="' + newSlideNum + '"]' ).fadeIn( 400 ).addClass( 'active' );
			} );
		} );
	}

	/* Open Form Based On URL */
	if ( window.location.href.indexOf( "form" ) > -1 ) {
		var form = getUrlParameter( 'form' );
		$( '.slider-line li a[data-slide="' + form + '"]' ).trigger( 'click' );
	}

	/* Get URL Parameter */
	function getUrlParameter(sParam) {
	    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
	        sURLVariables = sPageURL.split('&'),
	        sParameterName,
	        i;

	    for (i = 0; i < sURLVariables.length; i++) {
	        sParameterName = sURLVariables[i].split('=');

	        if (sParameterName[0] === sParam) {
	            return sParameterName[1] === undefined ? true : sParameterName[1];
	        }
	    }
	};
	
} );