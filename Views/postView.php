<?php $title = $post->title; ?>

<?php ob_start(); ?>

  <div id = "page-wrap">

    <section id = "post-section" class = "text-center">

      <div id = "post-content">

        <h1><?= $post->title; ?></h1>

        <p><?= $post->content; ?></p>

        <h5 class = "pull-right">écrit par <?= $post->author; ?>, le <?= $post->date_fr; ?></h5>

      </div>

      <div id = "post-buttons" class = "flex-row">

        <a href = "?action=homePage"><button class = "btn btn-lg"><i class="glyphicon glyphicon-home"></i> Retour à l'accueil</button></a>

        <a href = "?action=postDetails&id=1"><button class = "btn btn-lg"><i class="glyphicon glyphicon-chevron-left"></i><i class="glyphicon glyphicon-chevron-left"></i> Premier chapitre</button></a>

        <a href = "?action=postDetails&id=<?= $post->id - 1; ?>"><button class = "btn btn-lg"><i class="glyphicon glyphicon-chevron-left"></i> Chapitre précédent</button></a>

        <a href = "?action=postDetails&id=<?= $post->id + 1; ?>"><button class = "btn btn-lg">Chapitre suivant <i class="glyphicon glyphicon-chevron-right"></i></button></a>

        <a href = "?action=postDetails&id=<?= $latestPost->id; ?>"><button class = "btn btn-lg">Dernier chapitre <i class="glyphicon glyphicon-chevron-right"></i><i class="glyphicon glyphicon-chevron-right"></i></button></a>

      </div>

    </section>

    <hr class = "separator" />

    <section id = "comments-section">

      <h2 class = "text-center">Commentaires</h2>

      <div id = "comments-header" class = "flex-row">

        <div id = "post-response" class = "text-center col-2">

          <h3>commenter cet article:</h3>

          <form id = "post-response-form" action = "#" method = "post">

            <div>

              <label for = "name">Votre nom:</label>
              <input type = "text" id = "name" name = "name" class = "form-control" required />

            </div>

            <div>

              <label for = "content">Votre commentaire:</label>
              <textarea id = "content" name = "content" class = "form-control" required></textarea>

            </div>

            <button type = "submit" class = "btn">Commenter</button>

          </form>

        </div> <!-- post-response -->

        <div id = "post-comments-CTA" class = "text-center col-2 flex-row">

          <div id = "comments-CTA" class = "flex-column">

            <h3>Voir les commentaires</h3>

            <div id = "drawn-arrow"></div>

          </div>

        </div>

      </div> <!-- comments-header -->

      <div id = "comments-content">

      <?php

        if($comments) {

          foreach($comments as $comment) {

            require('comments.php');

          }

        } else {

            ?><div class = "well no-comment text-center">Aucuns commentaire...</div><?php

        }

      ?>

      </div>

    </section>

  </div>

<?php $bodyContent = ob_get_clean(); ?>

<?php $jScript = 'Assets/JS/postViewFunctions.js' ?>

<?php require('layout.php'); ?>