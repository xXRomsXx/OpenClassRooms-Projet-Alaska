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

            }  else {

                throw new Exception('Cet identifiant d\'article n\'existe pas');

            }

        } else if($_GET['action'] == 'addComment') {

            $name = $_POST['name'];
            $content = $_POST['content'];
            $post_id = intval($_POST['post_id']);

            if($_POST['parent_id'] === "null") {

                $parent_id = null;

            } else {

                $parent_id = intval($_POST['parent_id']);

            }

            addComment($name, $content, $post_id, $parent_id);

        } else if($_GET['action'] == 'reported') {

            $id = $_POST['id'];

            reported($id);

        }

    } else {

        homePage();

    }

} catch(Exception $e) {

    return 'erreur: ' . $e->getMessage();

}
