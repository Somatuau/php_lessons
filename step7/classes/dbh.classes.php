<?php

class Dbh {

    private function connect() {
       try {
           $username = "root";
           $password = "root";
           $dbh = new PDO('mysql:host=localhost;dbname=DOPlogin', $username, $password);
           return $dbh;
        } 
       catch (PDOException $e) {
            print "Error!:" .$e->getMessage() . "<br/>";
            die();
       }
    }
}