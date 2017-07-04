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

	$('#is-comment-tabs li').click(function() {
    var index = $('#is-comment-tabs li').index(this);
		$('#is-comment-list > ol').css('display','none');
		$('#is-comment-list > ol').eq(index).css('display','block');
		$('#is-comment-tabs li').removeClass('active');
		$(this).addClass('active')
	});

})(jQuery);
