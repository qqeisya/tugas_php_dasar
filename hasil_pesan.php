<?php
// Memastikan seluruh data POST tersedia
// Jika belum ada (misalnya halaman dibuka langsung), kembali ke form
if (
    !isset($_POST["nama"]) ||
    !isset($_POST["kelas"]) ||
    !isset($_POST["pesan"])
) {
    header("Location: form_pesan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
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
            color: #232323;
        }

        .baris {
            padding: 12px 16px;
            margin-bottom: 10px;
            border-radius: 4px;
        }

        .tombol {
            display: inline-block;
            background-color: #874bbc;
            color: #fcfcfd;
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
        <h2>Pesan Berhasil Dikirim</h2>

        <p>Terima kasih, <b><?= $_POST["nama"] ?></b>!</p>

        <div class="baris"><b>Nama:</b> <?= $_POST["nama"] ?></div>
        <div class="baris"><b>Kelas:</b> <?= $_POST["kelas"] ?></div>
        <div class="baris"><b>Pesan / Kesan:</b> <?= $_POST["pesan"] ?></div>

        <a href="index.php" class="tombol">Kembali ke Data Mahasiswa</a>
    </div>
</body>
</html>
