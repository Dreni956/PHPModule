<?php 

$host = 'localhost';
$user = 'root';
$pass = '';

try{
   $conn = new PDO("mysql:host=$host", $user , $pass);
   $sql = "Created database test3b";
   $conn -> exec($sql);
   echo 'database is created';
}

catch(Exception $e ){
    echo "database not created, something went wrong.";
}
?>