<?php
require 'auth_check.php';
require 'inc/config.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Film | Flynix</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<header>
    <div class="logo">FLYNIX</div>
    <nav>
        <a href="index.php">Home</a>
        <a href="movies.php">Data Film</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<body class="container">
    <h2>Daftar Film</h2>
<br>
    <a href="add_edit.php" class="btn">Tambah Film</a>
    <div class="movie-container">
<?php
$data = $mysqli->query("SELECT * FROM movies");
while ($m = $data->fetch_assoc()):
?>
    <div class="movie-card">
        <img src="assets/images/movies/<?= $m['poster']; ?>" alt="<?= $m['title']; ?>">
        <h3><?= $m['title']; ?></h3>

        <div class="movie-actions">
            <a href="add_edit.php?id=<?= $m['id']; ?>" class="btn">Edit</a>
            <a href="delete.php?id=<?= $m['id']; ?>" class="btn btn-delete">Hapus</a>
        </div>
    </div>
<?php endwhile; ?>
</div>
<script src="assets/js/script.js"></script>
</body>
</html>
