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
    var element = document.getElementById("body");
    element.classList.remove("menu-active");
	})
});
$('.slider__wrapper').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  prevArrow: '.prev',
  nextArrow: '.next',
  dots: true,
  responsive: [
    {
      breakpoint: 576,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
  });