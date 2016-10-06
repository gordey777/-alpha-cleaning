  $(document).ready(function() {

    $("#owl-product-slider").owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        smartSpeed:2000,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        dots: true,

    });



    $("#owl-brand-slider").owlCarousel({
        items: 6,
        loop: true,
        margin: 10,
        smartSpeed:1400,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        dots: false,
    });
  });
