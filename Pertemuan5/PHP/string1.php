<?php
// Judul: Manipulasi Teks dalam String
// Deskripsi: Penggunaan fungsi-fungsi untuk manipulasi teks dalam string.

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
Voluptatem reprehenderit nobis veritatis commodi fugiat molestias
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum
quisquam? Quos impedit eum nulla optio.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";

?>
