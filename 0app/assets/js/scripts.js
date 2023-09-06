window.addEventListener( 'load', function() {
	'use strict';

	var
		lastScrollTop  = window.scrollY,
		ticking        = false,
		entriesTops    = {},
		menu           = document.getElementById( 'site-menu' );

	// First get list of navigable sections with their `.offsetTop` values.

		function getEntriesTops() {
			var entries = document.querySelectorAll( '.intro, .entry' );

			for ( var i = 0; i < entries.length; i++ ) {
				entriesTops[ entries[ i ].offsetTop + entries[ i ].offsetHeight ] = entries[ i ].id;
			}
		}

		getEntriesTops();

		window.addEventListener( 'resize', function( e ) {
			if ( ! ticking ) {
				window.requestAnimationFrame( function() {
					getEntriesTops();
					ticking = false;
				} );
				ticking = true;
			}
		} );

	// Now we can apply `.is-active` class on navigation links when scrolling.

		function checkScroll() {
			var
				scrolledY = window.scrollY,
				id        = false;

			for ( var y in entriesTops ) {
				if ( scrolledY < y ) {
					id = entriesTops[ y ];
					break
				}
			}

			if ( id ) {
				var activeMenuItem = menu.querySelector( '.is-active' );
				if ( activeMenuItem ) {
					activeMenuItem.classList.remove( 'is-active' );
				}
				menu.querySelector( '[href="#' + id + '"]' ).classList.add( 'is-active' );
			}
		}
		checkScroll();

		window.addEventListener( 'scroll', function( e ) {
			if ( ! ticking ) {
				window.requestAnimationFrame( function() {
					checkScroll();
					ticking = false;
				} );
				ticking = true;
			}
		} );

} );
