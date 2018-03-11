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

        } else if($_GET['action'] == 'adminPanel') {

            adminPanel();

        } else if($_GET['action'] == 'addPost') {

            addPost();

        } else if($_GET['action'] == 'postsList') {

            postslist();

        } else if($_GET['action'] == 'commentsList') {

            commentsList();

        } else if($_GET['action'] == 'addNewPost') {

            $title = $_POST['title'];
            $name = $_POST['name'];
            $content = $_POST['content'];

            addNewPost($title, $name, $content);

        } else if($_GET['action'] == 'postEdit') {

            if(isset($_GET['id']) && $_GET['id'] > 0) {

                $id = intval($_GET['id']);

            }

            postEdit($id);

        } else if($_GET['action'] == 'postUpdate') {

            $title = $_POST['title'];
            $name = $_POST['name'];
            $content = $_POST['content'];

            if(isset($_GET['id']) && $_GET['id'] > 0) {

                $id = intval($_GET['id']);

            }

            postUpdate($id, $title, $name, $content);

        } else if($_GET['action'] == 'postDelete') {

            if(isset($_GET['id']) && $_GET['id'] > 0) {

                $id = intval($_GET['id']);

            }

            postDelete($id);

        } else if($_GET['action'] == 'commentEdit') {

            if(isset($_GET['id']) && $_GET['id'] > 0) {

                $id = intval($_GET['id']);

            }

            commentEdit($id);

        } else if($_GET['action'] == 'commentUpdate') {

            $name = $_POST['name'];
            $content = $_POST['content'];

            if(isset($_GET['id']) && $_GET['id'] > 0) {

                $id = intval($_GET['id']);

            }

            commentUpdate($id, $name, $content);

        } else if($_GET['action'] == 'commentDelete') {

            if(isset($_GET['id']) && $_GET['id'] > 0) {

                $id = intval($_GET['id']);

            }

            commentDelete($id);

        }

    } else {

        homePage();

    }

} catch(Exception $e) {

    return 'erreur: ' . $e->getMessage();

}
