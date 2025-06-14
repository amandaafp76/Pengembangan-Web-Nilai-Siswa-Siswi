<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi - SIM Akademik</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <img src="smpn4saradan.png" alt="Logo SMP">
            <div>
                <div class="navbar-title">SIPENA – SMP NEGERI 4 SARADAN</div>
                <div class="navbar-menu">
                    <a href="berandasiswa.php">Beranda</a>
                    <a href="pilihkelassiswa.php">Akademik</a>
                </div>
            </div>
        </div>
        <div class="navbar-right">
        <a href="notifikasisiswa.php"class="bell">🔔</a>
       <a href="biodatasiswa.php" class="profile-icon">A</a>
        </div>
    </div>

    <div class="notif-container">
        <h3>Notifikasi</h3>
        <div class="notif-section">
            <p class="notif-label">Hari ini</p>

            <div class="notif-item">
                <div class="notif-icon">RP</div>
                <div class="notif-text">
                    <div class="notif-message">Nilai telah diperbarui!</div>
                    <div class="notif-time">3 jam yang lalu</div>
                </div>
            </div>

            <div class="notif-item">
                <div class="notif-icon">RP</div>
                <div class="notif-text">
                    <div class="notif-message">Presensi telah diperbarui!</div>
                    <div class="notif-time">3 jam yang lalu</div>
                </div>
            </div>
        </div>

        <div class="notif-section">
            <p class="notif-label">Sebelumnya</p>

            <div class="notif-item">
                <div class="notif-icon">RP</div>
                <div class="notif-text">
                    <div class="notif-message">Presensi telah diperbarui!</div>
                    <div class="notif-time">15 Mei 2025</div>
                </div>
            </div>

            <div class="notif-item">
                <div class="notif-icon">RP</div>
                <div class="notif-text">
                    <div class="notif-message">Presensi telah diperbarui!</div>
                    <div class="notif-time">14 Mei 2025</div>
                </div>
            </div>

            <div class="notif-item">
                <div class="notif-icon">RP</div>
                <div class="notif-text">
                    <div class="notif-message">Nilai telah diperbarui!</div>
                    <div class="notif-time">13 Mei 2025</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>