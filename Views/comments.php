<dl id = "comment-<?= $comment->id ?>" class = "well comment">

    <dt>Commentaire écrit par <?= $comment->author ?> le <?= $comment->date_fr ?></dt>
    <dd>

        <div class = "comment-content flex-row">

            <p><?= $comment->content ?></p>

        </div>

        <div class = "comment-buttons flex-column">

            <?php

            if($comment->depth < 3) { ?>

                <button class = "comment-response-button btn" data-id = "<?= $comment->id ?>">Répondre</button> <?php

            }

            ?>

            <button class = "report-button btn" data-id = "<?= $comment->id ?>">Signaler ce commentaire</button>

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
