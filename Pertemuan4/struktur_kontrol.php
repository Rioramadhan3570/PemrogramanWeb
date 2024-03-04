<?php
    // Penentuan Nilai Huruf Berdasarkan Nilai Numerik
    $nilaiNumerik = 92;

    if($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai huruf: A";
    } elseif($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
        echo "Nilai huruf: B";
    } elseif($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
        echo "Nilai huruf: C";
    } elseif($nilaiNumerik < 70) {
        echo "Nilai huruf: D";
    }

    echo "<br><br>";

    // Perhitungan Waktu untuk Mencapai Jarak Target
    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }

    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

    echo "<br><br>";

    // Perhitungan Jumlah Buah yang Dipanen
    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i=1; $i <= $jumlahLahan ; $i++) { 
        $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    }

    echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

    echo "<br><br>";

    // Perhitungan Total Skor Ujian
    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach ($skorUjian as $skor) {
        $totalSkor += $skor;
    }

    echo "Total skor ujian adalah: $totalSkor";

    echo "<br><br>";

    // Penentuan Kelulusan Siswa Berdasarkan Nilai
    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

    foreach ($nilaiSiswa as $nilai) {
        if($nilai < 60) {
            echo "Nilai: $nilai (Tidak lulus) <br>";
            continue;
        }
        echo "Nilai: $nilai (Lulus) <br>";
    }

    echo "<br><br>";

    // Perhitungan Total Nilai dengan Mengabaikan Nilai Terendah dan Tertinggi
    $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    rsort($nilaiSiswa);
    array_splice($nilaiSiswa, 0, 2);
    array_splice($nilaiSiswa, -2);
    $nilaiTotal = 0;

    foreach ($nilaiSiswa as $nilai) {
        $nilaiTotal += $nilai;
    }

    echo "Total nilai dari 10 siswa dengan mengabaikan dua nilai tertinggi dan dua terendah adalah: $nilaiTotal";
    echo "<br> Nilai rata-rata dari nilai siswa tersebut adalah: " . $nilaiTotal / count($nilaiSiswa);

    echo "<br><br>";

    // Penghitungan Harga Setelah Diskon
    $hargaProduk = 120000;
    $diskon = 0.2; // 20%
    $hargaSetelahDiskon = 0;

    // Memeriksa apakah total harga melebihi batas untuk mendapatkan diskon
    if($hargaProduk > 100000) {
        // Menghitung harga setelah diskon
        $hargaSetelahDiskon = $hargaProduk - ($hargaProduk * $diskon);

        // Menampilkan informasi diskon dan total harga yang harus dibayar
        echo "Anda mendapatkan diskon 20%.<br>";
        echo "Total harga yang harus dibayar setelah diskon: Rp. $hargaSetelahDiskon";
    } else {
        // Jika total harga tidak melebihi batas untuk mendapatkan diskon
        echo "Total harga pembelian Anda tidak memenuhi syarat untuk mendapatkan diskon.";
    }

    echo "<br><br>";

    // Penentuan Hadiah Tambahan Berdasarkan Total Skor
    $totalSkor = 501;

    echo "Total skor pemain adalah: $totalSkor";
    echo "<br>Apakah pemain mendapatkan hadiah tambahan?";

    if($totalSkor > 500) {
        echo " YA";
    } else {
        echo " TIDAK";
    }

    echo "<br><br>";
 ?>   