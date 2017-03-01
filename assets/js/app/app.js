jQuery(function( $ ) {
	
 if ( $( 'body.page-template-template-practice' ).length ) {
    $( '.page-header' ).click( function () {
    		$( 'html, body' ).animate({ scrollTop: 0 }, "fast" );
  	});	
  }

	$( '.nav-toggle-button' ).click( function () {
  		$( this ).parent().toggleClass( 'open' );

	});	

	$( '.slides_holder' ).slick({
	  	prevArrow: '#slick_arrow_left',
	  	nextArrow: '#slick_arrow_right',
      adaptiveHeight: true,
      infinite: false,
      dots: true
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
      $( 'body' ).addClass( 'modal_open' );
	});	
	$( '.close-modal' ).click( function () {
  		$( '.modal' ).hide();
      $( 'body' ).removeClass( 'modal_open' );
	});	
  $( '.open-bp-overview' ).click( function () {
      $( '.grid-overlay' ).addClass( 'open' );
  }); 
  $( '.close-overlay' ).click( function () {
      $( '.grid-overlay' ).removeClass( 'open' );
  }); 
  
  
  if ( document.URL.indexOf( 'bw=1' ) !== -1 )  {
    $( '.page-wrapper' ).removeClass( 'scene_element--fadeinright' ).addClass( 'scene_element--fadeinleft' );
  }

  if ( $( 'body.page-template-template-contact' ).length ) {
    $( '#headerform' ).validate();
  }
  if ( document.URL.indexOf( 'key=' ) !== -1 )  {
    $( '.signup_form_thanks' ).show();
  }
  
  $( '.breadcrumb' ).toggle( document.URL.indexOf( 'principle=' ) !== -1 );

  if ( document.URL.indexOf( 'principle=' ) !== -1 )  {
    
    function getParameterByName( name ) {
        var match = RegExp( '[?&]' + name + '=([^&]*)' ).exec( window.location.search );
        return match && decodeURIComponent( match[1].replace( /\+/g, ' ' ) );
    }
    var target = '/' + getParameterByName('principle'); 
    $( '.breadcrumb a' ).attr( 'href', target );

  }



});

