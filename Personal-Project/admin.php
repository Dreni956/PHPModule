<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}


$stmt = $conn->prepare("SELECT is_admin FROM users WHERE username = ?");
$stmt->execute([$_SESSION['username']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user || !$user['is_admin']) {
    echo "Access denied.";
    exit;
}


$stmt = $conn->prepare("SELECT * FROM foods ORDER BY date_added DESC");
$stmt->execute();
$foods = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Admin Panel</h1>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> (Admin)</p>

    <h2>All Foods</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Food</th>
            <th>Calories</th>
            <th>Recommended</th>
            <th>Date Added</th>
        </tr>
        <?php foreach ($foods as $food): ?>
            <tr>
                <td><?= $food['id'] ?></td>
                <td><?= htmlspecialchars($food['food_name']) ?></td>
                <td><?= $food['calories'] ?></td>
                <td><?= $food['recommended'] ? '✔️' : '' ?></td>
                <td><?= $food['date_added'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
