$(function() {

  $('#page-wrap').css('margin', '0');
  $('footer').css('position', 'relative');

  var $comContent = $('#comments-content');
  var $comCTA = $('#comments-CTA');
  var $comment = $('.comment');

  $comContent.hide();

  $comCTA.on('click', function(e) {

    e.preventDefault();
    $comContent.show();

    $('html, body').animate( {

      scrollTop: $comContent.offset().top

    }, 1200);

    $('.no-comment').delay(800).addClass('is-showing');

    $comment.each(function(i) {

      setTimeout(function() {

        $comment.eq(i).addClass('is-showing');

      }, 150 * (i + 1));

    });

  });

});
