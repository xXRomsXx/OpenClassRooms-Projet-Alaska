<?php ob_start() ?>

<h1 class = "text-center">Liste des articles</h1>

<div id = "postsListWrap">

    <table id = "postsTable" class = "text-center table table-striped table-bordered table-hover">

        <thead>

            <tr>

                <th class = "text-center">Titre</th>
                <th class = "text-center">Date</th>
                <th class = "text-center">Action</th>

            </tr>

        </thead>

        <tbody>

        <?php foreach ($posts as $post) { ?>

            <tr>

                <td><?= $post->title; ?></td>
                <td><?= $post->date_fr; ?></td>
                <td>

                    <a href = "?action=postDetails&id= <?= $post->id; ?>"><button class = "btnAdminTable btn btn-info btn-md">Lire</button></a>
                    <a href = "?action=postEdit&id= <?= $post->id; ?>"><button class = "btnAdminTable btn btn-warning btn-md">Modifier</button></a>
                    <a href = "?action=postDelete&id= <?= $post->id; ?>"><button class = "btnAdminTable btn btn-danger btn-md">Supprimer</button></a>

                </td>

            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>

<?php $bodyContent = ob_get_clean(); ?>

<?php require('adminLayout.php'); ?>
