<?php
require 'auth_check.php';
require 'inc/config.php';

$id = $_GET['id'];
$mysqli->query("DELETE FROM movies WHERE id=$id");

header("Location: movies.php");
exit;
