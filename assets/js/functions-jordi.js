$(document).ready(function(){
	if ($(window).width() < 1340 ) {
		$('#main.create #container-size').css('padding-bottom', $('#main.create .add_steps_drag').outerHeight()+20);
	}
	$(window).resize(function(){
		if ($(window).width() < 1340 ) {
			$('#main.create #container-size').css('padding-bottom', $('#main.create .add_steps_drag').outerHeight()+20);
		} else {
			$('#main.create #container-size').css('padding-bottom', 0);
		}
	})
	$('#container-size').css('margin-top', $('header').height());
	$('.draggable').draggable({ revert: "invalid" });
	$('.droppable').droppable({
		accept: ".draggable",
		activeClass: "dragging",
		hoverClass: "drop-hover",
		tolerance: "intersect",
		drop: function( event, ui ) {
			$(this).html($('.ui-draggable-dragging').html());
			$('.ui-draggable-dragging').hide();
		}
	})
});

