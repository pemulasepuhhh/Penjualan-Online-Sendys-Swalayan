<?php
$host = "localhost"; //alamat server
$user = "root";     // user ke db
$pass = "";         // password ke db
$dbnm = "database_sendys_swalayan"; //nama database

$conn = mysqli_connect($host, $user, $pass, $dbnm);

// if (!$conn) {
//     die("Koneksi DB Gagal: " . mysqli_connect_error());
// } else {
//     echo "Koneksi ke database berhasil!";
// }
?>