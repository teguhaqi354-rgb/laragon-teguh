<?php
$nama = htmlspecialchars($_POST['nama']);
$tanggal = $_POST['tanggal_lahir'];

$bulan = [
    1 => "Januari",
    2 => "Februari",
    3 => "Maret",
    4 => "April",
    5 => "Mei",
    6 => "Juni",
    7 => "Juli",
    8 => "Agustus",
    9 => "September",
    10 => "Oktober",
    11 => "November",
    12 => "Desember"
];

$pecah = explode("-", $tanggal);

$tanggal_indonesia = (int)$pecah[2] . " " .
                     $bulan[(int)$pecah[1]] . " " .
                     $pecah[0];

$hobi = $_POST['hobi'] ?? [];

if (count($hobi) > 0) {
    $hasil_hobi = implode(", ", $hobi);
} else {
    $hasil_hobi = "Tidak ada hobi yang dipilih";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Data Diri</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 40px;
        }

        .container {
            width: 400px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
        }

        h2 {
            text-align: center;
        }

        p {
            margin: 20px 0;
        }

        a {
            display: block;
            text-align: center;
            background: #2878d0;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Hasil Data Diri</h2>

    <p><strong>Nama Lengkap:</strong>
        <?= $nama ?>
    </p>

    <p><strong>Tanggal Lahir:</strong>
        <?= htmlspecialchars($tanggal_indonesia) ?>
    </p>

    <p><strong>Hobi:</strong>
        <?= htmlspecialchars($hasil_hobi) ?>
    </p>

    <a href="form_data_diri.html">Kembali ke Form</a>
</div>

</body>
</html>