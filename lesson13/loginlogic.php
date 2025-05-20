<?php
    include_once("config.php");

    if(isset($_POST["sumbit"])){
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $tempPASS = $_POST["passowrd"];
        $password = password_hash($temPass, PASSWORD_DEFAULT);


        if(empty($name) || empty($surname) || empty($username) || empty($email) || empty($password)){
            echo "You need to fill all of the fields"
        }
    }


?>