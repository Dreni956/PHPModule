<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'diet_tracker';

$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Krijo databazën nëse nuk ekziston
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully.<br>";
} else {
    die("Error creating database: " . $conn->error);
}

$conn->select_db($dbname);

// Krijo tabelën
$tableSql = "CREATE TABLE IF NOT EXISTS foods (
    id INT AUTO_INCREMENT PRIMARY KEY,
    food_name VARCHAR(255) NOT NULL,
    calories INT NOT NULL,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($tableSql) === TRUE) {
    echo "Table 'foods' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
