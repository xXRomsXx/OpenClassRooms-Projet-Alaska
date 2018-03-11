var $navXs = $('#menu-xs');
var $hamburger = $('#icon');
$navXs.hide();

/*                  Click Hamburger menu                */

$hamburger.on('click', function() {

    $(this).toggleClass('isActive');
    $navXs.fadeToggle(300);

});

/*                  WYSIWYG tinymce editor                  */

tinymce.init({

    selector:'#content',
    theme: 'modern',
    height: 300,
    width: '100%',

    plugins: [ "advlist autolink link image lists charmap print preview hr anchor pagebreak",
               "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
               "table contextmenu directionality emoticons paste textcolor code"
             ],
    toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
    toolbar2: "| link unlink anchor | forecolor backcolor | print preview code | caption",

    setup: function(ed) {

        ed.on("init", function(ed) {

            var $postContent = $('#postContent').val();
            tinymce.activeEditor.setContent($postContent);

        })

  }

});
