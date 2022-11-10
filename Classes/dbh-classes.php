<?php

class Dbh {

    protected function connect() {
        try {
            $dbusername = "root";
            $dbpassword = "";
            $dbh = new PDO('mysql:host=localhost;dbname=nvke_procurement_system', $dbusername, $dbpassword);
            return $dbh;
        }
        catch (PDOException $err) {
            print "Error!: " . $err->getMessage() . "<br/>";
            die();
        }
    }
}

?>