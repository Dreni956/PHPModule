<?php
include_once('config.php');

if(isset($_POST['submit'])){
    $movies_name = $_POST['movie_name'];
    $movies_desc = $_POST['movie_desc'];
    $movies_quality = $_POST['movie_quality'];
    $movies_rating = $_POST['movie_rating'];
    $movies_image = $_POST['movie_image'];

    $sql = "INSERT INTO movies(movie_name,movie_desc,movie_quality,movie_rating,movie_image) VALUES (:movie_name, :movie_desc, :movie_quality, :movie_rating, :movie_image)";

    $insertMovie =$conn -> prepare($sql);

    $insertMovie -> bindParam(":movies_name" , $movie_name);
    $insertMovie -> bindParam(":movies_desc" , $movie_desc);
    $insertMovie -> bindParam(":movies_quality" ,$movie_quality);
    $insertMovie -> bindParam(":movies_rating" ,$movie_rating);
    $insertMovie -> bindParam(":movies_image" ,$movie_image);

    $insertMovie ->execute();
    header("Location:movies.php");
}

?>