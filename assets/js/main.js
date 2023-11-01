$(document).ready(function () {

  $(window).scroll(function() {

    if ($(this).scrollTop()>0)
     {
        $('.nav-links').removeClass('nav-on');
     }
    else
     {
      $('.nav-links').addClassClass('nav-on');
     }
 });

  $('#btn-menu').click(function () {
    $('.nav-links').toggleClass('nav-on');
  });

  $("#hero-banner").owlCarousel({
    loop: true,
    margin: 16,
    dots: true,
    nav: true,
    animateOut: 'fadeOut',
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause:true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });
});


