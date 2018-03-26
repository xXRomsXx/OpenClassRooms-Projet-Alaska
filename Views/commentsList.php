<?php ob_start() ?>

<h1 class = "text-center">Liste des commentaires</h1>

<h3 class = "text-center">Liste des commentaires signalés</h3>

<div id = "postsListWrap" class = "flex-column flex-column-center">

    <?php if($reportedComments) { ?>

        <table id = "postsTable" class = "text-center table table-striped table-bordered table-hover">

            <thead>

                <tr>

                    <th class = "text-center">Auteur</th>
                    <th class = "text-center">Commentaire</th>
                    <th class = "text-center">Action</th>

                </tr>

            </thead>

            <tbody>

            <?php foreach ($reportedComments as $reportedComment) { ?>

                <tr>

                    <td><?= $reportedComment->author; ?></td>
                    <td><?= $reportedComment->content; ?></td>
                    <td id = "table-buttons">

                        <a><button class = "btnAdminTable unreport-button btn btn-success btn-md" data-id = "<?= $reportedComment->id ?>">Valider</button></a>
                        <a href = "?action=commentEdit&id= <?= $reportedComment->id; ?>"><button class = "btnAdminTable btn btn-warning btn-md">Modifier</button></a>
                        <a href = "?action=commentDelete&id= <?= $reportedComment->id; ?>"><button class = "btnAdminTable btn btn-danger btn-md">Supprimer</button></a>

                    </td>

                </tr>

            <?php } ?>

            </tbody>

        </table> <?php

    } else {

        ?><div class = "well no-comment text-center">Aucun commentaire n'a été signalé...</div><?php

    } ?>

    <h3 class = "text-center">Liste de tous les commentaires</h3>

    <table id = "postsTable" class = "text-center table table-striped table-bordered table-hover">

        <thead>

            <tr>

                <th class = "text-center">Auteur</th>
                <th class = "text-center">Commentaire</th>
                <th class = "text-center">Action</th>

            </tr>

        </thead>

        <tbody>

        <?php foreach ($comments as $comment) { ?>

            <tr>

                <td><?= $comment->author; ?></td>
                <td><?= $comment->content; ?></td>
                <td id = "table-buttons">

                    <a href = "?action=commentEdit&id= <?= $comment->id; ?>"><button class = "btnAdminTable btn btn-warning btn-md">Modifier</button></a>
                    <a href = "?action=commentDelete&id= <?= $comment->id; ?>"><button class = "btnAdminTable btn btn-danger btn-md">Supprimer</button></a>

                </td>

            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>

<?php $bodyContent = ob_get_clean(); ?>

<?php $jScript = 'Assets/JS/commentsList.js'; ?>

<?php require('adminLayout.php'); ?>
