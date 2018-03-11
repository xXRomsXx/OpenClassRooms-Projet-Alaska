<?php ob_start() ?>

<h1 class = "text-center">Editer ce commentaire</h1>

<div id = "addPostFormWrap">

    <form action = "?action=commentUpdate&id=<?= $comment->id; ?>" method = "POST">

        <div>

            <label for = "name">Auteur:</label>
            <input type = "text" id = "name" name = "name" class = "form-control" value = "<?= $comment->author; ?>" required />

        </div>

        <div>

            <label for = "content">Commentaire:</label>
            <textarea id = "commentContent" name = "content" class = "form-control" value = "<?= $comment->content; ?>"><?= $comment->content; ?></textarea>

        </div>

        <button type = "submit" class = "btn submit-button">Editer le commentaire</button>

    </form>

</div>

<?php $bodyContent = ob_get_clean(); ?>

<?php require('adminLayout.php'); ?>
