<?php
// Judul: Fungsi Perkenalan dan Perhitungan Umur
// Deskripsi: Mendefinisikan fungsi perkenalan dan hitungUmur, serta memanggilnya untuk perkenalan dengan nama "Elok".

//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan ($nama, $salam="Assalamuallaikum") {
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2003, 2024) ." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi perkenalan
perkenalan ("Elok");
?>
