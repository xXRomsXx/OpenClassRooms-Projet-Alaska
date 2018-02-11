<?php

require('Manager.php');

class PostManager extends Manager {

    public function getPosts() {

        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content FROM posts ORDER BY date ASC');

        $posts = $req->fetchAll();

        return $posts;

    }

    public function getLatestPost() {

        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content FROM posts ORDER BY date DESC LIMIT 0, 1');

        $latestPost = $req->fetch();

        return $latestPost;

    }

    public function getPost($id) {

        $db = $this->dbConnect();

        $req = $db->prepare('SELECT id, title, content, author, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%i\') AS date_fr FROM posts WHERE id = ?');
        $req->execute(array($id));
        $post = $req->fetch();

        return $post;

    }

    public function getComments($id) {

        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, author, content, parent_id, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%i\') AS date_fr from comments WHERE post_id = ?');
        $req->execute(array($id));
        $comments = $req->fetchAll();

        return $comments;

    }

}
