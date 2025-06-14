<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Biodata Siswa 7A</title> 
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
            <a href="biodataguru.php" class="profile-icon">RP</a>
        </div>
    </div>

    <div class="container">
        <h2>BIODATA SISWA KELAS 7A</h2>

        <!-- Tombol Tambah -->
        <div style="margin-bottom: 20px;">
            <a href="tambahbiodata7A.php" style="background-color:#003366; color:white; padding:10px 15px; border-radius:5px; text-decoration:none;">➕ Tambah Biodata</a> 
        </div>

        <!-- Tabel Biodata -->
        <table class="tabel-siswa" border="1" cellpadding="10" cellspacing="0" width="100%">
            <thead style="background-color:#003366; color:white;">
                <tr>
                    <th>ID</th>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Nomor HP</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $result = mysqli_query($conn, "SELECT * FROM biodata7a ORDER BY id DESC");

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $ttl = $row['tempat_lahir'] . ', ' . date('d M Y', strtotime($row['tanggal_lahir']));
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . htmlspecialchars($row['nisn']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['kelas']) . "</td>";
                        echo "<td>" . htmlspecialchars($ttl) . "</td>";
                        echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['no_hp']) . "</td>";
                        echo "<td>" . ($row['email'] ? '<a href="mailto:' . htmlspecialchars($row['email']) . '">' . htmlspecialchars($row['email']) . '</a>' : '-') . "</td>";
                        echo "<td>
                                <a href='editbiodata7A.php?id=" . $row['id'] . "'>✏ Edit</a> | 
                                <a href='hapusbiodata7A.php?id=" . $row['id'] . "' onclick=\"return confirm('Yakin ingin hapus?')\">🗑 Hapus</a> 
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='10' style='text-align:center;'>Belum ada data biodata siswa untuk kelas 7A.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>