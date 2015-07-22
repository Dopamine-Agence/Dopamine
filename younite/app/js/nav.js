$(document).ready(function(){
 
  $("#ajout").click(function(){   
  $("#form_add").fadeIn();
  $(".profile").fadeOut();
  $("#map").removeClass("blur");
  });
});

$(document).ready(function(){
 
  $(".delete").click(function(){   
  $("#form_add").fadeOut();
  });
});

$(document).ready(function(){
 
  $(".close_post").click(function(){   
  $(".viewpost").fadeOut();
  $(".leaflet-control-container").fadeIn();
  });
});


$(document).ready(function(){
 
  $("#person").click(function(){   
  $(".profile").fadeToggle();
  });
});

$(document).ready(function(){
 
  $("#person").click(function(){   
  $("#map").toggleClass("blur");
  });
});

$(document).ready(function(){
 
  $("#back-map").click(function(){   
    $(".profile").fadeOut();
    $("#map").removeClass("blur");
  });
});


$(document).ready(function(){
 
  $("#arrow_up").click(function(){
    $("#post-comment").addClass("up_down");
    $("#arrow_down").css("display","block");
    $("#arrow_up").css("display","none");
  });
});

$(document).ready(function(){
 
  $("#arrow_down").click(function(){
    $("#post-comment").removeClass("up_down");
    $("#arrow_up").css("display","block");
    $("#arrow_down").css("display","none");
  });
});


$(document).ready(function(){
 
  $("#arrow_up_post").click(function(){
    $(".viewpost").toggleClass("up_message");
    $("#arrow_down_post").css("display","block");
    $("#arrow_up_post").css("display","none");
    $(".leaflet-control-container").fadeOut();
  });
});

$(document).ready(function(){
 
  $("#arrow_down_post").click(function(){
    $(".viewpost").toggleClass("up_message");
    $("#arrow_down_post").css("display","none");
    $("#arrow_up_post").css("display","block");
    $(".leaflet-control-container").fadeOut();
  });
});

$(document).ready(function(){
 
  $(".post_your_comment").click(function(){
    $("#arrow_down_post").css("display","none");
    $("#map").css("display","none");
    $(".message").css("display","block");
    $(".viewpost").css("position","inherit");
    $(".viewpost").css("margin-bottom","110px");
    $(".viewpost").css("background-color","#fff");
    $("#post-comment").css("display","block");
    $("#post-comment").css("background-color","#fff");
    $(".text-courant").css("display","block");
    $(".btnGeo").css("display","none");
    $(".close_post").css("position","fixed");

  });
});

$(document).ready(function(){
 
  $(".close_post").click(function(){
    $("#arrow_down_post").css("display","block");
    $("#map").css("display","block");
    $(".message").css("display","none");
    $(".viewpost").css("position","fixed");
    $(".viewpost").css("margin-bottom","0");
    $(".viewpost").css("background-color","rgba(255,255,255,0.8)");
    $("#post-comment").css("display","none");
    $(".text-courant").css("display","none");
    $(".btnGeo").css("display","block");
    $(".close_post").css("position","absolute");
  });
});

$(document).ready(function(){
 
  $(".post_your_comment").click(function(){
    $(this).fadeOut();
  });
});



$(function(){init();});
function init(){
momento();
}

function momento(){
$("[data-date]").each(function(){
moment.locale("en");
var date = $(this).data("date"),
date = moment(date,"YYYY/MM/DD H:m:s").fromNow();
$(this).html(date);
});
// $('.moment').html(moment([2007, 0, 29]).fromNow() );
}