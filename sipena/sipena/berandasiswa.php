<?php 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - SIM Akademik</title>
    <link rel="stylesheet" href="style1.css"> 
    <style>
    
        .btn-edit {
            background-color: #ffc107;
            color: black;
        }
    </style>
</head>
<body>
        <body class="pilihkelas-page">
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

    <div class="hero">
        <div class="overlay"></div>
        <div class="hero-text">
            <h1>VISI SEKOLAH</h1>
            <p>Terwujudnya insan yang berkarakter , cerdas, terampil berdasarkan imtaq dan berwawasan lingkungan</p>
            <h1>MISI SEKOLAH</h1>
            <p>1. Meningkatkan kualitas kurikulum sekolah dan perencanaan pembelajaran yang dinamis bagi semua guru<br>
                2. Melaksanakan berbagai model dan strategi pembelajaran untuk meningkatkan prestasi intelektual siswa secara optimal<br>
                3. Meningkatkan prestasi akademis non akademis sekolah<br>
                4. Meningkatkan kompetensi pendidik dan tenaga kependidikan<br>
                5. Meningkatkan sarana dan prasarana sekolah yang mendukung kualitas proses pendidikan/ pembelajaran</p>
        </div>
    </div>

    <!-- Fasilitas Online -->
    <div class="fasilitas"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>