<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';


$sql = "SELECT * FROM foods ORDER BY date_added DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();

$totalCalories = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Diet Tracker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></p>

    <h1>Diet Tracker</h1>

    <form action="add_food.php" method="POST">
        <input type="text" name="food_name" placeholder="Food name" required>
        <input type="number" name="calories" placeholder="Calories" required>
        <label>
            <input type="checkbox" name="recommended" value="1"> Recommended
        </label>
        <button type="submit">Add Food</button>
    </form>

    <h2>Food Log</h2>
    <table>
        <tr>
            <th>Food</th>
            <th>Calories</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['food_name']) . "</td>
                    <td>" . htmlspecialchars($row['calories']) . "</td>
                    <td>" . htmlspecialchars($row['date_added']) . "</td>
                    <td>
                        <form action='delete_food.php' method='POST' onsubmit='return confirm(\"Are you sure?\")'>
                            <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                            <button type='submit'>Delete</button>
                        </form>
                    </td>
                </tr>";
            $totalCalories += $row['calories'];
        }
        ?>
    </table>

    <h3>Total Calories: <?php echo $totalCalories; ?></h3>

    <a href="admin_login.php">
    <button class="admin-btn">Go to Admin Panel</button>
</a>


</div>

</div>



</body>
</html>
