<?php
    // Operasi Aritmatika
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    // Menampilkan Hasil Operasi Aritmatika
    echo "Pertambahan = {$hasilTambah} <br>";
    echo "Pengurangan = {$hasilKurang} <br>";
    echo "Perkalian = {$hasilKali} <br>";
    echo "Pembagian = {$hasilBagi} <br>";
    echo "Sisa Bagi = {$sisaBagi} <br>";
    echo "Perpangkatan = {$pangkat} <br>";
    echo "<br>";

    // Operasi Pembanding
    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    // Menampilkan Hasil Operasi Pembanding
    echo "Hasil sama = {$hasilSama} <br>";
    echo "Hasil tidak sama = {$hasilTidakSama} <br>";
    echo "Hasil lebih kecil = {$hasilLebihKecil} <br>";
    echo "Hasil lebih besar = {$hasilLebihBesar} <br>";
    echo "Hasil lebih kecil sama = {$hasilLebihKecilSama} <br>";
    echo "Hasil lebih besar sama = {$hasilLebihBesarSama} <br>";
    echo "<br>";

    // Operasi Logika
    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    // Menampilkan Hasil Operasi Logika
    echo "Hasil and = {$hasilAnd} <br>";
    echo "Hasil or = {$hasilOr} <br>";
    echo "Hasil not A = {$hasilNotA} <br>";
    echo "Hasil not B = {$hasilNotB} <br>";
    echo "<br>";

    // Operasi Penugasan
    $penjumlahan = $a += $b;
    $pengurangan = $a -= $b;
    $perkalian = $a *= $b;
    $pembagian = $a /= $b;
    $modulo = $a %= $b;

    // Menampilkan Hasil Operasi Penugasan
    echo "{$penjumlahan} <br>";
    echo "{$pengurangan} <br>";
    echo "{$perkalian} <br>";
    echo "{$pembagian} <br>";
    echo "{$modulo} <br>";
    echo "<br>";

    // Operasi Identitas
    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    // Menampilkan Hasil Operasi Identitas
    echo "Hasil identik = {$hasilIdentik} <br>";
    echo "Hasil tidak identik = {$hasilTidakIdentik} <br>";
    echo "<br>";

    // Penggunaan Variabel dan Perhitungan Persentase
    $totalKursi = 45;
    $kursiDitempati = 28;
    $kursiKosong = $totalKursi - $kursiDitempati;
    $persentaseKosong = ($kursiKosong / $totalKursi) * 100;

    // Menampilkan Persentase Kursi Kosong
    echo "Presentase kursi kosong = {$persentaseKosong} <br>";
    echo "<br>"
?>