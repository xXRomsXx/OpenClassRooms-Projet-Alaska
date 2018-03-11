<!DOCTYPE html>

<html>

    <head>

        <meta charset = "utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name = "viewport" content = "width = device-width, initial-scale = 1, user-scalable = no"/>
        <title>Billet simple pour l'alaska - Admin Panel</title>
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel = "stylesheet" href = "Assets/CSS/admin.css" />

    </head>

    <body>

        <div id = "page-wrap">

            <header>

                <div id = "header-position">

                    <a href = "?action=homePage"><button id = "homePageButton" class = "btn btn-primary"><i class="glyphicon glyphicon-home"></i> Retour au site</button></a>
                    <nav id = "menu">

                        <ul class = "list-unstyled">

                            <a href= "?action=addPost"><li>Créer un article</li></a>
                            <a href = "?action=postsList"><li>Liste des articles</li></a>
                            <a href = "?action=commentsList"><li>Liste des commentaires</li></a>

                        </ul>

                    </nav>

                    <div id = "copyright" class = "text-center">

                        <a href = "http://romaingravier.fr"><i class="fa fa-copyright" aria-hidden="true"></i> Rom's 2017</a>

                    </div>

                    <div id = "icon" class = "hidden-lg hidden-md hidden-sm">

                        <div id = "hamburger"></div>

                    </div>

                </div>

            </header>

            <nav id = "menu-xs">

                <ul class = "list-unstyled">

                    <a href= "?action=addPost"><li>Créer un article</li></a>
                    <a href = "?action=postsList"><li>Liste des articles</li></a>
                    <a href = "?action=commentsList"><li>Liste des commentaires</li></a>

                </ul>

            </nav>

            <div id = "page-content">

                <?= $bodyContent ?>

            </div>

        </div>

        <script src = "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src = "https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ar1ogq21l59zyeg53bozmorrg28r5rkhw8qzrvqmu19t2b1h"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
        <script src = "Assets/JS/admin.js"></script>
        <script src = "<?= $jScript ?>"></script>

    </body>

</html>
