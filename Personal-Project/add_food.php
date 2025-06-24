<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $food_name = $_POST['food_name'];
    $calories = $_POST['calories'];
    $recommended = isset($_POST['recommended']) ? 1 : 0;

    $sql = "INSERT INTO foods (food_name, calories, date_added, recommended) VALUES (:food_name, :calories, NOW(), :recommended)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':food_name', $food_name);
    $stmt->bindParam(':calories', $calories, PDO::PARAM_INT);
    $stmt->bindParam(':recommended', $recommended, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error adding food.";
    }
} else {
    header("Location: index.php");
    exit;
}
?>
