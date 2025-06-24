<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food = $_POST['food_name'];
    $calories = $_POST['calories'];

    $stmt = $conn->prepare("INSERT INTO foods (food_name, calories) VALUES (?, ?)");
    $stmt->bind_param("si", $food, $calories);
    $stmt->execute();
    $stmt->close();
}

header("Location: index.php");
exit;
?>
