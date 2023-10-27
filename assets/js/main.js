$(document).ready(function () {
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


