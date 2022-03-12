/* Open "Theme Anatomy" details when image map area is clicked. */
( function() {
	'use strict';

	window.addEventListener( 'click', function( e ) {
		if (
			'AREA' == e.target.tagName
			&& e.target.getAttribute( 'href' )
		) {
			document.querySelector( e.target.getAttribute( 'href' ) ).setAttribute( 'open', true );
		}
	} );
} )();
