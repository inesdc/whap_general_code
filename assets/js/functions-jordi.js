$( document ).ready( function() {
	if ( $( window ).width() < 1340 ) {
		$( '#main.create #container-size' ).css( 'padding-bottom', $( '.add_steps_drag' ).outerHeight() + 20 );
	}
	$( window).resize(function(){
		if ($(window).width() < 1340 ) {
			$( '#main.create #container-size' ).css( 'padding-bottom', $( '.add_steps_drag' ).outerHeight() + 20 );
		} else {
			$( '#main.create #container-size' ).css( 'padding-bottom', 0);
		}
	})
	$( '#container-size').css( 'margin-top', $( 'header' ).height() );
	$( '.draggable').draggable( { revert: "invalid" } );
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
		}
	})
});

