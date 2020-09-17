$(function() {

//-------------------------news-archive---------------------------------------
  var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    effect: 'fade',
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    }
  });

//-------------------------скорость якоря---------------------------------------
  $(".hero li").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top - 10}, 'slow', 'swing');
  });


  $(".click").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top - 70}, 'slow', 'swing');
  });


//-------------------------------попандер---------------------------------------
  $('.modal').popup({
    escape: false,
    blur: false,
    scrolllock: true,
    transition: 'all 0.3s'
  });


//------------------------------------form-------------------------------------------
  $('input[type="tel"]').mask('+00 (000) 000-00-00');


//------------------------------гамбургер-----------------------------
  $('.hamburger').click(function() {
    $(this).toggleClass('hamburger--active');
    $('.nav').toggleClass('nav--active');
    $('.header').toggleClass('header--menu');
  });

  if ($(this).scrollTop()<20){
      $('.header').removeClass('header--menu');
  }

});

//----------------------------------------fixed----------------------------------
 $(window).scroll(function(){
  if($(this).scrollTop()>20){
      $('.header').addClass('header--menu');
  }
  else if ($(this).scrollTop()<20){
      $('.header').removeClass('header--menu');
  }

//-------------------------------активна ссилка на якій знаходишся для меню---------------------------------------
  $('.cabinet__nav ul li a').each(function () {
      var location = window.location.href;
      var link = this.href; 
      if(location == link) {
          $(this).addClass('active');
      }
  });

});

//----------------------------------------js----------------------------------

// $(window).on('load', function(){
//   $('.preloader').delay(1000).fadeOut('slow');
// });

//---------------------------js-----------------------
  $('.tabs__wrap').hide();
  $('.tabs__wrap:first').show();
  $('.tabs ul a:first').addClass('modal__active');
  $('.tabs ul a').click(function(event){
    event.preventDefault();
    $('.tabs ul a').removeClass('modal__active');
    $(this).addClass('modal__active');
    $('.tabs__wrap').hide();
    var selectTab = $(this).attr('href');
    $(selectTab).fadeIn();
  });