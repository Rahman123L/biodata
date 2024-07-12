<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_biodata";

$konek = new mysqli($servername, $username, $password, $database);
if ($konek->connect_error) {
    die("Koneksi Gagal" . $konek->connect_error);
}
?>