$(document).ready(function(){
  
  $('#aside-trigger').click(function(){
    $('#main').toggleClass('aside-visible');
  });

  var new_container_margin = ($(window).width()-1364)/2;
  if($(window).width() > 1340){
      $('.container').css("margin-left", new_container_margin);
      $('#main').addClass('aside-visible');
      $('.secondary-nav').css("padding-left", new_container_margin);
      $('.secondary-nav').css("padding-right", new_container_margin);
    };

  $(window).resize(function(){
    var new_container_margin = ($(window).width()-1364)/2;
    if($(window).width() > 1340){
      $('#main').addClass('aside-visible');
      $('.container').css("margin-left", new_container_margin);
      $('.secondary-nav').css("padding-left", new_container_margin)
    } else {
    	$('#main').removeClass('aside-visible');
    };
  });

  //Mantain aspect ratio

	var a_r = 1.1143;
	var width = $('.module-ongoing').width(); 
	$('.module-ongoing').css("height", width / a_r);

	$(window).resize(function(){
		var a_r = 1.1143;
		var width = $('.module-ongoing').width(); 
		$('.module-ongoing').css("height", width / a_r);
	});

  //Body height

  var body_height = ($(window).height());
  $('body').css("height", body_height);

  $(window).resize(function(){
    var body_height = ($(window).height());
    $('body').css("height", body_height);
  });


  //Panning trips display content_trip

  $('.trips-summary').click(function(){
    $('.trip-steps').toggleClass('content-visible');
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