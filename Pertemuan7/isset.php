<?php
$umur;
if (isset ($umur) && $umur <= 18) {
    echo "anda sudah dewasa";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan";
}

$data = array("nama" => "jane", "usia" => 25);
if (isset ($data["nama"])) {
    echo " nama : " . $data["nama"];
} else {
    echo "variabel data tidak ditemukan dalam array.";
}
?>