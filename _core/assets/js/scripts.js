'use strict';

var
	lastScrollTop  = window.scrollY,
	ticking        = false,
	entriesTops    = {},
	menu           = document.getElementById( 'site-menu' );

function getEntriesTops() {
	var entries = document.getElementsByClassName( 'entry' );

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
