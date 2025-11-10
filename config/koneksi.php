<?php

$servername = "localhost";
$database = "uinsi_2441919014";
$username = "root";
$password = "";

// Buat Koneksi Database
$conn = mysqli_connect($servername,$username,$password,$database);

// Cek koneksi

if (!$conn) {
    die("Koneksi Gagal".mysqli_connect_error());
}

echo "Koneksi Berhasil!";

?>

<?php

$nilai = 85;

if($nilai >= 90){
    echo "Nilai A";
}