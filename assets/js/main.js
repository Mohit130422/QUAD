$(document).ready(function () {

  $(window).scroll(function() {

    if ($(this).scrollTop()>0)
     {
        $('.nav-links').removeClass('nav-on');
     }
    else
     {
      $('.nav-links').addClass('nav-on');
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
    // autoplay: true,
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

function searchText(){
  let input = document.getElementById('searchKeys').value; 
  input=input.toLowerCase(); 
  console.log(input);
  let x = document.getElementsByTagName('p'); 
    
  for (i = 0; i < x.length; i++) {  
      if (!x[i].innerHTML.toLowerCase().includes(input)) { 
          // x[i].style.display="none"; 
      } 
      else { 
          x[i].style.backgroundColor="yellow";                  
      } 
  } 
}

