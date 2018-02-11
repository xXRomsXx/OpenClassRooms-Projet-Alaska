$(window).on('load', function() {

    var $navbar = $('#myScrollspy');
    var $menuLink = $('#myScrollspy a');
    var $navbarDisplayScrollSpot = $('#header-subtitle');
    var $enterButton = $('#enter-button');
    var $textIntro = $('.text-introduction');

    $navbar.hide();

    /*                  Enter button click                 */

    $enterButton.on('click', function () {

        $('html,body').animate({

            scrollTop: $enterButton.offset().top + $enterButton.height()

        }, 1500);

    });

    /*                  introduction link click                 */

    $('#toIntroduction').on('click', function() {

        $('html,body').animate({

            scrollTop: $enterButton.offset().top + $enterButton.height()

        }, 1500);

    });

    /*             Elements show on scroll               */

    $(window).scroll(function() {

        var $wScroll = $(this).scrollTop();

        $navbar.hide();

        /*                  Navbar                   */

        if($wScroll > $navbarDisplayScrollSpot.offset().top) {

            var $opacity = ($wScroll - $navbarDisplayScrollSpot.offset().top) / ($wScroll / 1.4);

            $navbar.show();

            $navbar.css({'opacity': $opacity});

        }

        /*                  text intro                   */

        if($wScroll > $enterButton.offset().top - 100) {

            $textIntro.each(function(i) {

                setTimeout(function() {

                    $textIntro.eq(i).addClass('is-showing');

                }, 150 * (i + 1));

            });

        } else {

            $textIntro.each(function(i) {

                setTimeout(function() {

                    $textIntro.eq(i).removeClass('is-showing');

                }, 150 * (i+1));

            });

        }

    });

    /*                  Fluent Scrollspy                    */

    $(function() {

        $menuLink.on('click', function(e) {

            e.preventDefault();
            var hash = this.hash;

            $('html, body').animate({

                scrollTop: $(this.hash).offset().top

            }, 1500, function(){

                window.location.hash = hash;

            });

        });

    });



});
