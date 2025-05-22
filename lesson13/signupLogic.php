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
        else{
            $sql = "SELECT username FROM users WHERE username=:username";

            $tempSQL = $conn -> prepare($sql);
            $tempSQL ->bindParam(':username', $username);
            $tempSQL ->execute();

            if($tempSQL -> rowCount() >0){
                echo"Username exists!";
                header("refresh:2; url= signup.php");
            }
            else{
                $sql = "INSERT INTO users (name, surname, username, email, password) VALUES (:name, :surname, :username, :email, :password)";
                $insertSQL = $conn ->prepare($sql);
                $insertSQL ->bindParam(':name' , $name);
                $insertSQL ->bindParam(':surname' , $surname);
                $insertSQL ->bindParam(':username' , $username);
                $insertSQL ->bindParam(':email' , $email);
                $insertSQL ->bindParam(':password' , $password);

                $insertSQL -> execute();

                echo"Data saved successfuly";
                header("refresh:2, url=login.php");
            }
        }
    }


?>