var $ = jQuery;

$(document).ready(function() {
	$('.menu-toggle').on("click",function(){
    $('.header').addClass('menu-active');
    $('body').addClass('menu-active');
  });
  $(window).on('resize', function(){
    $('.header').removeClass('menu-active');
    $('body').removeClass('menu-active');
  });
});
$(document).ready(function() {
	$('.menu-toggle-active').on("click",function(){
    var element = document.getElementById("header");
    element.classList.remove("menu-active");
	})
});