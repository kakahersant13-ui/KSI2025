<?php
include 'koneksi.php';

// Contoh data yang akan di-insert (tanpa form)
$nama = "Budi";
$email = "budi@example.com";

$query = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";

echo "Query INSERT siap dijalankan: $query";
?>
