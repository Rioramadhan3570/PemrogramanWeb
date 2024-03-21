<?php
// Judul: Memutar Setiap Kata dalam Sebuah Kalimat
// Deskripsi: Mengubah setiap kata dalam sebuah kalimat menjadi kebalikannya.

$pesan = "saya arek malang";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?>
