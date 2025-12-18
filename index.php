<?php
require 'auth_check.php';
require 'inc/config.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home | Flynix</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<header>
    <div class="logo">FLYNIX</div>
    <nav>
        <a href="index.php">Home</a>
        <a href="movies.php">Data Film</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<section class="hero">
    <div class="hero-content">
        <h1>Film Populer</h1>
        <p>Streaming Platform Project</p>
        <br>
        <a href="movies.php" class="btn">Kelola Film</a>
    </div>
</section>

<div class="container">
    <h2>Daftar Film</h2>

    <div class="movies">
        <?php
        $data = $mysqli->query("SELECT * FROM movies");
        while ($m = $data->fetch_assoc()):
        ?>
        <div class="movie-card">
            <h4><?= $m['title']; ?></h4>
            <span><?= $m['genre']; ?> • <?= $m['year']; ?></span>
        </div>
        <?php endwhile; ?>
    </div>
</div>

<script src="assets/js/script.js"></script>
</body>
</html>
