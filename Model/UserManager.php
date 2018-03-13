<?php

require_once('Manager.php');

class UserManager extends Manager {

    public function userVerify($email, $password) {

            $db = $this->dbConnect();
            $req = $db->prepare('SELECT email, password FROM users WHERE email = ?');
            $req->execute(array($email));
            $user = $req->fetch();

            return $user;

    }

}
