<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Diet Tracker</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="container">
    <h1>Admin Panel</h1>

    <h2>All Food Entries</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Food Name</th>
            <th>Calories</th>
            <th>Date Added</th>
        </tr>

        <?php
        $stmt = $conn->query("SELECT * FROM foods ORDER BY date_added DESC");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['id']}</td>
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
        }

        ?>
        <a href="index.php" style="text-decoration:none;">
    <button>Back to Tracker</button>
</a>

    </table>

</div>
</body>
</html>
