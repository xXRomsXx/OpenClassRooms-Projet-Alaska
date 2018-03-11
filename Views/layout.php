<!DOCTYPE html>

<html>

    <head>

        <meta charset = "utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name = "viewport" content = "width = device-width, initial-scale = 1, user-scalable = no"/>
        <title>Billet simple pour l'alaska - <?= $title ?></title>
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel = "stylesheet" href = "Assets/CSS/style.css" />

    </head>

    <body>

        <?= $bodyContent ?>

        <footer>

            <div id = "footer-content" class = "flex-row">

                <div class = "col-3 text-center">

                    <a href = "http://romaingravier.fr"><i class="fa fa-copyright" aria-hidden="true"></i> Rom's 2017</a>

                </div>

                <div id = "socials" class = "col-3 text-center">

                    <h4>Retrouvez moi sur:</h4>

                    <ul class = "list-unstyled list-inline">

                        <li><a href = "https://Jean-Forteroche.facebook.com"><i class="fa fa-lg fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href = "https://Jean-Forteroche.twitter.com"><i class="fa fa-lg fa-twitter" aria-hidden="true"></i></a></li>

                    </ul>

                    <h4>Achetez mes livres sur:</h4>

                    <ul class = "list-unstyled list-inline">

                        <li><a href = "http://Jean-Forteroche.amazon.com"><i class="fa fa-lg fa-amazon" aria-hidden="true"></i></a></li>

                    </ul>

                </div>

                <div class = "col-3 text-center">

                    <a href = "?action=adminPanel" id = "administration" class = "col-xs-3">Administration du site</a>

                </div>

            </div>

        </footer>

        <script src = "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
        <script src = "<?= $jScript ?>"></script>

    </body>

</html>
