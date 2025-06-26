<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password !== $password_confirm) {
        $error = "Passwords do not match.";
    } elseif (strlen($username) < 3) {
        $error = "Username must be at least 3 characters.";
    } else {

        $stmt = $conn->prepare("SELECT id FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $error = "Username already taken.";
        } else {

            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password_hash);

            if ($stmt->execute()) {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $conn->lastInsertId();
                header("Location: index.php");
                exit;
            } else {
                $error = "Error creating user.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up - Diet Tracker</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="container">
    <h1>Sign Up</h1>

    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form method="POST" action="signup.php">
        <input type="text" name="username" placeholder="Username" required minlength="3">
        <input type="password" name="password" placeholder="Password" required minlength="6">
        <input type="password" name="password_confirm" placeholder="Confirm Password" required minlength="6">
        <button type="submit">Sign Up</button>
    </form>

    <p>Already have an account? <a href="login.php">Log In</a></p>
</div>
</body>
</html>
