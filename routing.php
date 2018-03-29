<?php

require('Controller/controller.php');

try {

    if(isset($_GET['action'])) {

        if($_GET['action'] == 'homePage') {

            homePage();

        } else if($_GET['action'] == 'postDetails') {

            if(isset($_GET['chapter']) && $_GET['chapter'] > 0) {

                $chapter = intval($_GET['chapter']);

                postDetails($chapter);

            }  else {

                $chapter = 1;
                postDetails($chapter);

            }

        } else if($_GET['action'] == 'addComment') {

            $name = htmlspecialchars($_POST['name']);
            $content = htmlspecialchars($_POST['content']);
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

        } else if($_GET['action'] == 'unreport') {

            $id = $_POST['id'];

            unreport($id);

        } else if($_GET['action'] == 'adminConnexionPanel') {

            if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

                $email = "";
                $password = "";

                adminPanel($email, $password);

            } else {

                adminConnexionPanel();

            }

        } else if($_GET['action'] == 'adminPanel') {

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $email = htmlspecialchars($_POST['email']);
                $password = htmlspecialchars($_POST['password']);

                adminPanel($email, $password);

            } else {

                if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

                    $email = "";
                    $password = "";

                    adminPanel($email, $password);

                } else {

                    adminConnexionPanel();

                }

            }

        } else if($_GET['action'] == 'addPost') {

            if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

                addPost();

            } else {

                adminConnexionPanel();

            }

        } else if($_GET['action'] == 'postsList') {

            if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

                postsList();

            } else {

                adminConnexionPanel();

            }

        } else if($_GET['action'] == 'commentsList') {

            if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

                commentsList();

            } else {

                adminConnexionPanel();

            }

        } else if($_GET['action'] == 'addNewPost') {

            if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

                $title = $_POST['title'];
                $name = $_POST['name'];
                $chapter = intval($_POST['chapter']);
                $content = $_POST['content'];

                addNewPost($title, $name, $chapter, $content);

            } else {

                adminConnexionPanel();

            }

        } else if($_GET['action'] == 'postEdit') {

            if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

                if(isset($_GET['id']) && $_GET['id'] > 0) {

                    $id = intval($_GET['id']);

                }

                postEdit($id);

            } else {

                adminConnexionPanel();

            }

        } else if($_GET['action'] == 'postUpdate') {

            if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

                $title = $_POST['title'];
                $name = $_POST['name'];
                $chapter = intval($_POST['chapter']);
                $content = $_POST['content'];

                if(isset($_GET['id']) && $_GET['id'] > 0) {

                    $id = intval($_GET['id']);

                }

                postUpdate($id, $title, $name, $chapter, $content);

            } else {

                adminConnexionPanel();

            }

        } else if($_GET['action'] == 'postDelete') {

            if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

                if(isset($_GET['id']) && $_GET['id'] > 0) {

                    $id = intval($_GET['id']);

                }

                postDelete($id);

            } else {

                adminConnexionPanel();

            }

        } else if($_GET['action'] == 'commentEdit') {

            if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

                if(isset($_GET['id']) && $_GET['id'] > 0) {

                    $id = intval($_GET['id']);

                }

                commentEdit($id);

            } else {

                adminConnexionPanel();

            }

        } else if($_GET['action'] == 'commentUpdate') {

            if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

                $name = $_POST['name'];
                $content = $_POST['content'];

                if(isset($_GET['id']) && $_GET['id'] > 0) {

                    $id = intval($_GET['id']);

                }

                commentUpdate($id, $name, $content);

            } else {

                adminConnexionPanel();

            }

        } else if($_GET['action'] == 'commentDelete') {

            if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

                if(isset($_GET['id']) && $_GET['id'] > 0) {

                    $id = intval($_GET['id']);

                }

                commentDelete($id);

            } else {

                adminConnexionPanel();

            }

        } else {

            homePage();

        }

    } else {

        homePage();

    }

} catch(Exception $e) {

    return 'erreur: ' . $e->getMessage();

}
