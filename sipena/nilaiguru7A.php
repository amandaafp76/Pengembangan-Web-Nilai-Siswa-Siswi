<?php include 'koneksi.php'; 
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
                    <a href="berandaguru.php">Beranda</a>
                    <a href="pilihnilaikehadiran.php">Akademik</a>
                    <a href="pilihkelasguru.php">Biodata Siswa</a>
                </div>
            </div>
        </div>
        <div class="navbar-right">
            <a href="notifikasiguru.php"class="bell">🔔</a>
            <a href="biodataguru.php" class="profile-icon">RP</a>
        </div>
    </div>

    <div class="container">
        <div class="kelas-title">DAFTAR NILAI</div>

    <div class="container">
        <table class="tabel-siswa">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Semester Ganjil</th>
                    <th>Semester Genap</th>
                    <th>Rata-rata</th>
                    <th>Predikat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>10345</td>
                    <td>Amanda Fahma</td>
                    <td>7A</td>
                    <td>87</td>
                    <td>88</td>
                    <td>87,5</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>10346</td>
                    <td>Pawestri W.G</td>
                    <td>7A</td>
                    <td>86</td>
                    <td>89</td>
                    <td>87,5</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>10347</td>
                    <td>Rehania Putri</td>
                    <td>7A</td>
                    <td>80</td>
                    <td>87</td>
                    <td>83,5</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>10348</td>
                    <td>Rehania Putri</td>
                    <td>7A</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>B</td>
                </tr>
            </tbody>
        </table>

        <div class="actions">
            <button class="btn btn-edit">✏️ Edit</button>
        </div>
    </div>

</body>
</html>
