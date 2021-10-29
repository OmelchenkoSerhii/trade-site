var $ = jQuery;

$(document).ready(function() {
  $('.mobile_menu_open').click(function(){
    $('.header__menuWrapper').animate({
      left: 0,
    }, 300 ,function(){
      $('body').addClass('opened-menu');
    });
  });
  $('.mobile_menu_close').click(function(){
    $('body').removeClass('opened-menu');
    $('.header__menuWrapper').animate({
      left: '-100%',
    }, 300 ,function(){
    });
  });
  $('.header .menu-item-has-children').click(function(){
    $('.header .sub-menu').not($(this).find('.sub-menu')).slideUp();
    $('.header .menu-item-has-children').not(this).removeClass('active');
    $(this).find('.sub-menu').slideToggle();
    $(this).toggleClass('active');
  });
});
$('.slider__wrapper').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  dots: true,
  responsive: [
    {
      breakpoint: 576,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
  });