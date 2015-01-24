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
    } else {
      $('.add_steps_drag').removeClass("aside");
      $('.container').css("margin-left", 20);
    };

  $(window).resize(function(){
    var new_container_margin = ($(window).width()-1364)/2;
    if($(window).width() > 1340){
      $('#main').addClass('aside-visible');
      $('.container').css("margin-left", new_container_margin);
      $('.secondary-nav').css("padding-left", new_container_margin)
      $('.add_steps_drag').addClass("aside");
    } else {
    	$('#main').removeClass('aside-visible');
      $('.add_steps_drag').removeClass("aside");
      $('.container').css("margin-left", 20);
    };
  });

  if($(window).width() < 768){
    $('.container').css("margin-left", 0);};

  $(window).resize(function(){
    if($(window).width() < 768){
    $('.container').css("margin-left", 0);};
  });

  //Mantain aspect ratio

	var a_r = 1.1143;
	var onging_module_width = $('.module-ongoing').width(); 
	$('.module-ongoing').css("height", onging_module_width / a_r);

	$(window).resize(function(){
		var a_r = 1.1143;
		var onging_module_width = $('.module-ongoing').width(); 
		$('.module-ongoing').css("height", onging_module_width / a_r);
	});


  if ($(window).width() < 768) {
  var offers_module_width = $('.module_offers').width(); 
  $('.module_offers').css("height", offers_module_width / a_r);

  $(window).resize(function(){
    var a_r = 1.1143;
    var offers_module_width = $('.module_offers').width(); 
    $('.module_offers').css("height", offers_module_width / a_r);
  });
  
  };

  //Body height
/*
  var body_height = ($(window).height());
  $('body').css("height", body_height);

  $(window).resize(function(){
    var body_height = ($(window).height());
    $('body').css("height", body_height);
  });
*/

  //Panning trips display content_trip

  $('.trips-summary').click(function(){
    $(this).next('.trip-steps').toggleClass('hide');
  
  });

  //Display cards related content
  var showContent = function(){
    var target = $(this).data('target');
    $(target).toggleClass('hide');
  }; 

  var toggleHeight = function(){
    var newHeight = $(this).parent().parent().parent().data('children-new-height');
    if ( $('.trip-card').height() != newHeight ) {
      $('.trip-card').css('height', newHeight+'px');  
    } else {
      $('.trip-card').css('height', tripCardHeight);
    }
    /*
    if( $('.trip-card').height == '50' ){
      $('trip-card').css('height', 'auto');
    };*/
  };

  $('.trip-card').click(showContent);

  var tripCardHeight = $('.trip-card').height();
  $('.trip-card').click(toggleHeight);
  


  //Aside create draggable width/height

  var width = $('.droppable').width();
  var height = $('.droppable').height(); 

  $('.module-steps').css("width", width);
  $('.module-steps').css("height", height);

  $(window).resize(function() {
    var width = $('.droppable').width();
    var height = $('.droppable').height(); 

    $('.module-steps').css("width", width);
    $('.module-steps').css("height", height);
  });


  //Drag and drop


  $("#droppable").droppable({
    accept: '#draggable',
    tolerance: "fit",
    activeClass: "ui-state-highlight"
  });

  $("#draggable").draggable({
    snap: '#droppable',
    revert: 'false',
    zIndex: 9999,
    cursor: "move",
    delay: 200,
    opacity: .45,
    refreshPositions: true,
    revertDuration: 1000,
    drop: function(ev, ui) {
      $(this).addClass('dropped');
    }
    
  });

});


    



// Explore second nav 

  var content_area_width = ($(window).width() - 340)/2;

if ($(window).width() > 1340) {
  $('li.ideas').css("width",content_area_width);
  $('li.offers').css("width",content_area_width);
}

$(window).resize(function() {
  if ($(window).width() > 1340) {
  $('li.ideas').css("width",content_area_width);
  $('li.offers').css("width",content_area_width);
}

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