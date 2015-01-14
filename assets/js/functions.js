$(document).ready(function(){
  
  $('#chat-trigger').click(function(){
    $('#main').toggleClass('chat-visible');
  });

  var new_container_margin = ($(window).width()-1364)/2;
  if($(window).width() > 1340){
      $('.container').css("margin-left", new_container_margin);
      $('#main').addClass('chat-visible');
      $('.secondary-nav').css("padding-left", new_container_margin);
      $('.secondary-nav').css("padding-right", new_container_margin);
    };

  $(window).resize(function(){
    var new_container_margin = ($(window).width()-1364)/2;
    if($(window).width() > 1340){
      $('#main').addClass('chat-visible');
      $('.container').css("margin-left", new_container_margin);
      $('.secondary-nav').css("padding-left", new_container_margin)
    } else {
    	$('#main').removeClass('chat-visible');
    };
  });

  //Mantain aspect ratio

	var a_r = 1.1143;
	var width = $('.module').width(); 
	$('.module').css("height", width / a_r);

	$(window).resize(function(){
		var a_r = 1.1143;
		var width = $('.module').width(); 
		$('.module').css("height", width / a_r);
	});

  
});





/*
function height(object1, object2) {
  if($(object1).height() > $(object2).height) {} 
}
///////
object1 = #main ;   object2 = 'body'
///////
height('#main', 'body')

}

*/