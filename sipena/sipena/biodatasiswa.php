<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM siswa LIMIT 1");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Siswa - SIPENA</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body class="biodatasiswa-page">
    <div class="navbar">
        <div class="navbar-left">
            <img src="smpn4saradan.png" alt="Logo SMP">
            <div>
                <div class="navbar-title">SIPENA – SMP NEGERI 4 SARADAN</div>
                <div class="navbar-menu">
                    <a href="berandasiswa.php">Beranda</a>
                    <a href="pilihnilaikehadiransiswa.php">Akademik</a>
                </div>
            </div>
        </div>
        <div class="navbar-right">
            <a href="notifikasisiswa.php" class="bell">🔔</a> 
            <a href="biodatasiswa.php" class="profile-icon">A</a> 
        </div>
    </div>

    <div class="container">
        <h2>Data Siswa</h2>
        <?php if ($data): ?>
            <div class="profile">
                <img src="uploads/<?= $data['foto'] ?>" alt="Foto Siswa" style="width:150px; height:auto;">
                <div class="biodata">
                    <table>
                        <tr><td><b>NIS</b></td><td><?= $data['nis'] ?></td></tr>
                        <tr><td><b>NISN</b></td><td><?= $data['nisn'] ?></td></tr>
                        <tr><td><b>Nama</b></td><td><?= $data['nama'] ?></td></tr>
                        <tr><td><b>Kelas</b></td><td><?= $data['kelas'] ?></td></tr>
                        <tr><td><b>Tempat Tanggal Lahir</b></td><td><?= $data['ttl'] ?></td></tr>
                        <tr><td><b>Alamat</b></td><td><?= $data['alamat'] ?></td></tr>
                        <tr><td><b>Nomor Handphone</b></td><td><?= $data['no_hp'] ?></td></tr>
                        <tr><td><b>Email</b></td><td><?= $data['email'] ?></td></tr>
                    </table>
                </div>
            </div>
            <div class="actions">
                <a href="editprofilsiswa.php?id=<?= $data['id'] ?>" class="btn btn-edit">✏️ Edit</a>
            </div>
        <?php else: ?>
            <p>Data belum tersedia.</p>
            <a href="tambahprofilsiswa.php" class="btn btn-edit" style="font-size: 0.8rem; padding: 5px 10px;">➕ Tambah Data</a>
        <?php endif; ?>
    </div>
</body>
</html>