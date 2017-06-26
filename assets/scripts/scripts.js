jQuery( document ).ready( function ( $ ) {
	'use strict';
	/*
	|--------------------------------------------------------------------------
	| Developer mode
	|--------------------------------------------------------------------------
	|
	| Set to true - it will allow printing in the console. Alsways check for this
	| variables when running tests so you dont forget about certain console.logs.
	| Id needed for development testing this variable should be used.
	|
	*/
	var devMode = function() {
		return true;
	};

	// Disable console.log for production site.
	if ( ! devMode() ) {
		console.log = function() {};
	}

	// Show the advanced mobile menu
	$('.site-header .mobile-menu-button').on('click', function(e) {
		e.preventDefault();
		$('.mobile-menu').toggleClass('is-visible');
	});

	// Add visible element to the list.
	function registerIsVisibleToggle( $element ) {
	    siteOverlayVisibleStack.push($element);
	}

	// Show/hide the site overlay
	function toggleSiteOverlay( element, action ) {
		if ( 'show' === action ) {
			$(element).addClass('is-visible');
		}
		if ( 'hide' === action ) {
			$(element).removeClass('is-visible');
		}
		if ( 'toggle' === action ) {
			$(element).toggleClass('is-visible');
		}
	}

});
