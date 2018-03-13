<?php

require_once('Manager.php');

class CommentManager extends Manager {

    public function addComment($name, $content, $post_id, $parent_id) {

        $db = $this->dbConnect();
        $req = $db->prepare('SELECT depth FROM comments WHERE id = ?');
        $req->execute(array($parent_id));
        $parent = $req->fetch();

        if($parent_id != null) {

            $depth = $parent->depth + 1;

        } else {

            $depth = 0;

        }


        $req = $db->prepare("INSERT INTO comments(author, content, date, post_id, parent_id, reported, depth) VALUES(?, ?, ?, ?, ?, ?, ?)");
        $req->execute(array($name, $content, date('Y-m-d H:i:s'), $post_id, $parent_id, 0, $depth));

        return $message;

    }

    public function getComments($id) {

        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, author, content, parent_id, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%i\') AS date_fr, depth FROM comments WHERE post_id = ?');
        $req->execute(array($id));
        $comments = $req->fetchAll();

        return $comments;

    }

    public function getComment($id) {

        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, author, content FROM comments WHERE id = ?');
        $req->execute(array($id));
        $comment = $req->fetch();

        return $comment;

    }

    public function reportComment($id) {

        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET reported = 1 WHERE id = ?');
        $req->execute(array($id));

    }

    public function getAllComments() {

        $db = $this->dbConnect();
        $req = $db->query('SELECT id, author, content FROM comments ORDER BY id ASC');
        $comments = $req->fetchAll();

        return $comments;

    }

    public function getReportedComments() {

        $db = $this->dbConnect();
        $req = $db->query('SELECT id, author, content FROM comments WHERE reported = 1 ORDER BY id ASC');
        $reportedComments = $req->fetchAll();

        return $reportedComments;

    }

    public function commentUpdate($id, $name, $content) {

        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET author = ?, content = ? WHERE id = ?');
        $req->execute(array($name, $content, $id));

    }

    public function commentDelete($id) {

        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comments WHERE id = ?');
        $req->execute(array($id));

    }

}
