$( document ).ready( function() {
	if ( $(window).width() < 992 && $(window).width() > 767 ) {
		$( '#main.create #container-size' ).css( 'padding-bottom', $( '.add_steps_drag' ).outerHeight() + 20 );
	}
	$( window).resize(function(){
		if ( $(window).width() < 992 && $(window).width() > 767 ) {
			$( '#main.create #container-size' ).css( 'padding-bottom', $( '.add_steps_drag' ).outerHeight() + 20 );
		} else {
			$( '#main.create #container-size' ).css( 'padding-bottom', 0);
		}
	})
	$( '#container-size' ).css( 'margin-top', $( 'header' ).height() );
	$( '.draggable').draggable( { 
		revert: "invalid" 
	} );
	$( '.droppable').droppable( {
		accept: ".draggable",
		activeClass: "dragging",
		hoverClass: "drop-hover",
		tolerance: "intersect",
		drop: function( event, ui ) {
			var col = $( this ).data( 'col' );
			var row = $( this ).data( 'row' );
			console.log('col:'+col+', row:'+row);
			$( this ).next().html( $( this ).html() );
			$( this ).html( $( '.ui-draggable-dragging' ).html() );
			$( '.ui-draggable-dragging' ).hide();
			$(this).addClass('no-border');
		}
	})
});

$( document ).ready( function() {
	if ( $( window ).width() < 769) {
		$('.step-title').click(function(){
			$('.create-step-content').addClass('hidden-xs');
			$('.step-title').children('p').removeClass('hidden');
			$(this).next('.create-step-content').removeClass('hidden-xs');
			$('.step-title p').addClass('hidden');
		})
	}

	$(window).resize(function(){
		if ( $( window ).width() < 769) {
		$('.step-title').click(function(){
			$('.create-step-content').addClass('hidden-xs');
			$('.step-title').children('p').removeClass('hidden');
			$(this).next('.create-step-content').removeClass('hidden-xs');
			$('.step-title p').addClass('hidden');
		})
	}
	})
});