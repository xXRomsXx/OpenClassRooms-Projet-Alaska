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
