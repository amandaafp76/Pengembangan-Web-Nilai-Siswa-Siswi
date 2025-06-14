<?php
include 'koneksi.php';

// Misalnya login sudah dilakukan dan ID guru tersimpan di sesi
session_start();
$id_guru = $_SESSION['id_guru']; // Pastikan sudah diset saat login

$query = mysqli_query($conn, "SELECT * FROM guru WHERE id = $id_guru");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Guru - SIPENA</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body class="biodatasiswa-page">
    <div class="navbar">
        <div class="navbar-left">
            <img src="smpn4saradan.png" alt="Logo smpn4saradan">
            <div>
                <div class="navbar-title">SIPENA - SMP Negeri 04 Saradan</div>
                <div class="navbar-menu">
                    <a href="berandaguru.php">Beranda</a>
                    <a href="pilihnilaikehadiran.php">Akademik</a>
                    <a href="pilihkelasbiodata.php">Biodata Siswa</a>
                </div>
            </div>
        </div>
        <div class="navbar-right">
            <a href="notifikasiguru.php" class="icon">🔔</a>
            <a href="viewprofilguru.php" class="profile-icon">RP</a>
        </div>
    </div>

    <div class="container">
        <h2>Profil Guru</h2>
        <div class="profile">
            <img src="<?= htmlspecialchars($data['foto']) ?>" alt="Foto Guru" width="150" height="150">
            <div class="biodata">
                <table>
                    <tr>
                        <td>NIP</td>
                        <td><?= htmlspecialchars($data['nip']) ?></td>
                    </tr>
                    <tr>
                        <td>Nama Guru</td>
                        <td><?= htmlspecialchars($data['nama']) ?></td>
                    </tr>
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td><?= htmlspecialchars($data['mapel']) ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td><?= htmlspecialchars($data['tempat_lahir']) ?>, <?= date('d F Y', strtotime($data['tanggal_lahir'])) ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Handphone</td>
                        <td><?= htmlspecialchars($data['no_hp']) ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= htmlspecialchars($data['email']) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="actions">
            <a href="editprofilguru.php?id=<?= $data['id'] ?>" class="btn btn-edit">✏️ Edit</a>
        </div>
    </div>
</body>
</html>