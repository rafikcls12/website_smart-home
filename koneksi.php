<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "db_suhu";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
