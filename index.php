<?php
$mahasiswa = [
    [
        "nim" => "2507656",
        "nama" => "Nur Halimah",
        "jurusan" => "Pendidikan Guru Sekolah Dasar",
        "email" => "nurwatihalimah@upi.edu",
        "nilai" => 95
    ],
    [
        "nim" => "2507687",
        "nama" => "Rudi Santoso",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "rudi27@upi.edu",
        "nilai" => 55
    ],
    [
        "nim" => "2500165",
        "nama" => "Qeisya Angelita",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "qeisyacantik@upi.edu",
        "nilai" => 100
    ],
    [
        "nim" => "2509541",
        "nama" => "Ariana Grande",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "ariana@upi.edu",
        "nilai" => 70
    ],
    [
        "nim" => "2501345",
        "nama" => "Bruno Mars",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "bruno@upi.edu",
        "nilai" => 66
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ccacff;
            margin: 0;
            padding: 50px 20px;
        }

        .kartu {
            background-color: white;
            max-width: 1300px;
            margin: 0 auto;
            padding: 50px;
            border-radius: 12px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 40px;
        }

        .header h2 {
            margin: 0 0 8px 0;
            color: #333;
        }

        .header p {
            margin: 0;
            color: #333;
        }

        .tombol {
            display: inline-block;
            background-color: #8b58b9;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 10px;
        }

        .tombol:hover {
            background-color: #54287a;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #ddd6fe;
        }

        th {
            background-color: #8565b8;
            color: white;
            text-align: left;
        }

        th, td {
            padding: 12px;
        }

        .lulus {
            color: #21c131;
            font-weight: bold;
            padding: 4px 10px;
            border-radius: 12px;
            white-space: nowrap;
        }

        .tidak-lulus {
            color: #fc2f2f;
            font-weight: bold;
            padding: 4px 10px;
            border-radius: 12px;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="kartu">
        <div class="header">
            <div>
                <h2>Daftar Mahasiswa</h2>
                <p>Mini Website PHP Dasar</p>
            </div>
            <a href="form_pesan.php" class="tombol">Isi Form Pesan</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($mahasiswa as $data): ?>

                    <?php
                    // Menentukan grade menggunakan if, else if dan else
                    if ($data["nilai"] >= 80) {
                        $grade = "A";
                    } elseif ($data["nilai"] >= 70) {
                        $grade = "B";
                    } elseif ($data["nilai"] >= 60) {
                        $grade = "C";
                    } else {
                        $grade = "D";
                    }

                    // Menentukan Status menggunakan if dan else
                    if ($data["nilai"] >= 70) {
                        $status = "Lulus";
                        $kelas_status = "lulus";
                    } else {
                        $status = "Tidak Lulus";
                        $kelas_status = "tidak-lulus";
                    }

                    // URL untuk dikirim ke detail.php dengan method GET
                    $url = "detail.php?nim=" . $data["nim"]
                         . "&nama=" . $data["nama"]
                         . "&jurusan=" . $data["jurusan"]
                         . "&email=" . $data["email"]
                         . "&nilai=" . $data["nilai"]
                         . "&grade=" . $grade
                         . "&status=" . $status;
                    ?>

                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data["nim"] ?></td>
                        <td><?= $data["nama"] ?></td>
                        <td><?= $data["jurusan"] ?></td>
                        <td><?= $data["nilai"] ?></td>
                        <td><?= $grade ?></td>
                        <td><span class="<?= $kelas_status ?>"><?= $status ?></span></td>
                        <td><a href="<?= $url ?>" class="tombol">Lihat Detail</a></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
