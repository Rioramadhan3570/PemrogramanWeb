<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Array Multidimensi</title>
    <style>
        body {
            font-family: Times;
        }
        .student-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            border: 1px solid #ccc; 
            padding: 10px; 
        }
        .student-avatar {
            width: 100px;
            height: 130px; 
            object-fit: cover; 
            margin-right: 20px;
        }
        .student-details {
            display: flex;
            flex-direction: column;
            margin: 10px 0;
        }
        .student-details p {
            margin: 0;
        }
        .symbol {
            font-size: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa Array Multidimensi</h1>
    <h3>Rio Ramadhan / SIB 2D - 25</h3>

    <?php
    // Array multidimensi untuk data mahasiswa
    $mahasiswa = array(
        array("Nama" => "Spiderman", "NIM" => "123456", "Jurusan" => "Teknik Informatika", "Email" => "spiderman@gmail.com", "Avatar" => "img/spiderman1.jpg"),
        array("Nama" => "Batman", "NIM" => "654321", "Jurusan" => "Teknik Mesin", "Email" => "batman@gmail.com", "Avatar" => "img/batman1.jpg"),
        array("Nama" => "Joker", "NIM" => "666666", "Jurusan" => "Teknik Kimia", "Email" => "joker@gmail.com", "Avatar" => "img/joker1.jpg"),
        array("Nama" => "Thor", "NIM" => "098765", "Jurusan" => "Teknik Listrik", "Email" => "thor@gmail.com", "Avatar" => "img/thor1.jpg"),
        array("Nama" => "Dead Pool", "NIM" => "567890", "Jurusan" => "Teknik Sipil", "Email" => "deadpool@gmail.com", "Avatar" => "img/dp1.jpg")
    );

    // Loop melalui array untuk menampilkan data mahasiswa
    foreach ($mahasiswa as $data) {
        echo '<div class="student-container">';
        echo '<img src="' . $data["Avatar"] . '" alt="Avatar" class="student-avatar">';
        echo '<div class="student-details">';
        echo '<p><span class="symbol">◉</span> Nama: ' . $data["Nama"] . '</p>';
        echo '<p><span class="symbol">◉</span> NIM: ' . $data["NIM"] . '</p>';
        echo '<p><span class="symbol">◉</span> Jurusan: ' . $data["Jurusan"] . '</p>';
        echo '<p><span class="symbol">◉</span> Email: ' . $data["Email"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>+
</body>
</html>