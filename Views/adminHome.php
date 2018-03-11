<?php ob_start(); ?>

    <h1 class = "text-center">Bienvenue sur le panneau d'administartion</h1>

    <h3 class = "text-center">Ici vous pourrez:</h3>

    <div id = "boxes">

        <div id = "createPostBox" class = "box text-center">

            <h4>Créer des articles</h4>
            <p>Ecrivez et mettez en forme très facilement vos articles à l'aide de l'éditeur de texte WYSIWYG.</p>

        </div>

        <div id = "postsListBox" class = "box text-center">

            <h4>Modérer les articles</h4>
            <p>Accéder à la liste des articles pour les modifier ou les supprimer.</p>

        </div>

        <div id = "commentsListBox" class = "box text-center">

            <h4>Modérer les commentaires</h4>
            <p>Accéder à la liste des commentaires pour consultez ceux signalés, les modifier ou les supprimer.</p>

        </div>

    </div>

<?php $bodyContent = ob_get_clean(); ?>

<?php $jScript = 'Assets/JS/adminHome.js' ?>

<?php require('adminLayout.php'); ?>
