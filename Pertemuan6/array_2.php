<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f0f0;
        }
        table {
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Informasi Dosen</h2>
    <table>
        <?php
            $Dosen = [
                'Nama' => 'Elok Nur Hamdana',
                'Domisili' => 'Malang',
                'Jenis Kelamin' => 'Perempuan'
            ];
            foreach ($Dosen as $key => $value) {
                echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
            }
        ?>
    </table>
</body>
</html>