(function ($) {

  var state = false;
  var scrollpos;
  var windowWidth = window.innerWidth;
  var windowHeight = window.innerHeight;

  $('#js-btn, #js-mask').on('click', function() {
    if(state == false) {
      scrollpos = $(window).scrollTop();
      console.log(scrollpos);
      $('body').addClass('body-fixed').css({'top': -scrollpos});
      $('#js-menu').toggleClass('is-active');
      $('#js-mask').toggleClass('is-active');
      //$(".menu-mask.is-active").css('height', windowHeight);
      $('#js-btn').toggleClass('is-active');
      state = true;
    } else {
      $('body').removeClass('body-fixed').css({'top': 0});
      window.scrollTo( 0 , scrollpos );
      $('#js-menu').toggleClass('is-active');
      //$(".menu-mask.is-active").css('height', '');
      $('#js-mask').toggleClass('is-active');
      $('#js-btn').toggleClass('is-active');
      state = false;
    }
  });

  $(window).on('load resize', function () {
    windowWidth = window.innerWidth;
    windowHeight = window.innerHeight;
    // all
    $("nav.menu").css('height', windowHeight);
    // responsive
    if (windowWidth > 1100) {
      $(".header-top .header-inner").css('height', windowHeight - 120);
    } else {
      $(".header-top .header-inner").css('height', windowHeight - 40);
    }
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

	$('#is-comment-tabs li').click(function() {
    var index = $('#is-comment-tabs li').index(this);
		$('#is-comment-list > ol').css('display','none');
		$('#is-comment-list > ol').eq(index).css('display','block');
		$('#is-comment-tabs li').removeClass('active');
		$(this).addClass('active')
	});

})(jQuery);
