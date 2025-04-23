<?php
// ==================1==================
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "ead_library";

// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 
$conn = mysql_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>