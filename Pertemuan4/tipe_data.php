<?php
    // Operasi Aritmatika dan Variabel
    $a = 10;
    $b = 5;
    $c = $a + 5;
    $d = $b + (10 * 5);
    $e = $d - $c;

    // Menampilkan Nilai Variabel
    echo "Variabel a: {$a} <br>";
    echo "Variabel b: {$b} <br>";
    echo "Variabel c: {$c} <br>";
    echo "Variabel d: {$d} <br>";
    echo "Variabel e: {$e} <br>";

    // Menampilkan Tipe Data Variabel
    var_dump($e);
    echo "<br><br>";

    // Penggunaan Variabel Float dan Perhitungan Rata-rata
    $nilaiMatematika = 5.1;
    $nilaiIPA = 6.7;
    $nilaiBahasaIndonesia = 9.3;

    $rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

    // Menampilkan Nilai Mata Pelajaran dan Rata-rata
    echo "Matematika: {$nilaiMatematika} <br>";
    echo "IPA: {$nilaiIPA} <br>";
    echo "Bahasa Indoenesia {$nilaiBahasaIndonesia} <br>";
    echo "Rata-rata {$rataRata} <br>";

    // Menampilkan Tipe Data Variabel
    var_dump($rataRata);
    echo "<br><br>";

    // Penggunaan Variabel Boolean
    $apakahSiswaLulus = true;
    $apakahsiswaSudahUjian = false;

    // Menampilkan Tipe Data Variabel
    var_dump($apakahSiswaLulus);
    echo "<br>";
    var_dump($apakahsiswaSudahUjian);
    echo "<br><br>";

    // Penggabungan String
    $namaDepan = "Ibnu";
    $namaBelakang = "Jakaria";

    $namaLengkap = "{$namaDepan} {$namaBelakang}";
    $namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

    // Menampilkan Nama Lengkap
    echo "Nama Depan: {$namaDepan} <br>";
    echo "Nama Belakang: {$namaBelakang} <br>";

    echo $namaLengkap;
    echo "<br><br>";
    
    // Penggunaan Array dan Akses Elemen
    $listMahasiwa = ["Wahid Abdullah", "Elmo bachtiar", "Lendis Fabri"];
    echo $listMahasiwa[0];
?>