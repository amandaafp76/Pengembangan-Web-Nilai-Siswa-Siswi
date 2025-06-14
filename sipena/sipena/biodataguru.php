<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM guru LIMIT 1");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Guru - SIPENA</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body class="biodatasiswa-page">
   <div class="navbar">
        <div class="navbar-left">
            <img src="smpn4saradan.png" alt="Logo SMP">
            <div>
                <div class="navbar-title">SIPENA – SMP NEGERI 4 SARADAN</div>
                <div class="navbar-menu">
                    <a href="berandaguru.php">Beranda</a>
                    <a href="pilihnilaikehadiran.php">Akademik</a>
                    <a href="pilihkelasbiodata.php">Biodata Siswa</a>
                </div>
            </div>
        </div>
        <div class="navbar-right">
            <a href="notifikasiguru.php" class="bell">🔔</a> 
            <a href="viewprofilguru.php" class="profile-icon">RP</a> 
        </div>
    </div>

    <div class="container">
        <h2>Data Guru</h2>
        <?php if ($data): ?>
            <div class="profile">
                <img src="fotoedlink.jpeg" alt="Foto Guru">
                <div class="biodata">
                    <table>
                        <tr><td><b>NIP</b></td><td><?= $data['nip'] ?></td></tr>
                        <tr><td><b>Nama Guru</b></td><td><?= $data['nama'] ?></td></tr>
                        <tr><td><b>Mata Pelajaran</b></td><td><?= $data['mapel'] ?></td></tr>
                        <tr><td><b>Tempat Tanggal Lahir</b></td><td><?= $data['ttl'] ?></td></tr>
                        <tr><td><b>Nomor Handphone</b></td><td><?= $data['no_hp'] ?></td></tr>
                        <tr><td><b>Email</b></td><td><?= $data['email'] ?></td></tr>
                    </table>
                </div>
            </div>
            <div class="actions">
                <a href="editprofilguru.php?id=<?= $data['id'] ?>" class="btn btn-edit">✏️ Edit</a>
            </div>
        <?php else: ?>
            <p>Data belum tersedia.</p>
            <a href="tambahprofilguru.php" class="btn btn-edit" style="font-size: 0.8rem; padding: 5px 10px;">➕ Tambah Data</a>
        <?php endif; ?>
    </div>
</body>
</html>