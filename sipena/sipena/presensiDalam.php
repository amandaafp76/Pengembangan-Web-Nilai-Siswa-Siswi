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
            <a href="notifikasisiswa.php"class="bell">🔔</a>
            <a href="biodatasiswa.php" class="profile-icon">A</a>
        </div>
    </div>

  <div class="main-container">
    <div class="title">PRESENSI</div>

    <div class="container">
      <div class="presensi-item">
        <div class="sesi">Sesi ke-1</div>
        <div class="status">Selesai</div>
        <div class="jadwal">Senin 10 Februari 2025</div>
        <button class="btn-hadir">Hadir</button>
      </div>

      <div class="presensi-item">
        <div class="sesi">Sesi ke-2</div>
        <div class="status">Selesai</div>
        <div class="jadwal">Senin 17 Februari 2025</div>
        <button class="btn-hadir">Hadir</button>
      </div>

      <div class="presensi-item">
        <div class="sesi">Sesi ke-3</div>
        <div class="status">Selesai</div>
        <div class="jadwal">Senin 24 Februari 2025</div>
        <button class="btn-hadir">Hadir</button>
      </div>

      <div class="presensi-item">
        <div class="sesi">Sesi ke-4</div>
        <div class="status">Selesai</div>
        <div class="jadwal">Senin 3 Maret 2025</div>
        <button class="btn-hadir">Hadir</button>
      </div>

      <div class="presensi-item">
        <div class="sesi">Sesi ke-5</div>
        <div class="status">Selesai</div>
        <div class="jadwal">Senin 10 Maret 2025</div>
        <button class="btn-hadir">Hadir</button>
      </div>

      <div class="presensi-item">
        <div class="sesi">Sesi ke-6</div>
        <div class="status">Selesai</div>
        <div class="jadwal">Senin 17 Maret 2025</div>
        <button class="btn-hadir">Hadir</button>
      </div>

      <div class="footer-btn">
        <a href="presensiDepan.php" class="btn-tutup">Tutup</a>
      </div>
    </div>
  </div>
</body>
</html>