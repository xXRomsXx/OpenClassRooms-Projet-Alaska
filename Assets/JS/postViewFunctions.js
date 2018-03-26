$(function() {

  $('#page-wrap').css('margin', '0');
  $('footer').css('position', 'relative');

  var $comContent = $('#comments-content');
  var $comCTA = $('#comments-CTA');
  var $comment = $('.comment');
  var $showFormButton = $('#show-post-response-form');
  var $form = $('#post-response-form');
  var $commentSubmit = $('#post-response-form button');
  var $responseButton = $('.comment-response-button');
  var $reportButton = $('.report-button');

  $comContent.hide();
  $form.hide();

  $('#flash-message').delay(1500).fadeOut('600');
  setTimeout(function() {

      $('.message').remove();
      $('#flash-message').removeClass('error-message');
      $('#flash-message').removeClass('success-message');

  }, 2200);

  /*            Show post response form           */

  $showFormButton.on('click', function(e) {

      e.preventDefault();

      var $this = $(this);
      var $parent = $this.parent();

      $this.fadeOut(300);
      $parent.append($form);
      $form.hide();
      $form.delay(400).fadeIn(300);


      var $parent_id = $form.find("input[name='parent_id']");

      $parent_id.attr('value', "null");


  });

  /*            Show comments           */

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

  /*            Submit post response comment         */

  $commentSubmit.on('click', function(e) {


      var $this = $(this);
      var $name = $form.find("input[name='name']").val();
      var $content = $form.find("textarea[name='content']").val();

      if($name == "") {

          $('#flash-message').addClass('error-message').fadeIn(600).append('<div class = "message"><p>Veuillez entrer un nom</p> <br /></div>').delay(1300).fadeOut(600);
          $this.prop('disabled', true);
          setTimeout(function() {

              $('.message').remove();
              $this.prop('disabled', false);
              $('#flash-message').removeClass('error-message');

          }, 2600);

          return false;

      }  else if(!$name.match(/^[a-zâäàéèùêëîïôöçñ-]+$/i)) {

          $('#flash-message').addClass('error-message').fadeIn(600).append('<div class = "message"><p>Veuillez entrer un nom valide</p> <br /></div>').delay(1300).fadeOut(600);
          $this.prop('disabled', true);
          setTimeout(function() {

              $('.message').remove();
              $this.prop('disabled', false);
              $('#flash-message').removeClass('error-message');

          }, 2600);

          return false;

      } else if($content == "") {

          $('#flash-message').addClass('error-message').fadeIn(600).append('<div class = "message"><p>Veuillez entrer un commentaire</p> <br /></div>').delay(1300).fadeOut(600);
          $this.prop('disabled', true);
          setTimeout(function() {

              $('.message').remove();
              $this.prop('disabled', false);
              $('#flash-message').removeClass('error-message');

          }, 2600);

          return false;

      } else {

          return true;

      }

  });

  /*            Show response comment form         */

  $responseButton.on('click', function(e) {

      e.preventDefault();

      if($(document).width() < 810) {

          var $this = $(this);
          var $container = $this.parent();
          var $dd = $container.parent();
          var $parent_id = $this.data('id');

          $showFormButton.show();
          $dd.append($form);

          var $parent_id_input = $dd.find('form').find("input[name='parent_id']");

          $form.hide();
          $form.fadeIn(300);
          $parent_id_input.attr('value', $parent_id);

      } else {

          var $this = $(this);
          var $parent = $this.parent();
          var $parent_id = $this.data('id');

          $showFormButton.show();
          $parent.append($form);

          var $parent_id_input = $parent.find('form').find("input[name='parent_id']");

          $form.hide();
          $form.fadeIn(300);
          $parent_id_input.attr('value', $parent_id);

      }

  });

  /*            Report comment         */

  $reportButton.on('click', function(e) {

      e.preventDefault();

      $this = $(this);
      $id = $this.data('id');

      $.ajax({

          type: 'POST',
          url: '?action=reported',
          data: {

              id: $id,

          },

          success: function() {

              $('#flash-message').addClass('success-message').fadeIn(600).append('<div class = "message"><p>commentaire signalé</p> <br /></div>').delay(1300).fadeOut(600);
              $this.prop('disabled', true);
              setTimeout(function() {

                  $('.message').remove();
                  $this.prop('disabled', false);
                  $('#flash-message').removeClass('success-message');

              }, 2600);

          },

          error: function(){

              $('#flash-message').addClass('error-message').fadeIn(600).append('<div class = "message"><p>Une erreur s\'est produite, veuillez réesssayer ultérieurement</p> <br /></div>').delay(1300).fadeOut(600);
              $this.prop('disabled', true);
              setTimeout(function() {

                  $('.message').remove();
                  $this.prop('disabled', false);
                  $('#flash-message').removeClass('error-message');

              }, 2600);

          }

      });

  });

});
