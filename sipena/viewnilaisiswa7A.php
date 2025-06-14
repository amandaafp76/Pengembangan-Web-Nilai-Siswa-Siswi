<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Nilai</title>
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
        <h2>DAFTAR NILAI KELAS 7A</h2>

        <!-- Tombol Tambah -->
        <div style="margin-bottom: 20px;">
            <a href="tambahnilai7A.php" style="background-color:#003366; color:white; padding:10px 15px; border-radius:5px; text-decoration:none;">➕ Tambah Data</a>
        </div>

        <!-- Tabel Nilai -->
        <table class="tabel-siswa" border="1" cellpadding="10" cellspacing="0" width="100%">
            <thead style="background-color:#003366; color:white;">
                <tr>
                    <th>ID</th>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Semester Ganjil</th>
                    <th>Semester Genap</th>
                    <th>Rata-rata</th>
                    <th>Predikat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $result = mysqli_query($conn, "SELECT * FROM nilai ORDER BY id DESC");

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . htmlspecialchars($row['nisn']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['kelas']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['ganjil']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['genap']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['rata_rata']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['predikat']) . "</td>";
                        echo "<td>
                                <a href='editnilai7A.php?id=" . $row['id'] . "'>✏ Edit</a> |
                                <a href='hapusnilai7A.php?id=" . $row['id'] . "' onclick=\"return confirm('Yakin ingin hapus?')\">🗑 Hapus</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9' style='text-align:center;'>Belum ada data nilai untuk kelas 7A.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
