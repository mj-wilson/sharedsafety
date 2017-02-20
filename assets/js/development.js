jQuery(function( $ ) {
	
  if ( $( 'body.home' ).length ) {
    $( '#mini_logo a' ).click( function () {
    		event.preventDefault();
    		$( 'html, body' ).animate({ scrollTop: 0 }, "fast" );
  	});	
  }

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
  
  if ( $( '.page-template-template-practice' ).length ) {
      $(window).on( "load resize scroll" , function( e ) {
      var scrolledPastIntro = $( '.step_panel' ).offset().top - 10;
        var windscroll = $( window ).scrollTop();
        
        if ( windscroll > scrolledPastIntro ) {
            $( '#secondary' ).addClass( 'showme' );
        } else {
            $( '#secondary' ).removeClass( 'showme' );
            $( '.step_panel' ).removeClass( 'active' );
        }
        $( '.step_panel' ).each( function() {
          var panelOffset = $( this ).offset().top - 10;
            if ( windscroll > panelOffset ) {
                $( '.step_panel' ).removeClass( 'active' );
                $( this ).addClass( 'active' );
            }
        });
    });
  
  }
	
  $( '.open_modal' ).click( function () {
  		$( this ).next( '.modal' ).show();
	});	
	$( '.close-modal' ).click( function () {
  		$( '.modal' ).hide();
	});	
  $( '.open-bp-overview' ).click( function () {
      $( '.grid-overlay' ).addClass( 'open' );
  }); 
  $( '.close-overlay' ).click( function () {
      $( '.grid-overlay' ).removeClass( 'open' );
  }); 


});

