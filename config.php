<?php
// konfigurasi koneksi
$host = "localhost";
$user = "root";
$password = "";
$dbname = "ticket";

// buat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>