/* global screenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

( function( $ ) {
	
	$("a[href=#menu-expand]").click(function(e) {
     $(".main-menu").toggleClass("menu-open");
      e.preventDefault();
      
   });
	// /**
	//  * @summary Add or remove ARIA attributes.
	//  * Uses jQuery's width() function to determine the size of the window and add
	//  * the default ARIA attributes for the menu toggle if it's visible.
	//  * @since Twenty Fifteen 1.1
	//  */
	// function onResizeARIA() {
	// 	if ( 955 > $window.width() ) {
	// 		button.attr( 'aria-expanded', 'false' );
	// 		secondary.attr( 'aria-expanded', 'false' );
	// 		button.attr( 'aria-controls', 'secondary' );
	// 	} else {
	// 		button.removeAttr( 'aria-expanded' );
	// 		secondary.removeAttr( 'aria-expanded' );
	// 		button.removeAttr( 'aria-controls' );
	// 	}
	// }

	// Sidebar scrolling.
	// function resize() {
	// 	windowWidth = $window.width();

	// 	if ( 955 > windowWidth ) {
	// 		top = bottom = false;
	// 		$sidebar.removeAttr( 'style' );
	// 	}
	// }

	// function scroll() {
	// 	var windowPos = $window.scrollTop();

	// 	if ( 955 > windowWidth ) {
	// 		return;
	// 	}

	// 	sidebarHeight = $sidebar.height();
	// 	windowHeight  = $window.height();
	// 	bodyHeight    = $body.height();

	// 	if ( sidebarHeight + adminbarOffset > windowHeight ) {
	// 		if ( windowPos > lastWindowPos ) {
	// 			if ( top ) {
	// 				top = false;
	// 				topOffset = ( $sidebar.offset().top > 0 ) ? $sidebar.offset().top - adminbarOffset : 0;
	// 				$sidebar.attr( 'style', 'top: ' + topOffset + 'px;' );
	// 			} else if ( ! bottom && windowPos + windowHeight > sidebarHeight + $sidebar.offset().top && sidebarHeight + adminbarOffset < bodyHeight ) {
	// 				bottom = true;
	// 				$sidebar.attr( 'style', 'position: fixed; bottom: 0;' );
	// 			}
	// 		} else if ( windowPos < lastWindowPos ) {
	// 			if ( bottom ) {
	// 				bottom = false;
	// 				topOffset = ( $sidebar.offset().top > 0 ) ? $sidebar.offset().top - adminbarOffset : 0;
	// 				$sidebar.attr( 'style', 'top: ' + topOffset + 'px;' );
	// 			} else if ( ! top && windowPos + adminbarOffset < $sidebar.offset().top ) {
	// 				top = true;
	// 				$sidebar.attr( 'style', 'position: fixed;' );
	// 			}
	// 		} else {
	// 			top = bottom = false;
	// 			topOffset = ( $sidebar.offset().top > 0 ) ? $sidebar.offset().top - adminbarOffset : 0;
	// 			$sidebar.attr( 'style', 'top: ' + topOffset + 'px;' );
	// 		}
	// 	} else if ( ! top ) {
	// 		top = true;
	// 		$sidebar.attr( 'style', 'position: fixed;' );
	// 	}

	// 	lastWindowPos = windowPos;
	// }

	// function resizeAndScroll() {
	// 	resize();
	// 	scroll();
	// }

	$( document ).ready( function() {
		// $body          = $( document.body );
		// $window        = $( window );
		// $sidebar       = $( '#sidebar' ).first();
		// adminbarOffset = $body.is( '.admin-bar' ) ? $( '#wpadminbar' ).height() : 0;

		// $window
		// 	.on( 'scroll.twentyfifteen', scroll )
		// 	.on( 'load.twentyfifteen', onResizeARIA )
		// 	.on( 'resize.twentyfifteen', function() {
		// 		clearTimeout( resizeTimer );
		// 		resizeTimer = setTimeout( resizeAndScroll, 500 );
		// 		onResizeARIA();
		// 	} );
		

		// resizeAndScroll();

		// for ( var i = 1; i < 6; i++ ) {
		// 	setTimeout( resizeAndScroll, 100 * i );
		// }
	} );

} )( jQuery );
