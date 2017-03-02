jQuery(function( $ ) {
	
  // scroll to top of practice page
  if ( $( 'body.page-template-template-practice' ).length ) {
    $( '.page-header' ).click( function () {
    		$( 'html, body' ).animate({ scrollTop: 0 }, "fast" );
  	});	
  }

  // open/close side nav
	$( '.nav-toggle-button' ).click( function () {
  		$( this ).parent().toggleClass( 'open' );

	});	
  
  // initiate home page slider
	$( '.slides_holder' ).slick({
	  	prevArrow: '#slick_arrow_left',
	  	nextArrow: '#slick_arrow_right',
      adaptiveHeight: true,
      infinite: false,
      dots: true
	});
  
  // initiate global scroll to section functionality
	$( '.link_to_section' ).click( function () {
  	var target = '#' + $( this ).attr( 'data-target' );
		$( 'html,body' ).animate({
		   scrollTop: $( target ).offset().top
		});
	});	

  // principle page: highlight active panel  
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
	
  // principle page: open and close example modal  
  $( '.open_modal' ).click( function () {
  		$( this ).next( '.modal' ).show();
      $( 'body' ).addClass( 'modal_open' );
	});	
	$( '.close-modal' ).click( function () {
  		$( '.modal' ).hide();
      $( 'body' ).removeClass( 'modal_open' );
	});	

  // principle page: open and close grid overview  
  $( '.open-bp-overview' ).click( function () {
      $( '.grid-overlay' ).addClass( 'open' );
  }); 
  $( '.close-overlay' ).click( function () {
      $( '.grid-overlay' ).removeClass( 'open' );
  }); 

  // principle page: close and scroll to section when target is on current page  
  $( '.blueprint_grid a' ).click(function(){
    var target = $( this )[0].pathname;
    var pathname = window.location.pathname;
    if ( target == pathname) {
      event.preventDefault();
      var hash = this.hash.substr(1);
      if ( hash ) {
        hash = '#' + hash;
        $( 'html,body' ).animate({
           scrollTop: $( hash ).offset().top
        });
      } else {
          $( 'html, body' ).animate({ scrollTop: 0 });
      }
      $( '.grid-overlay' ).removeClass( 'open' );
    }
  });

  // principle page: reverse animation when going backwards
  if ( document.URL.indexOf( 'bw=1' ) !== -1 )  {
    $( '.page-wrapper' ).removeClass( 'scene_element--fadeinright' ).addClass( 'scene_element--fadeinleft' );
  }

  // contact page: validate email submission form & show thanks after submission
  if ( $( 'body.page-template-template-contact' ).length ) {
    $( '#headerform' ).validate();
  }
  if ( document.URL.indexOf( 'key=' ) !== -1 )  {
    $( '.signup_form_thanks' ).show();
  }

  // contact page: show breadcrumb if clicking from principle & set link href
  $( '.breadcrumb' ).toggle( document.URL.indexOf( 'principle=' ) !== -1 );

  if ( document.URL.indexOf( 'principle=' ) !== -1 )  {
    
    function getParameterByName( name ) {
        var match = RegExp( '[?&]' + name + '=([^&]*)' ).exec( window.location.search );
        return match && decodeURIComponent( match[1].replace( /\+/g, ' ' ) );
    }
    var target = '/' + getParameterByName('principle'); 
    $( '.breadcrumb a' ).attr( 'href', target );

  }

  // principle page: remove animation triggering classes to prevent fixed
  setTimeout(function(){ 
    $( '.page-wrapper' ).removeClass( 'scene_element--fadeinright' ).removeClass( 'scene_element--fadeinleft' );
  }, 3000);


});

