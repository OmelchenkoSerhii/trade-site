var $ = jQuery;

$(document).ready(function() {
  var w = $(window).width();
  $('a[href="#"]').click(function(event){
    event.preventDefault();
  });
  if(w < 993){
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
  }
});
$('.slider__wrapper').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  dots: true,
  responsive: [
    {
      breakpoint: 769,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
  });


//appearence animation on scroll
$('.appear').each(function() {
  let el = $(this).closest('section');
  let inview = el.waypoint(function(direction) {
      el.find('.appear').addClass('visible');
  }, {
      offset: '95%'
  });
});
