<?php
$mysqli = new mysqli("localhost", "root", "", "flynix");

if ($mysqli->connect_error) {
    die("Koneksi database gagal");
}
