$(document).ready(function(){

  $("#datepicker").datepicker({
      format: "dd/mm/yyyy",
      todayBtn: true,
      clearBtn: true
    });
  
  $('#aside-trigger').click(function(){
    $('#main').toggleClass('aside-visible');
  });

  //Aside height 
  var aside_height = $(window).height()-100;
  var chat_aside_height = $(window).height()-222;
  if($(window).width() > 768){
    $('.aside').css("height",aside_height);
    $('.chat .panel-body').css("height",chat_aside_height);
  };

  $(window).resize(function(){
  var aside_height = $(window).height()-100;
  if($(window).width() > 768){
    $('.aside').css("height",aside_height);
    $('.chat .panel-body').css("height",chat_aside_height);
  } else {
    $('.aside').css("height","auto");
  };    
  });



  var new_container_margin_right = ($(window).width()-1364)/2+340;
  var new_container_margin_left = ($(window).width()-1364)/2;
  var container_width = $('container').width();
  var container_margin = container_width/2;

  if($(window).width() > 1340){
      $('.container').css("margin-left", new_container_margin_left);
      $('#main').addClass('aside-visible');
      $('.secondary-nav').css("padding-left", new_container_margin_left);
      $('.secondary-nav').css("padding-right", new_container_margin_right);
    } else {
      $('.add_steps_drag').removeClass("aside");
      $('.container').css("margin-left", 20);
      $('.secondary-nav').css("padding-left", container_margin);
      $('.secondary-nav').css("padding-right", container_margin);
    };

  $(window).resize(function(){
    var new_container_margin_left = ($(window).width()-1364)/2;
    if($(window).width() > 1340){
      $('#main').addClass('aside-visible');
      $('.container').css("margin-left", new_container_margin_left);
      $('.secondary-nav').css("padding-left", new_container_margin_left);
      $('.secondary-nav').css("padding-right", new_container_margin_right);
      $('.add_steps_drag').addClass("aside");
    } else {
    	$('#main').removeClass('aside-visible');
      $('.add_steps_drag').removeClass("aside");
      $('.container').css("margin-left", 20);
      $('.secondary-nav').css("padding-left", container_margin);
      $('.secondary-nav').css("padding-right", container_margin);
    };
  });

  if($(window).width() < 768){
    $('.container').css("margin-left", 0);};

  $(window).resize(function(){
    if($(window).width() < 768){
    $('.container').css("margin-left", 0);};
  });

  //Mantain aspect ratio
  if ($(window).width()>768) {
	var a_r = 1.1143;
  var top_height = $('#nearby nav').height();
	var onging_module_width = $('.module-ongoing').width(); 
	$('.module-ongoing').css("height", onging_module_width / a_r);
  $('#nearby .content').css("height", onging_module_width / a_r - top_height);
  $('.chat-module').css("height","100%");
  };

	$(window).resize(function(){
  if ($(window).width()>768) {
		var a_r = 1.1143;
		var onging_module_width = $('.module-ongoing').width(); 
		$('.module-ongoing').css("height", onging_module_width / a_r);
    $('#nearby .content').css("height", onging_module_width / a_r - top_height);
    $('.chat-module').css("height","100%");
  } else {
    $('.module-ongoing').css(onging_module_width / a_r);
    $('.chat-module').css('module-ongoing');
  };
	});


  if ($(window).width()>768) {
  var offers_module_width = $('.module_offers').width(); 
  $('.module_offers').css("height", offers_module_width / a_r);
  };

  $(window).resize(function(){
    if ($(window).width()>768) {
    var a_r = 1.1143;
    var offers_module_width = $('.module_offers').width(); 
    $('.module_offers').css("height", offers_module_width / a_r);
  };
  });
  


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
  if ($(window).width() > 768) {
  var width = $('.droppable').width();
  var height = $('.droppable').height(); 

  $('.module-steps').css("width", width);
  $('.module-steps').css("height", height);

  };

  $(window).resize(function() {
  if ($(window).width() > 768) {
    var width = $('.droppable').width();
    var height = $('.droppable').height(); 

    $('.module-steps').css("width", width);
    $('.module-steps').css("height", height);
   } else {
    $('.module-steps').css("width", "auto");
    $('.module-steps').css("height", "auto");
   };
  });


  //Drag and drop


  $(".droppable").droppable({
    accept: '.draggable',
    tolerance: "fit",
    activeClass: "ui-state-highlight"
  });

  $(".draggable").draggable({
    snap: '.droppable',
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


  //Profile
if ($(window).width() > 1200) {
  var window_height = $(window).height();
  var window_width = $(window).width();
  var container_past_trips = window_width - 325;
  var a_r_map = 2.05;
  $('.profile-data').css("height",window_height-50);
  $('.past-trips').css("width",container_past_trips);
  $('.past-trips').css("height",container_past_trips / a_r_map);
  } else { 
    $('.past-trips').css("width","auto");};

  $(window).resize(function() {
  if ($(window).width() > 1200) {
    var window_height = $(window).height();
    var window_width = $(window).width();
    var container_past_trips = window_width - 325;
    var a_r_map = 2.05;
    $('.profile-data').css("height",window_height-50)
    $('.past-trips').css("width",container_past_trips);
    $('.past-trips').css("height",container_past_trips / a_r_map);
  } else { 
    $('.past-trips').css("width","auto");
    };
  });

  //Friends
  if ($(window).width() > 1200) {
    var friends_ul_height = $(window).height() - 600;
  }else{
    var friends_ul_height = $('.past-trips').height();
  };

    var friend_height = 100;
    var num_friends = parseInt(friends_ul_height / friend_height);
    $('.first_page,.second_page').attr('data-friends',num_friends);

  $(window).resize(function() {
    if ($(window).width() > 1200) {
      var friends_ul_height = ($(window).height()- 600);
    }else{
    var friends_ul_height = $('.past-trips').height();
    };
      var new_num_friends = parseInt(friends_ul_height / friend_height);
      $('.first_page,.second_page').attr('data-friends',new_num_friends);
  });

  

  $('#page_22').click(function(){
    event.preventDefault();
      $('.second_page').removeClass('hidden');
      $('.first_page').addClass('hidden');
      $('#page_1').removeClass('active');
      $('#page_22').addClass('active');
  });
  $('#page_1').click(function(){
    event.preventDefault();
      $('.second_page').addClass('hidden');
      $('.first_page').removeClass('hidden');
      $('#page_22').removeClass('active');
      $('#page_1').addClass('active');

  });


  $('#edit-profile-btn').click(function(){
    $('.user-info').addClass('hidden');
    $('.edit_profile').removeClass('hidden');

    if ($(window).width() > 1200) {
    $('.user-info').addClass('hidden');
    $('#friends').addClass('hidden');
    };
  
  })

  $('.end-editing').click(function(){
    if ($(window).width() > 1200) {
    $('.user-info').removeClass('hidden');
    $('.#friends').removeClass('hidden');
    };
    $('.user-info').removeClass('hidden');
    $('.edit_profile').addClass('hidden');
  })


  //Responsive profile

  if ($(window).width() < 1200) {
    $('.profile-data').removeClass('pull-right');
  }else{
    $('.profile-data').addClass('pull-right');
  };

  $(window).resize(function() {
    if ($(window).width() < 1200) {
    $('.profile-data').removeClass('pull-right');
  }else{
    $('.profile-data').addClass('pull-right');
  }
  });

  //secondary-menu  

  if ($(window).width() < 1200) {
    $('.secondary-menu').removeClass('hidden');
    $('.map').addClass('hidden');  
  }else{
    $('#friends').removeClass('col-sm-6');
  };

//tabs mobile

  if ($(window).width() > 767) {
    $('.tab-trips').removeClass('active');
  };

  $(window).resize(function() {
    if ($(window).width() > 767) {
    $('.tab-trips').removeClass('active');
  }else{
    $('.tab-trips').addClass('active');
  };
  });


   if ($(window).width() < 769) {
    $('#friends').addClass('hide');
    $('.tab-trips').click(function(){
      $('#friends').addClass('hide');
      $('.past-trips-content').removeClass('hide');
      $('.tab-trips').addClass('active');
      $('.tab-friends').removeClass('active');
    });
    $('.tab-friends').click(function(){
      $('.past-trips-content').addClass('hide');
      $('#friends').removeClass('hide');
      $('.tab-trips').removeClass('active');
      $('.tab-friends').addClass('active');
    });
  };

  $(window).resize(function() {
    if ($(window).width() < 769) {
    $('#friends').addClass('hide');
    $('.tab-trips').click(function(){
      $('#friends').addClass('hide');
      $('.past-trips-content').removeClass('hide');
      $('.tab-trips').addClass('active');
      $('.tab-friends').removeClass('active');
    });
    $('.tab-friends').click(function(){
      $('.past-trips-content').addClass('hide');
      $('#friends').removeClass('hide');
      $('.tab-trips').removeClass('active');
      $('.tab-friends').addClass('active');
    });
  }else{
    $('#friends').removeClass('hide');
  };
  });



  $(window).resize(function() {
    if ($(window).width() < 1200) {
    $('.secondary-menu').removeClass('hidden');
    $('.map').addClass('hidden');
    $('#friends').addClass('col-sm-6');
    }else{
      $('.secondary-menu').addClass('hidden');
      $('.map').removeClass('hidden');
      $('#friends').removeClass('col-sm-6');
    };
  });

});

//Explore menu xs

if($(window).width() < 768) {
  $('.ideas').parent().addClass('secondary-menu');
  $('.ideas').parent().addClass('clearfix');
  $('.ideas').parent().removeClass('secondary-nav');
  $('.module-steps').removeClass('draggable');
};
   
$(window).resize(function() {
    if($(window).width() < 768) {
    $('.ideas').parent().addClass('secondary-menu');
    $('.ideas').parent().addClass('clearfix');
    $('.ideas').parent().removeClass('secondary-nav');
    $('.module-steps').removeClass('draggable');
  } else {
    $('.module-steps').addClass('draggable');
    $('.ideas').parent().removeClass('secondary-menu');
    $('.ideas').parent().removeClass('clearfix');
    $('.ideas').parent().addClass('secondary-nav');
  };
});

$('#delay a').click(function(){
  $(this).closest('#itinerary').find('.expand').css('bottom', '-43px');
});

$('#bring form').submit(function(e){
  e.preventDefault();
  if ($('#bring form input').val() === "pene") {
    var value = $('#bring form input').val();
    console.log(value);
  }
});



// Explore second nav 
/*
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
*/


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