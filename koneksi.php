<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_latihan";

$koneksi = mysqli_connect ($host,$user,$pass,$db);

//test koneksi
if ($koneksi) {
    echo "Koneksi Berhasil" . "<br>";
}
else {
    echo "Koneksi Gagal";
}
?>