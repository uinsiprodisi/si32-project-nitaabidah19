<?php
session_start();
require 'inc/config.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = $mysqli->query(
        "SELECT * FROM users 
         WHERE username='$username' AND password='$password'"
    );

    if ($query->num_rows > 0) {
        $_SESSION['user'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Flynix</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<header>
    <div class="logo">FLYNIX</div>
</header>

<body class="login-bg">
    <div class="login-box">
    <h2>Sign In</h2>

    <?php if ($error): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button class="btn">Login</button>
    </form>
</div>

</body>
</html>
