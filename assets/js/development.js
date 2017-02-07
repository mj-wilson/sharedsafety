jQuery(function( $ ) {
	$( '.back_to_top' ).click( function () {
  		event.preventDefault();
  		$( 'html, body' ).animate({ scrollTop: 0 }, "fast" );

	});	
	$( '.nav-toggle-button' ).click( function () {
  		$( this ).parent().toggleClass( 'open' );

	});	
	$( '.slides_holder' ).slick({
	  	prevArrow: '#slick_arrow_left',
	  	nextArrow: '#slick_arrow_right',
	});
	$( '.link_to_section' ).click( function () {
  		var target = '#' + $( this ).attr( 'data-target' );
		$( 'html,body' ).animate({
		   scrollTop: $( target ).offset().top
		});
	});	
});

