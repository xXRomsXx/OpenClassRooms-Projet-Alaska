<?php $title = 'Le blog' ?>

<?php ob_start(); ?>

<div id = "page-wrap">

    <div id = "home-wrap">

        <div class = "text-center" id = "messages-flash"></div>

        <div id = "myScrollspy">

            <div id = "logo"><a href = "#page-top">JF</a></div>

            <div id = "icon" class = "navbar-toggle collapsed hidden-lg hidden-md hidden-sm">

                <div id = "hamburger">Hamburger</div>

            </div>

            <div id = "menu">

                <ul id = "menu" class = "list-unstyled list-inline">

                    <li><a href = "#intro" id = "toIntroduction">A Propos</a></li>
                    <li><a href = "#blog">Articles</a></li>

                </ul>

            </div>

        </div>

        <header id = "page-top">

            <h1 id = "header-title">Billet simple pour l'Alaska</h1>
            <h2 id = "header-subtitle">par Jean Forteroche</h2>
            <button id = "enter-button" class = "btn btn-lg">Entrer</button>

        </header>

        <section id = "introduction">

            <div id = "introduction-overlay">

                <div class = "flex-column">

                    <div class = "text-center text-introduction">

                        <p class = "pull-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque orci diam, cursus at congue quis, aliquam ut nisl. Quisque a mauris sollicitudin, rutrum dolor vitae, consectetur libero. Duis tincidunt, elit dignissim pharetra commodo, purus metus euismod arcu, sed suscipit augue sapien id massa. Vivamus lorem ex, finibus in ipsum a, elementum pulvinar nunc. Nam pellentesque bibendum libero, vel fermentum justo..</p>

                    </div>

                    <div class = "text-center text-introduction">

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque orci diam, cursus at congue quis, aliquam ut nisl. Quisque a mauris sollicitudin, rutrum dolor vitae, consectetur libero. Duis tincidunt, elit dignissim pharetra commodo, purus metus euismod arcu, sed suscipit augue sapien id massa. Vivamus lorem ex, finibus in ipsum a, elementum pulvinar nunc. Nam pellentesque bibendum libero, vel fermentum justo..</p>

                    </div>

                    <div class = "text-center text-introduction">

                        <p class = "pull-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque orci diam, cursus at congue quis, aliquam ut nisl. Quisque a mauris sollicitudin, rutrum dolor vitae, consectetur libero. Duis tincidunt, elit dignissim pharetra commodo, purus metus euismod arcu, sed suscipit augue sapien id massa. Vivamus lorem ex, finibus in ipsum a, elementum pulvinar nunc. Nam pellentesque bibendum libero, vel fermentum justo..</p>

                    </div>

                    <div class = "text-center text-introduction">

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque orci diam, cursus at congue quis, aliquam ut nisl. Quisque a mauris sollicitudin, rutrum dolor vitae, consectetur libero. Duis tincidunt, elit dignissim pharetra commodo, purus metus euismod arcu, sed suscipit augue sapien id massa. Vivamus lorem ex, finibus in ipsum a, elementum pulvinar nunc. Nam pellentesque bibendum libero, vel fermentum justo..</p>

                    </div>

                </div> <!-- flex-column -->

            </div> <!-- introduction-overlay -->

        </section> <!-- introduction -->

        <section class = "text-center" id = "blog">

            <div id = "blog-overlay">

                <h2>Liste des articles</h2>

                <div id = "posts">

                    <div id = "posts-carousel" class = "carousel slide" data-ride = "carousel">

                        <!-- items -->

                        <div class = "carousel-inner">

                            <div class = "item active">

                                <a href = "?action=postDetails&id=<?= $latestPost->id; ?>"><h3><?= $latestPost->title; ?></h3></a>
                                <a href = "?action=postDetails&id=<?= $latestPost->id; ?>"><div class = "postContent"><?= strlen($latestPost->content) > 2800 ? substr($latestPost->content, 0, 2800) . ' ...' : $latestPost->content; ?></div></a>

                            </div>

                            <?php foreach($posts as $post) { ?>

                            <div class = "item">

                                <a href = "?action=postDetails&id=<?= $post->id; ?>"><h3><?= $post->title; ?></h3></a>
                                <a href = "?action=postDetails&id=<?= $post->id; ?>"><div class = "postContent"><?= strlen($post->content) > 2800 ? substr($post->content, 0, 2800) . ' ...' : $post->content; ?></div></a>

                            </div>

                            <?php } ?>

                        </div>

                        <a id = "carousel-control-left" class = "left carousel-control" href = "#posts-carousel" data-slide = "prev">

                            <span class = "glyphicon glyphicon-chevron-left"></span>

                        </a>

                        <a id = "carousel-control-right" class = "right carousel-control" href = "#posts-carousel" data-slide = "next">

                            <span class = "glyphicon glyphicon-chevron-right"></span>

                        </a>

                    </div> <!-- posts carousel -->

                </div> <!-- posts -->

            </div> <!-- Blog-overlay -->

        </section> <!-- Blog -->

    </div> <!-- home-wrap -->

</div> <!-- page-wrap -->

<?php $bodyContent = ob_get_clean(); ?>

<?php $jScript = 'Assets/JS/homeFunctions.js' ?>

<?php require('layout.php'); ?>
