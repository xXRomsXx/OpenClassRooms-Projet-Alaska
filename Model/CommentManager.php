<?php

require_once('Manager.php');

class CommentManager extends Manager {

    public function addComment($name, $content, $post_id, $parent_id) {

        if(!isset($name) || $name == '') {

            $message = 'Veuillez saisir un nom';

        } else if(!isset($content) || $content == '') {

            $message = 'Veuillez saisir votre commentaire';

        } else if(!isset($post_id) || !is_int($post_id) || $post_id == '') {

            $message = 'Erreur: votre commentaire n\'a pas été envoyé';

        } else {

            $message = 'Commentaire ajouté avec succès';

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

        }

        return $message;

    }

    public function getComments($id) {

        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, author, content, parent_id, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%i\') AS date_fr, depth from comments WHERE post_id = ?');
        $req->execute(array($id));
        $comments = $req->fetchAll();

        return $comments;

    }

    public function reportComment($id) {

        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET reported = 1 WHERE id = ?');
        $req->execute(array($id));

    }

}
