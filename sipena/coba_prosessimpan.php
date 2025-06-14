<?php
include 'koneksi.php';

$pesan = "";
$data_yang_disimpan = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal = date('Y-m-d');

    $data_presensi = [
        'Amanda Fahma' => $_POST['amanda'] ?? '',
        'Pawestri W.G' => $_POST['pawes'] ?? '',
        'Rehania Putri 1' => $_POST['rehania1'] ?? '',
        'Rehania Putri 2' => $_POST['rehania2'] ?? '',
    ];

    foreach ($data_presensi as $nama => $status) {
        if ($status) {
            $stmt = $conn->prepare("INSERT INTO kehadiran (nama, status, tanggal) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nama, $status, $tanggal);
            $stmt->execute();

            // Menyimpan data yang berhasil disimpan untuk ditampilkan nanti
            $data_yang_disimpan[] = [
                'nama' => $nama,
                'status' => $status,
                'tanggal' => $tanggal
            ];
        }
    }

    $pesan = "Presensi berhasil disimpan!";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Presensi Terkirim</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #003366;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #003366;
            color: white;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="navbar-left">
        <img src="smpn4saradan.png" alt="Logo smpn4saradan">
        <div>
            <div class="navbar-title">SIPENA - SMP NEGERI 4 SARADAN</div>
            <div class="navbar-menu">
                <a href="berandaguru.php">Beranda</a>
                <a href="pilihnilaikehadiran.php">Akademik</a>
                <a href="pilihkelasbiodata.php">Biodata Siswa</a>
            </div>
        </div>
    </div>
    <div class="navbar-right">
        <a href="notifikasiguru.php" class="bell">🔔</a>
        <a href="biodataguru.php" class="profile-icon">RP</a>
    </div>
</div>

<div class="container">
    <h2>Status Pengiriman Presensi</h2>
    <?php if (!empty($pesan)) : ?>
        <div class="alert alert-success" style="padding: 20px; background-color: #d4edda; color: #155724; border-radius: 5px; margin-top: 20px;">
            <?php echo $pesan; ?>
        </div>

        <!-- TABEL DATA YANG DISIMPAN -->
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_yang_disimpan as $data) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($data['nama']); ?></td>
                        <td><?php echo htmlspecialchars($data['status']); ?></td>
                        <td><?php echo htmlspecialchars($data['tanggal']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="kehadiranGuru.php" class="btn-kembali" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #003366; color: white; text-decoration: none; border-radius: 5px;">Kembali ke Presensi</a>
    <?php else : ?>
        <div class="alert alert-error" style="padding: 20px; background-color: #f8d7da; color: #721c24; border-radius: 5px; margin-top: 20px;">
            Terjadi kesalahan saat menyimpan data presensi.
        </div>
    <?php endif; ?>
</div>

</body>
</html>