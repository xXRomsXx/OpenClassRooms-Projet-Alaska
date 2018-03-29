<?php ob_start() ?>

<h1 class = "text-center">Editer un article</h1>

<div id = "addPostFormWrap">

    <form action = "?action=postUpdate&id=<?= $post->id; ?>" method = "POST">

        <div>

            <label for = "name">Auteur de l'article:</label>
            <input type = "text" id = "name" name = "name" class = "form-control" value = "<?= $post->author; ?>" required />

        </div>

        <div>

            <label for = "title">Titre de l'article:</label>
            <input type = "text" id = "title" name = "title" class = "form-control" value = "<?= $post->title; ?>" required />

        </div>

        <div>

            <label for = "chapter">Chapitre:</label>
            <input type = "text" id = "chapter" name = "chapter" class = "form-control" value = "<?= $post->chapter; ?>" required />

        </div>

        <div>

            <label for = "content">Contenu de l'article:</label>
            <textarea id = "content" name = "content" class = "form-control"></textarea>

        </div>

        <input type = "hidden" id = "postContent" value = "<?= htmlspecialchars($post->content); ?>" />

        <button type = "submit" class = "btn submit-button">Editer l'article</button>

    </form>

</div>

<?php $bodyContent = ob_get_clean(); ?>

<?php $jScript = 'Assets/JS/adminAddPost.js' ?>

<?php require('adminLayout.php'); ?>
