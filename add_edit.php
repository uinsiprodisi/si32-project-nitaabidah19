<?php
require 'auth_check.php';
require 'inc/config.php';

$id = $_GET['id'] ?? '';
$data = ['title'=>'','genre'=>'','year'=>''];

if ($id) {
    $q = $mysqli->query("SELECT * FROM movies WHERE id=$id");
    $data = $q->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $year  = $_POST['year'];

    if ($id) {
        $mysqli->query(
            "UPDATE movies 
             SET title='$title', genre='$genre', year='$year' 
             WHERE id=$id"
        );
    } else {
        $mysqli->query(
            "INSERT INTO movies (title, genre, year)
             VALUES ('$title','$genre','$year')"
        );
    }
    header("Location: movies.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Film | Flynix</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="container">

<form method="post" id="filmForm">
    <h2>Form Film</h2>
    <input type="text" name="title" placeholder="Judul Film"
       value="<?= isset($data['title']) ? $data['title'] : '' ?>" required>
    <input type="text" name="genre" placeholder="Genre"
       value="<?= isset($data['genre']) ? $data['genre'] : '' ?>">
    <input type="number" name="year" placeholder="Tahun"
       value="<?= isset($data['year']) ? $data['year'] : '' ?>"> 
    <button class="btn">Simpan</button>
</form>

<script src="assets/js/script.js"></script>
</body>
</html>
