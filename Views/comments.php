<dl id = "comment-<?= $comment->id ?>" class = "well comment">

  <dt>Commentaire écrit par <?= $comment->author ?> le <?= $comment->date_fr ?></dt>
  <dd>

    <div class = "comment-content flex-row">

      <p><?= $comment->content ?></p>

    </div>

    <div class = "comment-buttons flex-column">

      <button class = "comment-response btn">Répondre</button>
      <button class = "report-button btn">Signaler ce commentaire</button>

    </div>

  </dd>


</dl>

<?php

  if(isset($comment->children)) {

    foreach($comment->children as $comment) { ?>

      <div class = "comment sub-comment">

        <?php require('comments.php'); ?>

      </div> <?php

    }

  }
