<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa - SIM Akademik</title>
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

<div class="container-akademik">
   <div class="card-akademik">
    <a href="pilihkelassiswa.php" class="btn-akademik">NILAI</a>
    <a href="pilihkelaskehadiransiswa.php" class="btn-akademik">KEHADIRAN</a>
</div>
</div>

</body>
</html>
