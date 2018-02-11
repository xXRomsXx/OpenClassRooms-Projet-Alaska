<?php

class Manager {

    protected function dbConnect() {

        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $pdo_options[PDO::ATTR_DEFAULT_FETCH_MODE] = PDO::FETCH_OBJ;

        $db = new \PDO('mysql:host=localhost;dbname=projet3;charset=utf8', 'root', '', $pdo_options);

        return $db;

    }

}
