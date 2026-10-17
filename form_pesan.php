<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
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

        label {
            display: block;
            font-weight: bold;
            color: #333;
            margin-bottom: 6px;
        }

        input, textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #333;
            border-radius: 6px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            margin-bottom: 18px;
        }

        input:focus, textarea:focus {
            outline: 2px solid #ccacff;
            border-color: #ccacff;
        }

        .tombol {
            display: inline-block;
            background-color: #874bbc;
            color: #f2eff7;
            font-size: 14px;
            text-decoration: none;
            padding: 10px 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .tombol:hover {
            background-color: #5e3483;
        }

        .tombol-ungu {
            background-color: #874bbc;
            color: white;
        }

        .tombol-ungu:hover {
            background-color: #5e3483;
        }
    </style>
</head>
<body>
    <div class="kartu">
        <h2>Form Pesan Mahasiswa</h2>

        <form action="hasil_pesan.php" method="post">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas" required>

            <label for="pesan">Pesan / Kesan</label>
            <textarea id="pesan" name="pesan" rows="6" required></textarea>

            <button type="submit" name="tombol_kirim" class="tombol tombol-ungu">Kirim</button>
            <a href="index.php" class="tombol">Kembali</a>
        </form>
    </div>
</body>
</html>
