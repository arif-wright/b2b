<?php

class Dbh {

    protected function connect() {
        try {
            $username = "root";
            $password = "mysql";
            $host = "LOCALHOST";
            $database = "requests";
            $dbh = new PDO('mysql:host='.$host.';dbname='.$database.'', $username, $password);
            return $dbh;

        } catch (PDOException $e) {
            print "Error!: " .$e->getMessage() . "<br/>";
            die();
        }
    }

}