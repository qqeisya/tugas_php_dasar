<?php
if (
    !isset($_GET["nim"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["nilai"]) ||
    !isset($_GET["grade"]) ||
    !isset($_GET["status"])
) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ccacff;
            margin: 0;
            padding: 40px 20px;
        }

        .kartu {
            background-color: white;
            max-width: 700px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 12px;
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        .baris {
            background-color: #f5f0ff;
            padding: 14px 16px;
            margin-bottom: 12px;
            border-radius: 4px;
        }

        .tombol {
            display: inline-block;
            background-color: #874bbc;
            color: #f5f0ff;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 10px;
            margin-top: 10px;
        }

        .tombol:hover {
            background-color: #5e3483;
        }
    </style>
</head>
<body>
    <div class="kartu">
        <h2>Detail Mahasiswa</h2>

        <div class="baris"><b>NIM:</b> <?= $_GET["nim"] ?></div>
        <div class="baris"><b>Nama:</b> <?= $_GET["nama"] ?></div>
        <div class="baris"><b>Jurusan:</b> <?= $_GET["jurusan"] ?></div>
        <div class="baris"><b>Email:</b> <?= $_GET["email"] ?></div>
        <div class="baris"><b>Nilai:</b> <?= $_GET["nilai"] ?></div>
        <div class="baris"><b>Grade:</b> <?= $_GET["grade"] ?></div>
        <div class="baris"><b>Status:</b> <?= $_GET["status"] ?></div>

        <a href="index.php" class="tombol">Kembali</a>
    </div>
</body>
</html>
