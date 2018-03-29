<?php ob_start() ?>

<h1 class = "text-center">Créer un nouveau article</h1>

<div id = "addPostFormWrap">

    <form action = "?action=addNewPost" method = "POST">

        <div>

            <label for = "name">Auteur de l'article:</label>
            <input type = "text" id = "name" name = "name" class = "form-control" value = "Jean Forteroche" required />

        </div>

        <div>

            <label for = "title">Titre de l'article:</label>
            <input type = "text" id = "title" name = "title" class = "form-control" required />

        </div>

        <div>

            <label for = "chapter">Chapitre:</label>
            <input type = "text" id = "chapter" name = "chapter" class = "form-control" required />

        </div>

        <div>

            <label for = "content">Contenu de l'article:</label>
            <textarea id = "content" name = "content" class = "form-control"></textarea>

        </div>

        <input type = "hidden" id = "postContent" value = "" />

        <button type = "submit" class = "btn submit-button">Créer un article</button>

    </form>

</div>

<?php $bodyContent = ob_get_clean(); ?>

<?php $jScript = 'Assets/JS/adminAddPost.js' ?>

<?php require('adminLayout.php'); ?>
