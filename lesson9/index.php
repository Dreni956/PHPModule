
<?php 
$username = _GET ["username"];
$password = _GET ["password"];

echo $username;
echo "<br>";
echo $password;

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">

    <lable for ="username">username</lable>
    <input type="text" id="username" name="username">
    <lable for ="password">password</lable>
    <input type="password" id="password" name="password">
    <input type="sumbit" value="sumbit">
    </form>



</body>
</html>