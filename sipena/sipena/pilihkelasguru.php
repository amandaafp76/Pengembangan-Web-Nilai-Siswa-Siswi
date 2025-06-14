<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Kelas - SIM Akademik</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body class="pilihkelas-page">

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
            <a href="notifikasisiswa.php"class="bell">🔔</a>
            <a href="biodataguru.php" class="profile-icon">RP</a>
        </div>
    </div>

    <div class="kelas-container">
        <h2>Pilih Kelas</h2>
        <select class="select-kelas" onchange="window.location.href=this.value">
            <option value="" disabled selected>Pilih Kelas</option>
            <option value="viewnilaisiswa7A.php">Kelas 7A</option>
            <option value="viewnilaisiswa7B.php">Kelas 7B</option>
            <option value="viewnilaisiswa8A.php">Kelas 8A</option>
            <option value="viewnilaisiswa8B.php">Kelas 8B</option>
            <option value="viewnilaisiswa9A.php">Kelas 9A</option>
            <option value="viewnilaisiswa9B.php">Kelas 9B</option>
        </select>
    </div>

</body>
</html>
