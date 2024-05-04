<?php

class Dbh {
    protected function connect() {
        try {
            $host = "localhost";
            $dbname = "crud_refresh";
            $username = "root";
            $password = "root";

            $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
            return $dbh;
            
        } catch (\PDOException $e) {
            //throw $th;
            print "Error!: " . $e->getMessage(). "<br>";
        }
    }
}