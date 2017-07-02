(function ($) {

  $('#js-btn, #js-mask').on('click', function() {
    $('#js-btn').toggleClass('is-active');
    $('#js-menu').toggleClass('is-active');
    $('#js-mask').toggleClass('is-active');
  });

  $(window).scroll(function (){
    $("#js-main-index").each(function(){
      var offsetTop = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > offsetTop - windowHeight + windowHeight / 5){
        $('#js-section-title').addClass('is-active');
      } else if(scroll <= offsetTop - windowHeight + windowHeight / 5) {
        $('#js-section-title').removeClass('is-active');
      }
    });
  });

})(jQuery);
