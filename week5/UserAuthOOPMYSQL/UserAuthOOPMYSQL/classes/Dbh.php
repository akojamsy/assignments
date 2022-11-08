<?php

class Dbh {

    protected function connect(){
        try {
            $password = "";
            $username = "";
            $dbname = 'dbname=zuriphp';
            $host = 'mysqli:host=localhost;';
            $dbh = new PDO($host.$dbname, $username, $password);
            return $dbh;
            
        } catch (PDOException $e) {
            echo 'Error : '.$e->getMessage();
        }
    }
}

