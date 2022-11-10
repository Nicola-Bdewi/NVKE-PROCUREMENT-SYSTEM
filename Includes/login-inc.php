<?php

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    include "../Classes/dbh-classes.php";
    include "../Classes/login-classes.php";
    include "../Classes/login-control-classes.php";
    $login = new LoginController($username, $password);

    $login->loginUser();
}

?>