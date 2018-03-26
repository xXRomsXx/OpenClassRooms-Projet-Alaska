<dl id = "comment-<?= $comment->id ?>" class = "well comment">

    <dt>Commentaire écrit par <?= $comment->author ?> le <?= $comment->date_fr ?></dt>
    <dd>

        <div class = "comment-content flex-column">

            <p><?= $comment->content ?></p>

        </div>

        <div class = "comment-buttons flex-column">

            <?php

            if($comment->depth < 3) { ?>

                <button class = "comment-response-button btn" data-id = "<?= $comment->id ?>"><i class="glyphicon glyphicon-comment hidden-sm hidden-md hidden-lg"></i><p class = "hidden-xs">Répondre</p></button> <?php

            }

            ?>

            <button class = "report-button btn" data-id = "<?= $comment->id ?>"><i class="glyphicon glyphicon-bell hidden-sm hidden-md hidden-lg"></i><p class = "hidden-xs">Signaler</p></button>

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
