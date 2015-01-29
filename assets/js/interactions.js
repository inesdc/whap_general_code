$(document).ready(function(){
	$('#on-time').click(function(){
		$('.ico-on-time').toggleClass('hidden');
	});
	$('#delete').click(function(){
		$('.cita1').addClass('hidden');
		$('.cita2').removeClass('hidden');
	});

$('.checked').attr('checked', true);



});