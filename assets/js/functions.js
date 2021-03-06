$(document).ready(function(){

  $("#datepicker, #datepicker2").datepicker({
    format: "dd/mm/yyyy",
    todayBtn: true,
    clearBtn: true
  });

  $('#ui-datepicker-div').addClass('hide');

  $('#datepicker2').click(function(){
    $('#ui-datepicker-div').toggleClass('hide');
  })


  //Button vote

  $('.btn-vote').click(function(){
    $('.btn-vote').removeClass('btn-vote-active');
    $(this).toggleClass('btn-vote-active');
  })

  $('.option-2 .btn-vote').click(function(){
    $('.map-zone').removeClass('puertosm');
    $('.map-zone').addClass('sitges');
  })

  $('.option-1 .btn-vote').click(function(){
    $('.map-zone').removeClass('sitges');
    $('.map-zone').addClass('puertosm');
  })


  //Button create 

  $('.create-step-content .btn-default').click(function(e){
    e.preventDefault();
    $(this).addClass('btn-clicked');
    $(this).closest('.create-step-content').addClass('hidden-xs');
  })


  ///Aside triger 

  $('#aside-trigger').click(function(){
    $('#main').toggleClass('aside-visible');
  });


  ///Chat 

  if($(window).width() > 768){
  var chat_height = $(window).height()-222;
  $('.aside .chat .panel-body').css("height",chat_height);
  } else {
      $('.aside .chat .panel-body').css("height",312);
      $('.aside .chat .panel-body').css("overflow-y","hidden");
      $('.chat').removeClass('.aside');
      $('.aside').css("overflow", "hidden");
  };

  $(window).resize(function(){
    if($(window).width() > 768){
      var chat_height = $(window).height()-222;
      $('.aside .chat .panel-body').css("height",chat_height);
      $('.aside').css("overflow", "scroll");
    } else {
      $('.aside .chat .panel-body').css("height",312);
       $('.aside .chat .panel-body').css("overflow-y","hidden");
       $('.aside').css("overflow", "hidden");
    };
  });


  ///Container and nav response and drag and drop fixing

  var new_container_margin_right = ($(window).width()-1364)/2+340;
  var new_container_margin_left = ($(window).width()-1364)/2;
  var container_width = $('container').width();
  var container_margin = container_width/2;

  if($(window).width() > 1340){
    $('#container-size').css("margin-left", new_container_margin_left);
    $('.aside').css("right", 0);
    $('.aside-2').css("right", 0);
    $('.aside-2 #aside-trigger').addClass('hide');
    $('.secondary-nav').css("padding-left", new_container_margin_left);
    $('.secondary-nav').css("padding-right", new_container_margin_right);
  } else {
    $('#container-size').css("margin-left", 20);
    $('.secondary-nav').css("padding-left", container_margin);
    $('.secondary-nav').css("padding-right", container_margin);
  };
  if($(window).width() >= 992){
    $('.add_steps_drag').addClass("aside");
    $('.add_steps_drag > div').removeClass('container');
  } else {
    $('.add_steps_drag').removeClass("aside");
    $('.add_steps_drag > div').addClass('container');
  }

  $(window).resize(function(){
    var new_container_margin_left = ($(window).width()-1364)/2;
    if($(window).width() > 1340){
      $('.aside').css("right", 0);
      $('.aside-2').css("right", 0);
      $('.aside-2 #aside-trigger').addClass('hide');
      $('#container-size').css("margin-left", new_container_margin_left);
      $('.secondary-nav').css("padding-left", new_container_margin_left);
      $('.secondary-nav').css("padding-right", new_container_margin_right);
    } else {
      $('.aside').css("right",-300);
      $('.aside-2').css("right",-300);
      $('.aside-2 #aside-trigger').removeClass('hide');
      $('.add_steps_drag').removeClass("aside");
      $('#container-size').css("margin-left", 20);
      $('.secondary-nav').css("padding-left", container_margin);
      $('.secondary-nav').css("padding-right", container_margin);
    };
    if($(window).width() >= 992){
      $('.add_steps_drag').addClass("aside");
      $('.add_steps_drag > div').removeClass('container');
    } else {
      $('.add_steps_drag').removeClass("aside");
      $('.add_steps_drag > div').addClass('container');
    }
  });

  if($(window).width() < 768){
    $('.container').css("margin-left", 0);
  };

  $(window).resize(function(){
    if($(window).width() < 768){
      $('.container').css("margin-left", 0);
    };
  });


  /// Aside heigth

  if ($(window).width() > 768) {
    var aside_height = $(window).height()-100;
    $('.aside').css("height",aside_height);
    $('.chat-module').removeClass('module-ongoing');
  } else {
    $('.aside').css("height","auto");
    $('.chat-module').addClass('module-ongoing');
  };

  $(window).resize(function() {
    if ($(window).width() > 768) {
      var aside_height = $(window).height()-100;
      $('.aside').css("height",aside_height);
      $('.chat-module').removeClass('module-ongoing');
    } else {
      $('.aside').css("height","auto");
      $('.chat-module').addClass('module-ongoing');
    };   
  });


  //Mantain aspect ratio

  if ($(window).width()>768) {
    var a_r = 1.1143;
    var top_height = $('#nearby nav').height();
    var onging_module_width = $('.module-ongoing').width(); 
    $('.module-ongoing').css("height", onging_module_width / a_r);
    $('.nearby .content, #feed .content').css("height", onging_module_width / a_r - top_height);
  };

  $(window).resize(function(){
    if ($(window).width()>768) {
      var a_r = 1.1143;
      var onging_module_width = $('.module-ongoing').width(); 
      var top_height = $('#nearby nav').height();
      $('.module-ongoing').css("height", onging_module_width / a_r);
      $('.nearby .content, #feed .content').css("height", onging_module_width / a_r - top_height);
    } else {
      $('.module-ongoing').css("height", "auto");
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


  //Display cards related content

  var showContent = function() {
    var target = $(this).data('target');
    $(target).toggleClass('hide');
    $('.trip-card').css("opacity", 0.75);
    $(this).css("opacity", 1);
    $(this).closest('.module-trips').find('.amount, .re-open, .comments-votes').toggleClass('hide');
    if (!$(target).hasClass('hide')) {
      $(this).closest('.module-trips').find('.trip-card').css({
        "padding-top": 7,
        "margin-bottom": 0,
        "margin-top": -50
      });
      $(this).closest('.module-trips').find('.trips-summary').css("height",150);  
    } else {
      $(this).closest('.module-trips').find('.trip-card').css({
        "padding-top": '15%',
        "margin-bottom": 20,
        "margin-top": 20
      });  
      $(this).closest('.module-trips').find('.trips-summary').css("height",100);
    }
    $(this).closest('.module-trips').find('.options_admin').toggleClass('hide');
    $('.deciding h3').toggleClass('hide');
    $('.decided h3').toggleClass('hide');
  };

  var toggleHeight = function() {
    var newHeight = $(this).parent().parent().parent().data('children-new-height');
    if ( $('.trip-card').outerHeight() != newHeight ) {
      $('.trip-card').css('height', newHeight + 'px');  
    } else {
      $('.trip-card').css('height', '196px');
    }
  };

  if ($(window).width() > 768) { 
    $('.trip-card').click(showContent);
    var tripCardHeight = $('.trip-card').height();
    $('.trip-card').click(toggleHeight);
  };

  $(window).resize(function() {
    if ($(window).width() > 768) { 
    var toggleHeight = function(){
      var newHeight = $(this).parent().parent().parent().data('children-new-height');
      if ( $('.trip-card').height() != newHeight ) {
        $('.trip-card').css('height', newHeight+'px');  
      } else {
        $('.trip-card').css('height', "tripCardHeight");
      }
    };
    $('.trip-card').click(showContent);
    var tripCardHeight = $('.trip-card').height();
    $('.trip-card').click(toggleHeight);
    };
  });


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

  //Friends
  if ($(window).width() > 1200) {
    var friends_ul_height = $(window).height() - 600;
  }else{
    var friends_ul_height = $('.past-trips').height()-134;
    $('#friends').css('height', 453);
  };

  var friend_height = 100;
  var num_friends = parseInt(friends_ul_height / friend_height);
  $('.first_page,.second_page').attr('data-friends',num_friends);

  $(window).resize(function() {
    if ($(window).width() > 1200) {
      var friends_ul_height = ($(window).height()- 600);
      var new_num_friends = parseInt(friends_ul_height / friend_height);
      $('.first_page,.second_page').attr('data-friends',new_num_friends);
    }else{
      var friends_ul_height = $('.past-trips').height()-134;
      $('#friends').css('height', 453);
       $('.first_page,.second_page').attr('data-friends',3);
    };
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
  });

  $('.end-editing').click(function(){
    if ($(window).width() > 1200) {
      $('.user-info').removeClass('hidden');
      $('.#friends').removeClass('hidden');
    };
    $('.user-info').removeClass('hidden');
    $('.edit_profile').addClass('hidden');
  });


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
    $('.ico-location-pink').addClass('hidden'); 
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
      $('.ico-location-pink').addClass('hidden');
      $('#friends').addClass('col-sm-6');
    }else{
      $('.secondary-menu').addClass('hidden');
      $('.map').removeClass('hidden');
      $('.ico-location-pink').removeClass('hidden');
      $('#friends').removeClass('col-sm-6');
    };
  });


  // Función para desplegar los trips

  if ($(window).width() > 768) {
    $('.trips-summary').click(function(){
      $('.trips-summary').css("height",100);
      if( $(this).closest('.module-trips').find('.trip-steps').hasClass('hide') ) {
        $('.trip').find('.trip-steps').addClass('hide');
        $(this).closest('.trip').find('.trip-steps').removeClass('hide'); 
      } else {
        $(this).closest('.trip').find('.trip-steps').addClass('hide'); 
      }   
    })
  } else {
    $('.trip-steps').addClass('hide');
  };

  $(window).resize(function(){
    if ($(window).width() > 768) {
      $('.trips-summary').click(function(){
        if( $(this).closest('.module-trips').find('.trip-steps').hasClass('hide') ) {
          $('.trip').find('.trip-steps').addClass('hide');
          $(this).closest('.trip').find('.trip-steps').removeClass('hide');  
        } else {
          $(this).closest('.trip').find('.trip-steps').addClass('hide'); 
        }   
      })
    } else {
      $('.trip-steps').addClass('hide');
    };
  });

  // Función para desplegar los trips mobile
  if ($(window).width() < 769) {
    $('.trips-summary').click(function(){
        $(this).closest('.trip').find('.trip-steps').removeClass('hide');
        $('.trips-summary').addClass('hide');
        $(this).removeClass('hide');
        $('.secondary-menu-trip').removeClass('hide');
        $('.deciding').children('h3').addClass('hide');
        $('.decided').children('h3').addClass('hide');
    })
  };

  $(window).resize(function() {
    if ($(window).width() < 769) {
      $('.secondary-menu-trip').removeClass('hide');
      $('.deciding').children('h3').addClass('hide');
      $('.decided').children('h3').addClass('hide');
    }else{
      $('.secondary-menu-trip').addClass('hide');
      $('.deciding').children('h3').removeClass('hide');
      $('.decided').children('h3').removeClass('hide');
      $('.trips-summary').removeClass('hide');
    };
  });


  ////Tabs

    if ($(window).width() < 769) {
    $('.decided').addClass('hide');
    $('.tab-deciding').click(function(){
      $('.decided').addClass('hide');
      $('.deciding').removeClass('hide');
      $('.tab-deciding').addClass('active');
      $('.tab-decided').removeClass('active');
    });
    $('.tab-decided').click(function(){
      $('.deciding').addClass('hide');
      $('.decided').removeClass('hide');
      $('.tab-deciding').removeClass('active');
      $('.tab-decided').addClass('active');
    });
  };

  $(window).resize(function() {
    if ($(window).width() < 769) {
    $('.decided').addClass('hide');
    $('.tab-deciding').click(function(){
      $('.decided').addClass('hide');
      $('.deciding').removeClass('hide');
      $('.tab-deciding').addClass('active');
      $('.tab-decided').removeClass('active');
    });
    $('.tab-decided').click(function(){
      $('.deciding').addClass('hide');
      $('.decided').removeClass('hide');
      $('.tab-deciding').removeClass('active');
      $('.tab-decided').addClass('active');
    });
    }else{
      $('.decided').removeClass('hide');
    };
  });


  // Función para estilos countdown 

  if( $( window ).width() > 768) {
    $('.trip-steps.hide').closest('.module-trips').find('.trip-countdown').addClass('unclicked');
    $('.trip-steps.hide').closest('.module-trips').find('.trip-to-vote').addClass('unclicked');
    $('.trips-summary').click(function(){
      $('.trip-countdown').addClass('unclicked');
      $('.trip-to-vote').addClass('unclicked');
      if ($(this).closest('.module-trips').find('.trip-steps').hasClass('hide')){
        $(this).children('.trip-to-vote').addClass('unclicked');
        $(this).children('.trip-countdown').addClass('unclicked');
      } else {
        $(this).children('.trip-to-vote').removeClass('unclicked');
        $(this).children('.trip-countdown').removeClass('unclicked');
      };
    })
  }

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

  if ($(window).width() > 767) {
    $('#delay a').click(function(event){
      event.preventDefault();
      $(this).closest('#itinerary').find('.expand').css('bottom', '-43px');
    });
  } else {
    $('#itinerary').css("margin-bottom", -45);
    $('#delay a').click(function(){
      $('#itinerary').css("margin-bottom", 0);
    });
  }

  $(window).resize(function() {
    if ($(window).width() > 767) {
      $('#delay a').click(function(event){
        event.preventDefault();
        $(this).closest('#itinerary').find('.expand').css('bottom', '-43px');
      });
    } else {
      $('#itinerary').css("margin-bottom", -45);
      $('#delay a').click(function(){
        $('#itinerary').css("margin-bottom", 0);
      });
    }
  });

  $('#bring form').submit(function(e){
    e.preventDefault();
    if ($('#bring form input').val() === "pene") {
      var value = $('#bring form input').val();
      console.log(value);
    }
  });


  // Modal Itinerary Mobile

  if($(window).width() < 769) {

    var modal_mobile_height = $(window).height() - 174;
    $('#content-itinerary .modal-body .content').css("height", modal_mobile_height);
    $('#content-nearby .modal-body .content-nearby').css("height", modal_mobile_height);
  };
    $(window).resize(function() {
      if($(window).width() < 769) {

        var modal_mobile_height = $(window).height() - 174;
        $('#content-itinerary .modal-body .content').css("height", modal_mobile_height);
        $('#content-nearby .modal-body .content-nearby').css("height", modal_mobile_height);
      } else {
        $('#content-itinerary .modal-body .content').css("height", "auto");
        $('#content-nearby .modal-body .content-nearby').css("height", "auto");
      };
    });
});


// Height trip module mobile 

if ( $(window).width() < 769 ) {
  $('.trips').css("height" , $(window).height()-215);
}

$(window).resize(function() {
  if ( $(window).width() < 769 ) {
    $('.trips').css("height" , $(window).height()-215);
  } else {
    $('.trips').css("height" , "auto");
  }

});
