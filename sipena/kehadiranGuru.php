<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi - SIM Akademik</title>
    <link rel="stylesheet" href="style1.css">
    
</head>
<body>

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
    </div>

    <div class="container">
        <h2>PRESENSI</h2>
        <form action="coba_prosessimpan.php" method="post">
            <table>
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th colspan="4">Status Kehadiran</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Baris 1 -->
                    <tr>
                        <td>Amanda Fahma</td>
                        <td class="status-radio">
                            <input type="radio" id="amanda-h" name="amanda" value="H"><label for="amanda-h">H</label>
                            <input type="radio" id="amanda-i" name="amanda" value="I"><label for="amanda-i">I</label>
                            <input type="radio" id="amanda-s" name="amanda" value="S"><label for="amanda-s">S</label>
                            <input type="radio" id="amanda-a" name="amanda" value="A"><label for="amanda-a">A</label>
                        </td>
                    </tr>

                    <!-- Baris 2 -->
                    <tr>
                        <td>Pawestri W.G</td>
                        <td class="status-radio">
                            <input type="radio" id="pawes-h" name="pawes" value="H"><label for="pawes-h">H</label>
                            <input type="radio" id="pawes-i" name="pawes" value="I"><label for="pawes-i">I</label>
                            <input type="radio" id="pawes-s" name="pawes" value="S"><label for="pawes-s">S</label>
                            <input type="radio" id="pawes-a" name="pawes" value="A"><label for="pawes-a">A</label>
                        </td>
                    </tr>

                    <!-- Baris 3 -->
                    <tr>
                        <td>Rehania Putri</td>
                        <td class="status-radio">
                            <input type="radio" id="rehania1-h" name="rehania1" value="H"><label for="rehania1-h">H</label>
                            <input type="radio" id="rehania1-i" name="rehania1" value="I"><label for="rehania1-i">I</label>
                            <input type="radio" id="rehania1-s" name="rehania1" value="S"><label for="rehania1-s">S</label>
                            <input type="radio" id="rehania1-a" name="rehania1" value="A"><label for="rehania1-a">A</label>
                        </td>
                    </tr>

                    <!-- Baris 4 -->
                    <tr>
                        <td>Rehania Putri</td>
                        <td class="status-radio">
                            <input type="radio" id="rehania2-h" name="rehania2" value="H"><label for="rehania2-h">H</label>
                            <input type="radio" id="rehania2-i" name="rehania2" value="I"><label for="rehania2-i">I</label>
                            <input type="radio" id="rehania2-s" name="rehania2" value="S"><label for="rehania2-s">S</label>
                            <input type="radio" id="rehania2-a" name="rehania2" value="A"><label for="rehania2-a">A</label>
                        </td>
                    </tr>
                </tbody>
            </table>

            <button type="submit" class="btn-kirim">Kirim</button>
        </form>
    </div>

</body>
</html>
