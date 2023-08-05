$(document).ready(function () {
   $(".owl-carousel").owlCarousel({
      loop: false,
      rewind: true,
      margin: 35,
      responsiveClass: true,
      dots: false,
      navText:[
         "<img src='images/icon/arrowsquareleft.svg' alt='...' class='product_arrow'>",
         "<img src='images/icon/arrowsquareright.svg' alt='...' class='product_arrow'></img>"
      ],
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsive: {
         0: {
            items: 1,
            nav: true,  
         },
         600: {
            items: 2,
            margin: 25,
            nav: true,  
         },
         1000: {
            items: 3,
            nav: true,  
         }
      },
   });
});
