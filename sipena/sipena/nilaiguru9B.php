<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Nilai</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <h2>DAFTAR NILAI</h2>
        <a href="tambahnilai9A.php">➕ Tambah Data</a>
        <table border="1" cellpadding="10">
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Semester Ganjil</th>
                <th>Semester Genap</th>
                <th>Rata-rata</th>
                <th>Predikat</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            $result = mysqli_query($conn, "SELECT * FROM nilai");
            while ($row = mysqli_fetch_assoc($result)):
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nisn'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['ganjil'] ?></td>
                <td><?= $row['genap'] ?></td>
                <td><?= $row['rata_rata'] ?></td>
                <td><?= $row['predikat'] ?></td>
                <td>
                    <a href="editnilai9A.php?id=<?= $row['id'] ?>">✏ Edit</a> |
                    <a href="hapusnilai9A.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin hapus?')">🗑 Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>