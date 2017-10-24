jQuery( function() {

	//Scrolling
		jQuery( 'a[href*=#]' ).on( 'click', function( e ) {
				e.preventDefault();

				jQuery.scrollTo( jQuery( this ).attr( 'href' ), 600 );
			} );

} );