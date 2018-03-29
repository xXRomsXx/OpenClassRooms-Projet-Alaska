<?php

require_once('Manager.php');

class PostManager extends Manager {

    public function getPosts() {

        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(date, \'%d/%m/%Y\') AS date_fr, chapter FROM posts ORDER BY date ASC');

        $posts = $req->fetchAll();

        return $posts;

    }

    public function getLatestPost() {

        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, chapter FROM posts ORDER BY date DESC LIMIT 0, 1');

        $latestPost = $req->fetch();

        return $latestPost;

    }

    public function getPost($chapter) {

        $db = $this->dbConnect();

        $req = $db->prepare('SELECT id, title, content, author, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%i\') AS date_fr, chapter FROM posts WHERE chapter = ?');
        $req->execute(array($chapter));
        $post = $req->fetch();

        return $post;

    }

    public function adminGetPost($id) {

        $db = $this->dbConnect();

        $req = $db->prepare('SELECT id, title, content, author, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%i\') AS date_fr, chapter FROM posts WHERE id = ?');
        $req->execute(array($id));
        $post = $req->fetch();

        return $post;

    }

    public function addNewPost($title, $name, $chapter, $content) {

        $db = $this->dbConnect();

        $req = $db->prepare('INSERT INTO posts(title, author, chapter, content, date) VALUES(?, ?, ?, ?, ?)');
        $req->execute(array($title, $name, $chapter, $content, date('Y-m-d H:i:s')));

    }

    public function postupdate($id, $title, $name, $chapter, $content) {

        $db = $this->dbConnect();

        $req = $db->prepare('UPDATE posts SET title = ?, author = ?, chapter = ?, content = ? WHERE id = ?');
        $req->execute(array($title, $name, $chapter, $content, $id));

    }

    public function postDelete($id) {

        $db= $this->dbConnect();

        $req = $db->prepare('DELETE FROM posts WHERE id = ?');
        $req->execute(array($id));

    }

    /* public function getPostsWithPagination() {

        $db = $this->dbConnect();

        $req = $db->query('SELECT id FROM posts');

        $postsPerPage = 5;
        $totalPosts = $req->rowCount();
        $nbPages = ceil($totalPosts / $postsPerPage);

        if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $nbPages) {

            $_GET['page'] = intval($_GET['page']);
            $currentPage = $_GET['page'];

        } else {

            $currentPage = 1;

        }

        $start = ($currentPage - 1) * $postsPerPage;

        $req = $db->query('SELECT id, title, content, DATE_FORMAT(date, \'%d/%m/%Y\') AS date_fr FROM posts ORDER BY id DESC LIMIT ' . $start . ', ' . $postsPerPage);
        $posts = $req->fetchAll();


        for($i = 1; $i <= $currentPage; $i++) {

            if($i == $currentPage) {

                echo($i . ' ');

            } else {

                echo('<a href = "?page=' . $i . '">' . $i . '</a>');

            }

        }

        return $posts;

    } */

}
