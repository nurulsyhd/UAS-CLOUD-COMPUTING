<?php
$servername = "db";
$username = "root";
$password = "rootpassword";
$dbname = "dockerdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi ke database GAGAL: " . $conn->connect_error);
}
echo "Koneksi ke database BERHASIL NURUL !";
$conn->close();
?>
