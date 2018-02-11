<?php

require('Controller/controller.php');

try {

    if(isset($_GET['action'])) {

        if($_GET['action'] == 'homePage') {

            homePage();

        } else if($_GET['action'] == 'postDetails') {

            if(isset($_GET['id']) && $_GET['id'] > 0) {

                $id = intval($_GET['id']);

                postDetails($id);

            } else {

                throw new Exception('Cet identifiant d\'article n\'existe pas');

            }

        }

    } else {

        homePage();

    }

} catch(Exception $e) {

    return 'erreur: ' . $e->getMessage();

}