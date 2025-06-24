<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Diet Tracker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Diet Tracker</h1>

    <form action="add_food.php" method="POST">
        <input type="text" name="food_name" placeholder="Food name" required>
        <input type="number" name="calories" placeholder="Calories" required>
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
        $sql = "SELECT * FROM foods ORDER BY date_added DESC";
        $result = $conn->query($sql);
        $totalCalories = 0;

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['food_name']}</td>
                    <td>{$row['calories']}</td>
                    <td>{$row['date_added']}</td>
                    <td>
                        <form action='delete_food.php' method='POST' onsubmit='return confirm(\"Are you sure?\")'>
                            <input type='hidden' name='id' value='{$row['id']}'>
                            <button type='submit'>Delete</button>
                        </form>
                    </td>
                </tr>";
            $totalCalories += $row['calories'];
        }
        ?>
    </table>

    <h3>Total Calories: <?php echo $totalCalories; ?></h3>
</div>
</body>
</html>
