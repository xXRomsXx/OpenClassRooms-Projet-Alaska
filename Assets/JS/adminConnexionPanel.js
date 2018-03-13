var $connexionButton = $('#admin-connexion-form button');

$('footer').hide();
$('#flash-message').hide();

$('#php-flash-message').delay(1500).fadeOut(600);

$connexionButton.on('click', function(e) {

    var $this = $(this);
    var $email = $('#email').val();
    var $password = $('#password').val();

    if($email == "") {

        $('#flash-message').addClass('error-message').fadeIn(600).append('<div class = "message"><p>Veuillez entrer un email</p> <br /></div>').delay(1300).fadeOut(600);
        $this.prop('disabled', true);
        setTimeout(function() {

            $('.message').remove();
            $this.prop('disabled', false);
            $('#flash-message').removeClass('error-message');

        }, 2600);

        return false;

    }  else if(!$email.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i)) {

        $('#flash-message').addClass('error-message').fadeIn(600).append('<div class = "message"><p>Veuillez entrer un email valide</p> <br /></div>').delay(1300).fadeOut(600);
        $this.prop('disabled', true);
        setTimeout(function() {

            $('.message').remove();
            $this.prop('disabled', false);
            $('#flash-message').removeClass('error-message');

        }, 2600);

        return false;

    } else if($password == "") {

        $('#flash-message').addClass('error-message').fadeIn(600).append('<div class = "message"><p>Veuillez entrer un mot de passe</p> <br /></div>').delay(1300).fadeOut(600);
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
