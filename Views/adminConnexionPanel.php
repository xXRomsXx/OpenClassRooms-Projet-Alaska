<?php $title = 'Admin connexion panel' ?>

<?php ob_start(); ?>

<div id = "admin-connexion-section">

    <?php

        if(isset($_SESSION['message'])) { ?>

            <div id = "php-flash-message" class = "<?= $_SESSION['type']; ?>-message"><p class = "message"><?= $_SESSION['message']; ?></p></div> <?php

            unset($_SESSION['message']);
            unset($_SESSION['type']);

        } else { ?>

            <div id = "flash-message"></div> <?php

        }

    ?>

    <h1>Connection au panneau d'administration</h1>

    <form id = "admin-connexion-form" class = "text-center" action = "?action=adminPanel" method = "post">

        <div>

            <label for = "email">Votre email:</label>
            <input type = "email" id = "email" name = "email" class = "form-control" required />

        </div>

        <div>

            <label for = "pasword">Mot de passe:</label>
            <input type = "password" id = "password" name = "password" class = "form-control" required />

        </div>

        <button type = "submit" class = "btn">Se connecter</button>

    </form>

</div>

<?php $bodyContent = ob_get_clean(); ?>

<?php $jScript = 'Assets/JS/adminConnexionPanel.js' ?>

<?php require('layout.php'); ?>
