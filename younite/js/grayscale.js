function init(){{var e={zoom:15,center:new google.maps.LatLng(40.67,-73.94),disableDefaultUI:!0,scrollwheel:!1,draggable:!1,styles:[{featureType:"water",elementType:"geometry",stylers:[{color:"#000000"},{lightness:17}]},{featureType:"landscape",elementType:"geometry",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:17}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:29},{weight:.2}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#000000"},{lightness:18}]},{featureType:"road.local",elementType:"geometry",stylers:[{color:"#000000"},{lightness:16}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#000000"},{lightness:21}]},{elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#000000"},{lightness:16}]},{elementType:"labels.text.fill",stylers:[{saturation:36},{color:"#000000"},{lightness:40}]},{elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"transit",elementType:"geometry",stylers:[{color:"#000000"},{lightness:19}]},{featureType:"administrative",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:17},{weight:1.2}]}]},t=document.getElementById("map"),o=new google.maps.Map(t,e),l="img/map-marker.png",a=new google.maps.LatLng(40.67,-73.94);new google.maps.Marker({position:a,map:o,icon:l})}}$(window).scroll(function(){$(".navbar").offset().top>50?$(".navbar-fixed-top").addClass("top-nav-collapse"):$(".navbar-fixed-top").removeClass("top-nav-collapse")}),$(function(){$("a.page-scroll").bind("click",function(e){var t=$(this);$("html, body").stop().animate({scrollTop:$(t.attr("href")).offset().top},1e3,"easeInOutExpo"),e.preventDefault()})}),$(".navbar-collapse ul li a").click(function(){$(".navbar-toggle:visible").click()}),google.maps.event.addDomListener(window,"load",init),$(document).ready(function(){$(".play").click(function(){$(".embed-container").toggle("slide"),$(".intro").fadeToggle(),$(".navbar").fadeToggle()})}),$(document).ready(function(){$(".arrow_close").click(function(){$(".embed-container").fadeToggle(),$(".intro").fadeToggle(),$(".navbar").fadeToggle(),$("#video_iframe").removeAttr("src")})}),$(document).ready(function(){$(".play").click(function(){$("#video_iframe").attr("src","https://www.youtube.com/embed/BgL4WJYmcTs?autoplay=1")})});