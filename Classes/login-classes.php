<?php

class Login extends Dbh {

    protected function getUser($username, $password) {
        $stmt = $this->connect()->prepare('SELECT pwd FROM users WHERE username = ?;');

        if (!$stmt->execute(array($username))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $pwd = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($password == $pwd[0]["pwd"]) {
            $nextstmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? AND pwd = ?;');

            if (!$nextstmt->execute(array($username, $password))) {
                $nextstmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
    
            if ($nextstmt->rowCount() == 0) {
                $nextstmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $curruser = $nextstmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["username"] = $curruser[0]["username"];
            $_SESSION["usertype"] = $curruser[0]["user_type"];

            if($_SESSION["usertype"] == "admin") {
                header("location: ../adm-home.php");
            }
            else if ($_SESSION["usertype"] == "demander") {
                header("location: ../demander.php");
            }
            else if ($_SESSION["usertype"] == "supplier") {
                header("location: ../supplier.php");
            }
            else {
                header("location: ../index.php?invalidtype");
            }
        }
        else {
            header("location: ../index.php?error=wrongpassword");
            exit();
        }
    }
}

?>