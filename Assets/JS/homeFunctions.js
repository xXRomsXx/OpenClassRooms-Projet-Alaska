$(window).on('load', function() {

    var $navbar = $('#myScrollspy');
    var $navXs = $('#menu-xs');
    var $menuLink = $('#myScrollspy a');
    var $hamburger = $('#icon');
    var $navbarDisplayScrollSpot = $('#header-subtitle');
    var $enterButton = $('#enter-button');
    var $textIntro = $('.text-introduction');

    $navbar.hide();
    $navXs.hide();

    /*                  Click Hamburger menu                */

    $hamburger.on('click', function() {

        $(this).toggleClass('isActive');
        $navXs.fadeToggle(300);

    });

    /*                  Enter button click                 */

    $enterButton.on('click', function () {

        $('html,body').animate({

            scrollTop: $enterButton.offset().top + 150

        }, 1500);

    });

    /*                  menu-xs link click                 */

    $('#menu-xs li').on('click', function() {

        $hamburger.toggleClass('isActive');
        $navXs.fadeToggle(300);

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
