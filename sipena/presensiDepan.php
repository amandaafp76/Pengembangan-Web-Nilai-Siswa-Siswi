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
  </header>

  <main>
    <h2 class="presensi-title">PRESENSI</h2>
    <div class="card-container">
      <!-- Card -->
      <div class="card">
        <div class="jadwal">
        <span>📅 Senin, 17 Maret 2025</span>
        </div>
        <p>👤 Hadir</p>
        <div class="progress">
            <span>Kehadiran: 6 dari 16 sesi</span>
            <div class="bar-row">
            <div class="bar">
            <div class="filled" style="width: 30%;"></div>
            </div>
            <a href="presensiDalam.php" class="percent-label">30%</a>
            </div>
            </div>
      </div>

      <div class="card">
        <div class="jadwal">
        <span>📅 Selasa, 18 Maret 2025</span>
        </div>
        <p>👤 Hadir</p>
        <div class="progress">
            <span>Kehadiran: 6 dari 16 sesi</span>
            <div class="bar-row">
            <div class="bar">
            <div class="filled" style="width: 30%;"></div>
            </div>
            <a href="presensiDalam.php" class="percent-label">30%</a>
            </div>
            </div>
      </div>

      <div class="card">
        <div class="jadwal">
        <span>📅 Rabu, 19 Maret 2025</span>
        </div>
        <p>👤 Hadir</p>
       <div class="progress">
            <span>Kehadiran: 6 dari 16 sesi</span>
            <div class="bar-row">
            <div class="bar">
            <div class="filled" style="width: 30%;"></div>
            </div>
           <a href="presensiDalam.php" class="percent-label">30%</a>
            </div>
            </div>
      </div>

      <div class="card">
        <div class="jadwal">
        <span>📅 Kamis, 20 Maret 2025</span>
        </div>
        <p>👤 Hadir</p>
       <div class="progress">
            <span>Kehadiran: 6 dari 16 sesi</span>
            <div class="bar-row">
            <div class="bar">
            <div class="filled" style="width: 30%;"></div>
            </div>
           <a href="presensiDalam.php" class="percent-label">30%</a>
            </div>
            </div>
      </div>
    </div>
  </main>
</body>
</html>