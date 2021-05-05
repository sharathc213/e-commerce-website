//for swiper
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      effect: 'fade',
             autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
 

        $("#hulk").click(function() {
  $("html, body").animate({ scrollTop: $(document).height() }, "slow");

});

        $("#hulk1").click(function() {
  $("html, body").animate({ scrollTop: $(document).height() }, "slow");

});

        $("#hulk2").click(function() {
  $("html, body").animate({ scrollTop: $(document).height() }, "slow");

});

        $("#hulk3").click(function() {
  $("html, body").animate({ scrollTop: $(document).height() }, "slow");

});
