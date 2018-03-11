<?php

require('Model/PostManager.php');
require('Model/CommentManager.php');

function homePage() {

    $postManager = new PostManager();

    $posts = $postManager->getPosts();
    $last = array_pop($posts);

    $latestPost = $postManager->getLatestPost();

    require('Views/homePage.php');

}

function postDetails($id) {

    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($id);
    $latestPost = $postManager->getLatestPost();
    $comments = $commentManager->getComments($id);

    foreach($comments as $comment) {

      $commentsById[$comment->id] = $comment;

    }

    foreach ($comments as $k => $comment) {

      if($comment->parent_id != null) {

        $commentsById[$comment->parent_id]->children[] = $comment;
        unset($comments[$k]);

      }

    }

    require('Views/postView.php');

}

function addComment($name, $content, $post_id, $parent_id) {

    $commentManager = new CommentManager();
    $commentManager->addComment($name, $content, $post_id, $parent_id);

    header("Location: ?action=postDetails&id=" . $post_id);

}

function reported($id) {

    $commentManager = new CommentManager();

    $commentManager->reportComment($id);

}

function adminPanel() {

    require('Views/adminHome.php');

}

function addPost() {

    require('Views/addPost.php');

}

function postsList() {

    $postManager = new PostManager();

    $posts = $postManager->getPosts();

    require('Views/postsList.php');

}

function commentsList() {

    $commentManager = new CommentManager();

    $comments = $commentManager->getAllComments();
    $reportedComments = $commentManager->getReportedComments();

    require('Views/commentsList.php');

}

function addNewPost($title, $name, $content) {

    $postManager = new PostManager();
    $postManager->addNewPost($title, $name, $content);
    $latestPost = $postManager->getLatestPost();
    $id = $latestPost->id;

    header("Location: ?action=postDetails&id=" . $id);

}

function postEdit($id) {

    $postManager = new PostManager();

    $post = $postManager->getPost($id);

    require('Views/postEdit.php');

}

function postUpdate($id, $title, $name, $content) {

    $postManager = new PostManager();

    $postManager->postUpdate($id, $title, $name, $content);

    header("location: ?action=postDetails&id=" . $id);

}

function postDelete($id) {

    $postManager = new PostManager();

    $postManager->postDelete($id);

    header("location: ?action=postsList");

}

function commentEdit($id) {

    $commentManager = new CommentManager();

    $comment = $commentManager->getComment($id);

    require('Views/commentEdit.php');

}

function commentUpdate($id, $name, $content) {

    $commentManager = new CommentManager();

    $commentManager->commentUpdate($id, $name, $content);

    header("location: ?action=commentsList");

}

function commentDelete($id) {

    $commentManager = new CommentManager();

    $commentManager->commentDelete($id);

    header("location: ?action=commentsList");

}
