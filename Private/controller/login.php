<?php
require_once("../initiliaze.php");
session_start();
   $username = $_POST['email'];
   $password = md5($_POST['password']);
   $retval = user::login($username, $password);
    if ($retval==null) {
        echo ("Incorrect username/password");
    } else {
        $_SESSION["user_id"] = $retval["id"];
        $_SESSION["username"] = $retval["username"];
        $_SESSION["access_control"] = $retval["access_control"];
        $_SESSION["fullname"] = $retval["first_name"]." ".$retval["last_name"];
    }
    
    if (isset($_SESSION["username"])) {
        echo "1";
    }