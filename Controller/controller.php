<?php

require('Model\PostManager.php');

function homePage() {

    $postManager = new PostManager();

    $posts = $postManager->getPosts();
    $last = array_pop($posts);

    $latestPost = $postManager->getLatestPost();

    require('Views/homePage.php');

}

function postDetails($id) {

    $postManager = new PostManager();

    $post = $postManager->getPost($id);
    $latestPost = $postManager->getLatestPost();
    $comments = $postManager->getComments($id);

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
