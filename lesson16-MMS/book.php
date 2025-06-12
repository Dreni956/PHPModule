<?php

session_start();

include_once('config.php');

$user_id = $_SESSION['id'];
$movie_id = $_SESSION['movie_id'];

$nr_tickets = $_POST['nr_tickets'];
$date = $_POST['date'];
$time = $_POST['time'];



$sql = "INSERT INTO movies(movie_name,movie_desc,movie_quality,movie_rating,movie_image) VALUES (:movie_name, :movie_desc, :movie_quality, :movie_rating, :movie_image)";

 $insertBooking =$conn -> prepare($sql);

    $insertBooking -> bindParam(":user_id" , $movie_name);
    $insertBooking -> bindParam(":movies_desc" , $movie_desc);
    $insertBooking -> bindParam(":movies_quality" ,$movie_quality);
    $insertBooking -> bindParam(":movies_rating" ,$movie_rating);
    $insertBooking -> bindParam(":movies_image" ,$movie_image);

    $insertBooking ->execute();


?>