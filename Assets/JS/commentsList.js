/*            Unreport comment         */

$unreportButton = $('.unreport-button');

$unreportButton.on('click', function(e) {

    e.preventDefault();

    $this = $(this);
    $id = $this.data('id');

    $.ajax({

        type: 'POST',
        url: '?action=unreport',
        data: {

            id: $id,

        },

        success: function() {

            $('#flash-message').addClass('success-message').fadeIn(600).append('<div class = "message"><p>commentaire désignalé</p> <br /></div>').delay(1300).fadeOut(600);
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
