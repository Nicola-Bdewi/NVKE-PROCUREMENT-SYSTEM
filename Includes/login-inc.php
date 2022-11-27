<!-- Page Name: login-inc.php -->
<!-- Description: Once the user clickes "Sign In" in the index.php page, this script will run. -->

<?php

if(isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    include_once "../Classes/dbh-classes.php";
    include_once "../Classes/login-classes.php";
    include_once "../Classes/login-control-classes.php";
    $login = new LoginController($username, $password);

    //This object will call the loginUser function which will initiate the login process.
    $login->loginUser();
    
}

?>